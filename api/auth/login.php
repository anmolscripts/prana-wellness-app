<?php
// login.php

header('Content-Type: application/json');

// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
    exit;
}

// Include DB connection
require_once '../../functions/db.php';

// Validate input
$email = trim($_POST['email'] ?? '');

if (empty($email)) {
    echo json_encode(['success' => false, 'message' => 'Email and password are required.']);
    exit;
}

$otp = rand(100000, 999999);

try {
    $conn->exec("USE $dbname");

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(mode: PDO::FETCH_ASSOC);
    if ($user) {
        $updateStmt = $conn->prepare("UPDATE users SET otp = ? WHERE id = ?");
        $insertOtp = $updateStmt->execute([$otp,$user['id']]);
        if ($insertOtp) {
            // Send OTP to email (pseudo code)
            // mail($email, "Your OTP", "Your OTP is: $otp");
            echo json_encode(['success' => true, 'message' => 'OTP sent to your email.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to send OTP.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Email not registered.']);
        exit;
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>