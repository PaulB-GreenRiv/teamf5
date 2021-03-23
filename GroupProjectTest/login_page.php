<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include ('includes/head.html');
?>

<body>

<?php
include('includes/header.html');
?>

<?php
($_GET);
if (isset($_GET['uName'])) {
    $name = $_REQUEST['uName'];
}

if (isset($_GET['password'])) {
    $password = $_REQUEST['password'];
}
//include('login.html');
//echo '<style>';

?>
</body>
</html>