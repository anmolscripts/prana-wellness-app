<?php
/**
 *  Entry Point
 */
?>


<?php
// require_once 'functions/db.php';
// checkDatabaseExists($servername, $username, $password, $dbname);
// exit;
# Check if user is logged in if not redirect to login page 
require_once '../../functions/auth.php';
requireLogin();
?>
<?php
# User Login check and redirect to dashboard if already logged in
if (checkLogin()) {
    header("Location: dashboard");
    exit;
}
?>