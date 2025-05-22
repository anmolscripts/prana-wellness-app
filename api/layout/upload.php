<?php
require_once '../../functions/db.php';
$uploadDir = "../../public/uploads/layout/";
if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

$intervelTime = $_POST['intervel_time'] ?? '';
$delayTime = $_POST['delay_time'] ?? '';
$isActive = isset($_POST['active']) ? filter_var($_POST['active'], FILTER_VALIDATE_BOOLEAN) : false;

$imagePaths = $_POST['existing_images'] ?? [];

if (isset($_FILES['images'])) {
    $count = count($_FILES['images']['name']);
    for ($i = 0; $i < $count; $i++) {
        $originalName = $_FILES['images']['name'][$i];
        $tmpName = $_FILES['images']['tmp_name'][$i];

        if ($tmpName) {
            $filename = time() . '_' . uniqid() . '_' . basename($originalName);
            $targetPath = $uploadDir . $filename;
            if (move_uploaded_file($tmpName, $targetPath)) {
                $imagePaths[] = $filename;
            }
        }
    }
}

try {
    $conn->exec("USE $dbname");

    $layoutKey = 'homepage_carousel';
    $componentType = 'carousel';
    $settings = json_encode([
        'intervel_time' => $intervelTime,
        'delay_time' => $delayTime,
        'images' => $imagePaths
    ]);

    $stmt = $conn->prepare("SELECT COUNT(*) FROM layout_settings WHERE layout_key = ?");
    $stmt->execute([$layoutKey]);
    $exists = $stmt->fetchColumn() > 0;

    if ($exists) {
        $stmt = $conn->prepare("UPDATE layout_settings SET component_type = ?, settings = ?, is_active = ?, updated_at = NOW() WHERE layout_key = ?");
        $stmt->execute([$componentType, $settings, $isActive, $layoutKey]);
    } else {
        $stmt = $conn->prepare("INSERT INTO layout_settings (layout_key, component_type, settings, is_active) VALUES (?, ?, ?, ?)");
        $stmt->execute([$layoutKey, $componentType, $settings, $isActive]);
    }

    echo json_encode(['success' => true, 'message' => 'Layout saved successfully.']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'DB error: ' . $e->getMessage()]);
}
