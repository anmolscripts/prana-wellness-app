<?php
// save_goals.php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
    exit;
}

require_once '../../functions/db.php';

$user_id = intval($_POST['user_id'] ?? 0);
// echo json_encode(['success' => false, 'POST' => $_POST]);
//     exit;
$selectedGoalsRaw = $_POST['goals'] ?? '[]';
$selectedGoalsArray = json_decode($selectedGoalsRaw, true); // decode to array

$selectedGoals = array_map('intval', $selectedGoalsArray);
// $selectedGoals = [004,006];

if ($user_id <= 0) {
    echo json_encode(['success' => false, 'message' => 'Invalid or missing user ID.']);
    exit;
}

try {
    $conn->exec("USE $dbname");
    $today = date('Y-m-d');

    // Check if any goals already exist for today
    $checkStmt = $conn->prepare("SELECT COUNT(*) FROM goals WHERE user_id = :user_id AND DATE(goal_date) = :today");
    $checkStmt->execute([':user_id' => $user_id, ':today' => $today]);
    $existingCount = $checkStmt->fetchColumn();


   

    if ($existingCount > 0) {
        // Delete old goals
        $deleteStmt = $conn->prepare("DELETE FROM goals WHERE user_id = :user_id AND DATE(goal_date) = :today");
        $deleteStmt->execute([':user_id' => $user_id, ':today' => $today]);
    }

    // Insert new goals if provided
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

    $message = $existingCount > 0 ? 'Goals updated successfully.' : 'Goals added successfully.';
    echo json_encode(['success' => true, 'message' => $message]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
