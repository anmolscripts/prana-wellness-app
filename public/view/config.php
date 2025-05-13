<?php

/**
 * Configuration file
 */
?>

<?php
require_once '../../functions/db.php';

try {
    $stmt = $conn->prepare("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = :dbname");
    $stmt->bindParam(':dbname', $dbname);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "✅ Database '$dbname' exists. \n";
    } else {
        $sql = "CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
        $conn->exec($sql);
        echo "Database checked/created successfully \n";

        $conn->exec("USE `$dbname`");
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// -- USERS TABLE
$userTable = "users";
try {
    $conn->exec("USE `$dbname`");
    $stmt = $conn->prepare(
        "SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = :dbname 
          AND TABLE_NAME = :table"
    );
    $stmt->execute([
        ':dbname' => $dbname,
        ':table' => $userTable
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<br>✅ Table '$userTable' exists in database '$dbname'. \n";
    } else {
        echo "<br>❌ Table '$userTable' does not exist in database '$dbname'. \n";
        $createTableSQL = "
            CREATE TABLE `$userTable` (
                id INT PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) UNIQUE NOT NULL,
                password VARCHAR(255) NOT NULL,
                permission ENUM('user', 'admin') NOT NULL,
                status ENUM('active', 'inactive') NOT NULL DEFAULT 'inactive',
                otp INT NOT NULL,
                created_at DATETIME NOT NULL
            ) ENGINE=InnoDB
              DEFAULT CHARSET=utf8mb4
              COLLATE=utf8mb4_unicode_ci;
        ";
        $conn->exec($createTableSQL);
        echo "<br>✅ Table '$userTable' created successfully.\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// -- ACTIVITY TABLE
$activityTable = "activity";
try {
    $stmt = $conn->prepare(
        "SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = :dbname 
          AND TABLE_NAME = :table"
    );
    $stmt->execute([
        ':dbname' => $dbname,
        ':table' => $activityTable
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<br>✅ Table '$activityTable' exists in database '$dbname'. \n";

        // Check for 'description' column
        $checkDesc = $conn->prepare(
            "SELECT COLUMN_NAME 
             FROM INFORMATION_SCHEMA.COLUMNS 
             WHERE TABLE_SCHEMA = :dbname 
               AND TABLE_NAME = :table 
               AND COLUMN_NAME = 'description'"
        );
        $checkDesc->execute([
            ':dbname' => $dbname,
            ':table' => $activityTable
        ]);

        if ($checkDesc->rowCount() === 0) {
            $conn->exec("ALTER TABLE `$activityTable` ADD COLUMN `description` TEXT NULL AFTER `name`");
            echo "<br>🆕 Column `description` added to `$activityTable`.\n";
        } else {
            echo "<br>✅ Column `description` already exists in `$activityTable`.\n";
        }

        // Check for 'modified_datetime' column
        $checkModified = $conn->prepare(
            "SELECT COLUMN_NAME 
             FROM INFORMATION_SCHEMA.COLUMNS 
             WHERE TABLE_SCHEMA = :dbname 
               AND TABLE_NAME = :table 
               AND COLUMN_NAME = 'modified_datetime'"
        );
        $checkModified->execute([
            ':dbname' => $dbname,
            ':table' => $activityTable
        ]);

        if ($checkModified->rowCount() === 0) {
            $conn->exec("ALTER TABLE `$activityTable` ADD COLUMN `modified_datetime` DATETIME NULL AFTER `created_at`");
            echo "<br>🆕 Column `modified_datetime` added to `$activityTable`.\n";
        } else {
            echo "<br>✅ Column `modified_datetime` already exists in `$activityTable`.\n";
        }

    } else {
        echo "<br>❌ Table '$activityTable' does not exist in database '$dbname'. \n";
        $createActivitySQL = "
            CREATE TABLE `$activityTable` (
                id INT(3) ZEROFILL PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(255) NOT NULL,
                description TEXT NULL,
                type ENUM('time', 'boolean') NOT NULL,
                state ENUM('active', 'inactive') NOT NULL DEFAULT 'active',
                min_duration INT NULL,
                max_duration INT NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                modified_datetime DATETIME NULL
            ) ENGINE=InnoDB
              DEFAULT CHARSET=utf8mb4
              COLLATE=utf8mb4_unicode_ci;
        ";
        $conn->exec($createActivitySQL);
        echo "<br>✅ Table '$activityTable' created successfully.\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}


// -- USER_ACTIVITIES TABLE
$userActivitiesTable = "user_activities";
try {
    // ensure using correct database
    $conn->exec("USE `$dbname`");

    // 1) check if table exists
    $stmt = $conn->prepare(
        "SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = :dbname 
          AND TABLE_NAME = :table"
    );
    $stmt->execute([
        ':dbname' => $dbname,
        ':table' => $userActivitiesTable
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<br>✅ Table '$userActivitiesTable' exists in database '$dbname'. \n";

        // 2) check if activity_date column exists
        $checkCol = $conn->prepare(
            "SELECT COLUMN_NAME 
             FROM INFORMATION_SCHEMA.COLUMNS
             WHERE TABLE_SCHEMA = :schema
               AND TABLE_NAME   = :table
               AND COLUMN_NAME  = 'userActivityDate'"
        );
        $checkCol->execute([
            ':schema' => $dbname,
            ':table'  => $userActivitiesTable
        ]);

        if ($checkCol->rowCount() === 0) {
            // add missing column
            $conn->exec(
                "ALTER TABLE `$userActivitiesTable`
                 ADD COLUMN `userActivityDate` DATETIME NULL AFTER `score`"
            );
            echo "<br>🆕 Column `userActivityDate` added to `$userActivitiesTable`.\n";
        } else {
            echo "<br>✅ Column `userActivityDate` already exists in `$userActivitiesTable`.\n";
        }

    } else {
        echo "<br>❌ Table '$userActivitiesTable' does not exist in database '$dbname'. \n";
        $createUserActivitiesSQL = "
            CREATE TABLE IF NOT EXISTS `$userActivitiesTable` (
                `record_id`     INT            NOT NULL AUTO_INCREMENT,
                `user_id`       INT            NOT NULL,
                `activity_id`   INT(3) ZEROFILL NOT NULL,
                `logged_duration` INT          NULL,
                `logged_value`  BOOLEAN        NULL,
                `score`         INT            NULL,
                `activity_date` DATETIME       NOT NULL,
                `created_at`    DATETIME       NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`record_id`),
                KEY `idx_user` (`user_id`),
                KEY `idx_activity` (`activity_id`),
                KEY `idx_activity_date` (`activity_date`),
                CONSTRAINT `fk_user`     FOREIGN KEY (`user_id`)     REFERENCES `users`   (`id`) ON DELETE CASCADE,
                CONSTRAINT `fk_activity` FOREIGN KEY (`activity_id`) REFERENCES `activity`(`id`) ON DELETE CASCADE
            ) ENGINE=InnoDB
              DEFAULT CHARSET=utf8mb4
              COLLATE=utf8mb4_unicode_ci;
        ";
        $conn->exec($createUserActivitiesSQL);
        echo "<br>✅ Table '$userActivitiesTable' created successfully.\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// -- GOALS TABLE (unchanged)
$goalsTable = "goals";
try {
    $stmt = $conn->prepare(
        "SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = :dbname 
          AND TABLE_NAME = :table"
    );
    $stmt->execute([
        ':dbname' => $dbname,
        ':table' => $goalsTable
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<br>✅ Table '$goalsTable' exists in database '$dbname'. \n";
    } else {
        echo "<br>❌ Table '$goalsTable' does not exist in database '$dbname'. \n";
        $createGoalsSQL = "
            CREATE TABLE `$goalsTable` (
                goal_id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT NOT NULL,
                activity_id INT(3) ZEROFILL NOT NULL,
                goal_date DATETIME NOT NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES `$userTable`(id) ON DELETE CASCADE,
                FOREIGN KEY (activity_id) REFERENCES `$activityTable`(id) ON DELETE CASCADE
            ) ENGINE=InnoDB
              DEFAULT CHARSET=utf8mb4
              COLLATE=utf8mb4_unicode_ci;
        ";
        $conn->exec($createGoalsSQL);
        echo "<br>✅ Table '$goalsTable' created successfully.\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>
