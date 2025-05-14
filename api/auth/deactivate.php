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
$accountStatus = trim($_POST['deactivate'] ?? '');


if (empty($email)) {
    echo json_encode(['success' => false, 'message' => 'Email and password are required.']);
    exit;
}

// echo json_encode(['success' => false, 'message' => $accountStatus]);

// exit;

try {
    $conn->exec("USE $dbname");

    $stmt = $conn->prepare("UPDATE users SET activate = ? WHERE email = ?");
    $result = $stmt->execute([$accountStatus, $email]);

    if ($result) {
            echo json_encode(['success' => true, 'message' => $stmt]);
        
    } else {
        echo json_encode(['success' => false, 'message' => 'Email not registered.']);
        exit;
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>