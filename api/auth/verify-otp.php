<?php

header('Content-Type: application/json');
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
    exit;
}

require_once '../../functions/db.php';
// echo json_encode($_POST);
//     exit;
$otp = trim($_POST['otp'] ?? '');
$email = trim($_POST['email'] ?? '');
if (empty($otp) || empty($email)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}


try {
    // Select database
    $conn->exec("USE $dbname");

    // Fetch user by email and otp
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND otp = ?");
    $stmt->execute([$email, $otp]);
    $user = $stmt->fetch(mode: PDO::FETCH_ASSOC);

    if ($user) {
        $activateFlag = $_POST['activate'] ?? null;
        // OTP matched, update user status to active
        if ($activateFlag === 'true') {
            $updateStmt = $conn->prepare("
    UPDATE users
    SET status   = :status,
        activate = :activate
    WHERE id = :id
");
            $updateStmt->execute([
                ':status'   => 'active',
                ':activate' => 1,           // or true, but 1 is safest for MySQL TINYINT(1)
                ':id'       => $user['id'],
            ]);
        } else {
            $updateStmt = $conn->prepare("UPDATE users SET status = 'active' WHERE id = ?");
            $updateStmt->execute([$user['id']]);
        }

        // Set session
        $_SESSION['user'] = [
            'id' => str_pad($user['id'], 4, '0', STR_PAD_LEFT),
            'name' => $user['name'],
            'email' => $user['email'],
            'permission' => $user['permission'],
            'image_path' => $user['imgPath'],
            'login_time' => time(),
        ];

        echo json_encode(['success' => true, 'user' =>  $_SESSION['user']]);
    } else {
        // OTP not matched
        echo json_encode(['success' => false, 'message' => 'Invalid OTP.']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
