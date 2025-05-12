<?php

function getActivityUsageStats(PDO $pdo, string $dbname, string $userActivitiesTable, string $activityTable, int $userId): array
{
    // Step 1: Check if the user activity table exists
    $checkStmt = $pdo->prepare("
        SELECT TABLE_NAME
        FROM INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA = :dbname AND TABLE_NAME = :table
    ");
    $checkStmt->execute([
        ':dbname' => $dbname,
        ':table' => $userActivitiesTable
    ]);

    if ($checkStmt->rowCount() === 0) {
        return ['error' => "Table '$userActivitiesTable' does not exist in database '$dbname'"];
    }

    // Step 2: Get total usage count for this user
    $totalStmt = $pdo->prepare("SELECT COUNT(*) as total FROM `$userActivitiesTable` WHERE user_id = ?");
    $totalStmt->execute([$userId]);
    $totalResult = $totalStmt->fetch(PDO::FETCH_ASSOC);
    $totalUsage = (int)$totalResult['total'];

    // Step 3: Get usage stats joined with activity table for this user
    $sql = "
        SELECT 
            a.id AS activity_id,
            a.name AS activity_name,
            a.type AS activity_type,
            COUNT(u.activity_id) AS usage_count,
            MAX(u.activity_date) AS last_used
        FROM `$userActivitiesTable` u
        JOIN `$activityTable` a ON u.activity_id = a.id
        WHERE u.user_id = :user_id
        GROUP BY a.id, a.name, a.type
        ORDER BY usage_count DESC
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['user_id' => $userId]);
    $activities = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Step 4: Prepare final result
    $result = [
        'total_usage' => $totalUsage,
        'activities' => []
    ];

    foreach ($activities as $activity) {
        $usage = (int)$activity['usage_count'];
        $result['activities'][] = [
            'activity_id'    => $activity['activity_id'],
            'activity_name'  => $activity['activity_name'],
            'activity_type'  => $activity['activity_type'],
            'usage_count'    => $usage,
            'last_used'      => $activity['last_used'],
            'percentage'     => $totalUsage > 0 ? round(($usage / $totalUsage) * 100, 2) : 0
        ];
    }

    return $result;
}


function getAllActivityes(PDO $pdo, string $dbname, int $user_id, string $activityTable = 'activity'): array
{
    // Check if the activity table exists
    $checkStmt = $pdo->prepare("
        SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = :dbname 
          AND TABLE_NAME = :table
    ");
    $checkStmt->execute([
        ':dbname' => $dbname,
        ':table' => $activityTable
    ]);

    if ($checkStmt->rowCount() === 0) {
        return ['error' => "Table '$activityTable' does not exist in database '$dbname'"];
    }

    // Fetch activities with goal status and done status
    $query = "
        SELECT 
            a.id AS activity_id,
            a.name AS activity_name,
            a.type,
            a.state,
            CASE 
                WHEN g.goal_id IS NOT NULL THEN TRUE
                ELSE FALSE
            END AS is_goal_set,
            CASE 
                WHEN ua.record_id IS NOT NULL THEN TRUE
                ELSE FALSE
            END AS is_done_today
        FROM `$activityTable` a
        LEFT JOIN goals g 
            ON g.activity_id = a.id 
            AND g.user_id = :user_id
            AND DATE(g.goal_date) = CURDATE()
        LEFT JOIN user_activities ua 
            ON ua.activity_id = a.id 
            AND ua.user_id = :user_id
            AND DATE(ua.activity_date) = CURDATE()
        GROUP BY a.id
        ORDER BY a.id
    ";

    $stmt = $pdo->prepare($query);
    $stmt->execute([':user_id' => $user_id]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

