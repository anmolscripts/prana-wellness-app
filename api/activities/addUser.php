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


// echo json_encode($_POST);
// exit;


// Validate input



$userAddedActivity = json_decode($_POST['userAddedActivity'], true);

// echo json_encode($userAddedActivity);
// // echo json_encode( $userId);
// exit;


// $type = trim($_POST['type'] ?? '');
// $status = trim($_POST['status'] ?? '');
// $minTime = trim($_POST['minTime'] ?? '');
// $maxTime = trim($_POST['maxTime'] ?? '');

// if (empty($name)) {
//     echo json_encode(['success' => false, 'message' => 'Name is required.']);
//     exit;
// }

// if (empty($type)) {
//     echo json_encode(['success' => false, 'message' => 'Type is required.']);
//     exit;
// }

// if ($type == 'time') {
//     if (empty($minTime)) {
//         echo json_encode(['success' => false, 'message' => 'Min time is required.']);
//         exit;
//     }
//     if (empty($maxTime)) {
//         echo json_encode(['success' => false, 'message' => 'Max time is required.']);
//         exit;
//     }
// }


try {
    $conn->exec("USE $dbname");
    $datetime = date('Y-m-d H:i:s');


    if (is_array($userAddedActivity)) {
        foreach ($userAddedActivity as $activity) {
            $userid = $activity['userId'];
            $activity_id = $activity['id'];
            // $value = $activity['value'];
    
            $logged_duration = "";
            $logged_value = "";
            $score = "";
    
            $activityValue = trim($activity['activity'] ?? '');
    
    
            if ($activityValue == "yes" ) {
                $logged_value = true;
                $score = 4;

            } 

            elseif ($activityValue ==  "no")
            {
                $logged_value = false;
                $score = 5; 
            }

        
            
            else {
                $logged_duration = $activityValue;
                $score = 6;
            }
    
            $datetime = date('Y-m-d H:i:s');
            $stmt = $conn->prepare("INSERT INTO user_activities (user_id, activity_id, logged_duration, logged_value, score, activity_date) VALUES (:user_id, :activity_id, :logged_duration, :logged_value, :score, :activity_date)");
    $insert = $stmt->execute([
        'user_id'     => $userid,
        'activity_id'    => $activity_id,
        'logged_duration' => $logged_duration,
        'logged_value' => $logged_value,
        'score' => $score,
        'activity_date' => $datetime
    ]);

    $lastId = $conn->lastInsertId();
    
            
        }
    } else {
        echo "Invalid activity data";
    }
    



    
    echo json_encode(['success' => true, 'id' => $lastId]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
