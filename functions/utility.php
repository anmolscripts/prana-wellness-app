<?php
function getActivityUsageStats(PDO $pdo, string $dbname, string $userActivitiesTable, string $activityTable): array
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

    // Step 2: Get total usage count
    $totalStmt = $pdo->query("SELECT COUNT(*) as total FROM `$userActivitiesTable`");
    $totalResult = $totalStmt->fetch(PDO::FETCH_ASSOC);
    $totalUsage = (int)$totalResult['total'];

    // Step 3: Get usage stats joined with activity table
    $sql = "
        SELECT 
            a.id AS activity_id,
            a.name AS activity_name,
            a.type AS activity_type,
            COUNT(u.activity_id) AS usage_count,
            MAX(u.activity_date) AS last_used
        FROM `$userActivitiesTable` u
        JOIN `$activityTable` a ON u.activity_id = a.id
        GROUP BY a.id, a.name, a.type
        ORDER BY usage_count DESC
    ";

    $stmt = $pdo->query($sql);
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


function getActivityUsageStatsWeekly(PDO $pdo, string $dbname, string $userActivitiesTable, string $activityTable): array
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

    // Step 2: Get total usage count
    $totalStmt = $pdo->query("SELECT COUNT(*) as total FROM `$userActivitiesTable`");
    $totalResult = $totalStmt->fetch(PDO::FETCH_ASSOC);
    $totalUsage = (int)$totalResult['total'];

    // Step 3: Get usage stats joined with activity table
    $sql = "
        SELECT 
        a.id AS activity_id,
        a.name AS activity_name,
        a.type AS activity_type,
        COUNT(u.activity_id) AS usage_count,
        MAX(u.activity_date) AS last_used
    FROM `$userActivitiesTable` u
    JOIN `$activityTable` a ON u.activity_id = a.id
    WHERE 
        u.activity_date >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
        AND MONTH(u.activity_date) = MONTH(CURDATE())
        AND YEAR(u.activity_date) = YEAR(CURDATE())
    GROUP BY a.id, a.name, a.type
    ORDER BY usage_count DESC
    ";

    $stmt = $pdo->query($sql);
    $activities = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Step 4: Prepare final result
    $result['labels'] = [];
    $result['series'] = [];

    foreach ($activities as $activity) {
        $usage = (int)$activity['usage_count'];
        $result['labels'][] = $activity['activity_name'];
        $result['series'][] = $usage;

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


function getAllActivityes(PDO $pdo, string $dbname, string $activityTable = 'activity'): array
{
    // Check if the activity table exists
    $checkStmt = $pdo->prepare("
        SELECT TABLE_NAME
        FROM INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA = :dbname AND TABLE_NAME = :table
    ");
    $checkStmt->execute([
        ':dbname' => $dbname,
        ':table' => $activityTable
    ]);

    if ($checkStmt->rowCount() === 0) {
        return ['error' => "Table '$activityTable' does not exist in database '$dbname'"];
    }

    // Get all activities
    $stmt = $pdo->query("SELECT * FROM `$activityTable`");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



function getUsersCount(PDO $pdo, string $dbname, string $userTable): int
{
    // Check if the user table exists
    $checkStmt = $pdo->prepare("
        SELECT TABLE_NAME
        FROM INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA = :dbname AND TABLE_NAME = :table
    ");
    $checkStmt->execute([
        ':dbname' => $dbname,
        ':table' => $userTable
    ]);

    if ($checkStmt->rowCount() === 0) {
        return 0; // Table does not exist, return 0 count
    }

    // Get total user count
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM `$userTable` WHERE permission = 'user' AND status = 'active'");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return (int)$result['total'];
}




// Persentage from array 
function getPercentageFromArray(array $array): array
{
    $total = array_sum($array);
    $percentages = [];

    foreach ($array as $key => $value) {
        $percentages[$key] = $total > 0 ? round(($value / $total) * 100, 2) : 0;
    }

    return $percentages;
}