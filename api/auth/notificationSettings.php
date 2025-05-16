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


$rawPayload = $_POST['finalPayload'] ?? '';
$data = json_decode($rawPayload, true);

// Validate input
$userEmail = trim($data['email'] ?? '');
$userid = trim($data['userId'] ?? '');
$notificationData = $data['notifications'];
$preference = $data['preference'];


// echo json_encode(['success' => false, 'message' => $data]);
// exit;


if (empty($userEmail)) {
    echo json_encode(['success' => false, 'message' => 'Email and password are required.']);
    exit;
}





try {
    $conn->exec("USE $dbname");


    $result = "";

        $checkStmt = $conn->prepare("SELECT * FROM notification WHERE userId = ?");
        $checkStmt->execute([$userid]);
        $chek_user = $checkStmt->rowCount();


        if ($chek_user  > 1) {
            $deleteStmt = $conn->prepare("DELETE FROM notification WHERE userId = ?");
            $deleteStmt->execute([$userid]);
        }



    foreach ($notificationData as $notification) {
        $notificationId = $notification['notificationId'];
        $type = $notification['type'];

        // These fields are booleans directly in notification object
        $email = $notification['email'];
        $account = $notification['account'];
        $push = $notification['push'];
        $notificationid = $notification['notificationId'];
        $notificationName =  $notification['type'];

        

        //  if ($chek_user  > 1) {
        //     $deleteStmt = $conn->prepare("DELETE FROM notification WHERE userId = ?");
        //     $deleteStmt->execute([$userid]);
        // }

        // if ($chek_user > 0) {
        //     $updateStmt = $conn->prepare("UPDATE notification SET 
        // notificationName = ?, 
        // notificationId = ?, 
        // email = ?, 
        // account = ?, 
        // push = ?, 
        // notificationTimings = ?, 
        // modify_date = NOW() 
        // WHERE userId = ?");

        //     $result = $updateStmt->execute([
        //         $notificationName,
        //         $notificationid,
        //         $email,
        //         $account,
        //         $push,
        //         $preference,
        //         $userid
        //     ]);
        // } else {

        //     $stmt = $conn->prepare("INSERT INTO notification (notificationName, notificationId , userId , userEmail , email, account, push,  notificationTimings) VALUES (?, ?, ?, ?, ?, ?, ? , ?)");

        //     $result = $stmt->execute([
        //         $notificationName,
        //         $notificationid,
        //         $userid,
        //         $userEmail,
        //         $email,
        //         $account,
        //         $push,
        //         $preference
        //     ]);
        // }

        // echo json_encode(['success' => false, 'message' => $chek_user]);
        // exit;



        // if ($chek_user  > 1) {
        //     $deleteStmt = $conn->prepare("DELETE FROM notification WHERE userId = ?");
        //     $deleteStmt->execute([$userid]);
        // }



        $stmt = $conn->prepare("INSERT INTO notification (notificationName, notificationId , userId , userEmail , email, account, push,  notificationTimings) VALUES (?, ?, ?, ?, ?, ?, ? , ?)");

        $result = $stmt->execute([
            $notificationName,
            $notificationid,
            $userid,
            $userEmail,
            $email,
            $account,
            $push,
            $preference
        ]);
    }



    if ($result) {

        // session_start();
        // session_unset();
        // session_destroy();
        echo json_encode(['success' => true, 'message' => $result]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Email not registered.']);
        exit;
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
