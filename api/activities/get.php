<?php
// login.php

header('Content-Type: application/json');

// Allow only POST
// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     http_response_code(405);
//     echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
//     exit;
// }

// Include DB connection
require_once '../../functions/db.php';


// echo json_encode($_POST);
// exit;


// Validate input
// $email = trim($_POST['email'] ?? '');

// if (empty($email)) {
//     echo json_encode(['success' => false, 'message' => 'Email and password are required.']);
//     exit;
// }

// $otp = rand(100000, 999999);

try {
    $conn->exec("USE $dbname");

    
    $stmt = $conn->prepare("SELECT * FROM activity");
    $stmt->execute();
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
