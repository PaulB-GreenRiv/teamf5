<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('includes/head.html');
?>
<body>

    <div class="container">
        <h1>Thank you for providing your information!
            It has been sent to the Coneybeare Sustainability team for review.</h1>

        <pre>
            <?php

                var_dump($_POST);

                $oname = $_POST['oname'];
                $website = $_POST['website'];

                $about = $_POST['about'];

                $category = $_POST['category'];
                $cemail = $_POST['cemail'];

                $inputCity = $_POST['inputCity'];
                $inputState = $_POST['inputState'];
                $inputCountry = $_POST['inputCountry'];
                $inputZip = $_POST['inputZip'];
                $areaServed = $_POST['areaServed'];

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];

                $imgUpload = $_POST['imgUpload'];
                $logoUploaded = empty($imgUpload);

                echo "<h2>Submission Summary:</h2>";
                echo "<p>Organization Name: $oname</p>";
                echo "<p>Website: $website</p>";
                echo "<p>Tagline: $about</p>";
                echo "<p>Category: $category</p>";
                echo "<p>Company Email: $cemail</p>";
                echo "<p>Located: $inputCity, $inputState. ($inputCountry) ZIP: $inputZip</p>";
                echo "<p>Serves: $areaServed</p>";
                echo "<p>Contact: $fname $lname ($email)</p>";
                echo "<p>Uploaded Logo? $logoUploaded</p>";

                echo "<br>";

                $emailTo = '#';
                $emailFrom = '#';
                $emailBody = 'Welcome to Coneybeare\r\n';
                $emailBody .= "Name: $oname\r\n";
                $emailSubject = 'New Submission';
                $headers = "From: $emailFrom\r\n";
                $success = mail($emailTo, $emailSubject, $emailBody, $headers);
                $success = false;
                if ($success) {
                    echo "<h3>Your Submission has been placed!</h3>";
                }
                else {
                    echo "<h3>Submission Failed.</h3>";
                }
            ?>
        </pre>
    </div>

</body>
</html>