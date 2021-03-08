
    <?php
    ($_GET);
    if (isset($_GET['uName'])) {
        $name = $_REQUEST['uName'];
    }

    if (isset($_GET['password'])) {
        $password = $_REQUEST['password'];
    }
    include('login.html');
    echo '<style>';
    include "styles/styles.css";
    echo '</style>';

    ?>





