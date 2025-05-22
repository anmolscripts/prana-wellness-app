<?php
// auth.php

session_start();
function get_base_url():string {
    return 'http://localhost:9090/prana-wellness-app';
}
function checkLogin() {
    // Check if session exists
    if (!isset($_SESSION['user'])) {
        return false;
    }

    // Check session timeout (12 hours = 43200 seconds)
    $login_time = $_SESSION['user']['login_time'] ?? 0;
    if ((time() - $login_time) > 43200) {
        session_unset();
        session_destroy();
        return false;
    }

    return true;
}

function is_admin() {
    // Check if user is admin
    if (!isset($_SESSION['user'])) {
        return false;
    }

    if($_SESSION['user']['permission'] === 'admin') {
        return true;
    }

    return false;

}

function requireLogin() {
    if (!checkLogin()) {
        header("Location: ".get_base_url()."/auth/login");
        exit;
    }
}
?>
