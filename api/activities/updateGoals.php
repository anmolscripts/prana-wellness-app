<?php
// save_goals.php

header('Content-Type: application/json');

// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
    exit;
}

// Include DB connection
require_once '../../functions/db.php';

// Get inputs
$user_id = intval($_POST['user_id'] ?? 0);
$selectedGoals = array_map('intval', $_POST['goals'] ?? []);

if ($user_id <= 0) {
    echo json_encode(['success' => false, 'message' => 'Invalid or missing user ID.']);
    exit;
}

try {
    $conn->exec("USE $dbname");
    
    // Delete old goals for today
    $today = date('Y-m-d');
    $deleteStmt = $conn->prepare("DELETE FROM goals WHERE user_id = :user_id AND DATE(goal_date) = :today");
    $deleteStmt->execute([
        ':user_id' => $user_id,
        ':today'   => $today
    ]);

    // Insert new goals
    if (!empty($selectedGoals)) {
        $insertStmt = $conn->prepare("
            INSERT INTO goals (user_id, activity_id, goal_date) 
            VALUES (:user_id, :activity_id, NOW())
        ");

        foreach ($selectedGoals as $activityId) {
            $insertStmt->execute([
                ':user_id' => $user_id,
                ':activity_id' => $activityId
            ]);
        }
    }

    echo json_encode(['success' => true, 'message' => 'Goals updated successfully.']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
