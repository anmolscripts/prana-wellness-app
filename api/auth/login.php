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

    $activateFlag = $_POST['activate'] ?? null;

    if ($user) {
        if (!$user['activate'] && $activateFlag !== 'true') {
            echo json_encode(['success' => false, 'message' => 'Account is deactivated', 'activate' => false]);
            exit;
        }
        $updateStmt = $conn->prepare("UPDATE users SET otp = ? WHERE id = ?");
        $insertOtp = $updateStmt->execute([$otp, $user['id']]);
        if ($insertOtp) {
            echo json_encode(value: ['success' => true, 'message' => 'OTP sent to your email.', 'code' => $otp]);
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
