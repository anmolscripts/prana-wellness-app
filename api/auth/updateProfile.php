<?php
require_once '../../functions/db.php';

// $uploadDir = "uploads/";
$uploadDir = "../../public/uploads/";

if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

$fullName = $_POST['firstName'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$country = $_POST['country'] ?? '';
$userid = $_POST['adminId'] ?? '';
$path = '';

if (isset($_FILES['image'])) {
    $imageName = time() . "_" . basename($_FILES["image"]["name"]);
    $targetPath = $uploadDir . $imageName;
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {
        $path = $imageName;
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to upload image.']);
        exit;
    }
}

$datetime = date('Y-m-d H:i:s');

try {
    $conn->exec("USE $dbname");

    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE id = ? AND email = ?");
    $stmt->execute([$userid, $email]);
    $exists = $stmt->fetchColumn() > 0;

    if ($exists) {

        if($path == "")
        {
            $updateStmt = $conn->prepare("UPDATE users SET phoneNo = ?, country = ?, name = ?,  modifyDate = ? WHERE id = ? AND email = ?");
        $updateStmt->execute([$phone, $country, $fullName,  $datetime, $userid, $email]);
        }
        
        else
        {
            $updateStmt = $conn->prepare("UPDATE users SET phoneNo = ?, country = ?, name = ?, imgPath = ?, modifyDate = ? WHERE id = ? AND email = ?");
        $updateStmt->execute([$phone, $country, $fullName, $path, $datetime, $userid, $email]);

        }
        

        echo json_encode(['success' => true, 'message' => 'User updated successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'User not found.']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}

?>
