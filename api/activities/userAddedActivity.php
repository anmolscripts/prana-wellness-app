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

    $stmt = $conn->prepare("SELECT * FROM user_activities WHERE user_Id = ?");
    $stmt->execute([$user_Id]);
    $activity = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($activity) {

        echo json_encode(['success' => true, 'activity' => $activity]);
    } else {
        echo json_encode(['success' => false, 'message' => 'no activity found']);
        exit;
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
