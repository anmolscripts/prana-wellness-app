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



?>