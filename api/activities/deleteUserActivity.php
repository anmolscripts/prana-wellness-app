<?php
// login.php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
    exit;
}

// Include DB connection
require_once '../../functions/db.php';





// Validate input
// $email = trim($_POST['email'] ?? '');

// if (empty($email)) {
//     echo json_encode(['success' => false, 'message' => 'Email and password are required.']);
//     exit;
// }

// $otp = rand(100000, 999999);




try {
    $conn->exec("USE $dbname");

    $user_Id = $_POST['userId'];
    $activity_Id = $_POST['activityId']; // Make sure this comes from your JS fetch request
    $stmt = $conn->prepare("DELETE FROM user_activities WHERE user_id = ? AND activity_id = ?");
    $success = $stmt->execute([$user_Id, $activity_Id]);


    if ($success) {
        echo json_encode(['success' => true, 'activity' => $success]);
    } else {
        echo json_encode(['success' => false, 'message' => 'no activity found']);
        exit;
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
