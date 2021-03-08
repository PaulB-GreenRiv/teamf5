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

<div class="jumbotron">
    <h2>Site Admin Login</h2>
</div>
<!--Form to login as admin -->
<form class="bg-light" action="login_page.php" method="get" id="loginForm">
    <div class="d-flex justify-content-center align-items-center container">
        <div class="row">
            <label for="uName"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uName" required="">
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required="">
            <button type="submit">Login</button>
        </div>
    </div>
</form>
<?php

include ('includes/footer.html');
?>
</body>
</html>



