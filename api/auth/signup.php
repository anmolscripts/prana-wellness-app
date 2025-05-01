<?php
// signup.php

header('Content-Type: application/json');

// Allow only POST method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST method allowed.']);
    exit;
}
// Include database connection
require_once '../../functions/db.php';


// Validate fields
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
// $password = $_POST['password'] ?? '';
// $confirm_password = $_POST['confirm_password'] ?? '';
$permission = strtolower(trim($_POST['permission'] ?? ''));

// Generate current datetime
$datetime = date('Y-m-d H:i:s');

// Validation
// if (empty($name) || empty($email) || empty($password) || empty($confirm_password) || empty($permission)) {
//     echo json_encode(['success' => false, 'message' => 'All fields are required.']);
//     exit;
// }

if (empty($name) || empty($email) || empty($permission)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email format.']);
    exit;
}

// if ($password !== $confirm_password) {
//     echo json_encode(['success' => false, 'message' => 'Passwords do not match.']);
//     exit;
// }

$allowed_permissions = ['user', 'admin'];
if (!in_array($permission, $allowed_permissions)) {
    echo json_encode(['success' => false, 'message' => 'Permission must be user or admin.']);
    exit;
}

try {
    // Select database
    $conn->exec("USE $dbname");

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'Email already registered.']);
        exit;
    }
    $otp = rand(100000, 999999);
    // Hash password
    // $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert user (without manually providing id)
    $stmt = $conn->prepare("INSERT INTO users (name, email, permission, otp, created_at) VALUES (?, ?, ?, ?, ?)");
    $inserted = $stmt->execute([
        $name,
        $email,
        $permission,
        $otp,
        $datetime
    ]);

    if ($inserted) {
        // Get auto-incremented ID
        $rawId = $conn->lastInsertId();

        // Format ID as 4 digits
        $userId = str_pad($rawId, 4, '0', STR_PAD_LEFT);

        echo json_encode([
            'success' => true,
            'message' => 'User registered successfully.',
            'user_id' => $userId
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to register user.']);
    }

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
