<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('includes/phpsetup.php');
include('includes/head.html');

?>
<body>

<?php
include('includes/header.html');
?>

<div class="container" id="main">
    <!--Include headers for each category-->
    <div id="catAgriculture">
        <h1>Agriculture</h1>
        <ul>
            <?php
                $category = "Agriculture";
                $sql = "SELECT name, about, url, city, state, country, email, phone FROM company WHERE category = '$category'";
                $result = mysqli_query($cnxn, $sql);
                //Column #
                $colNum = 0;
                //Boolean for if a row is still open
                $inRow = false;
                foreach ($result as $row) {
                    if ($colNum == 0) {
                        echo "<div class='row row-cols-2 row-cols-lg-6'>";
                        $inRow = true;
                    }
                    $name = $row['name'];
                    $about = $row['about'];
                    $url = $row['url'];
                    $city = $row['city'];
                    $state = $row['state'];
                    $country = $row['country'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    echo "<div class='col'>";
                        echo "<li>";
                            echo "<h4><a href='$url' target='_blank'>$name</a></h4>";
                            echo "<a href='$url' target='_blank'><img class='rounded mx-auto d-block' src='images/coneybeare_favicon.png' alt='placeholder logo'></a>";
                            echo "<p>Location: $city $state $country</p>";
                            echo "<p>Tagline: $about</p>";
                            echo "<p>Contact Info: email: $email phone#: $phone</p>";
                        echo "</li>";
                    echo "</div>";
                    $colNum++;
                    if ($colNum == 6) {
                        echo "</div>";
                        $colNum = 0;
                        $inRow = false;
                    }
                }
                //Closes row if it is open
                //if ($inRow) {echo "</div>";}
                $inRow = false;
            ?>
        </ul>
    </div>
    <!--
    <div id="catCircularEconomy">
        <h1>Circular Economy</h1>
        <ul></ul>
    </div>
    <div id="catClothing">
        <h1>Clothing</h1>
        <ul></ul>
    </div>
    <div id="catConsumerGoods">
        <h1>Consumer Goods</h1>
        <ul></ul>
    </div>
    <div id="catEcology">
        <h1>Ecology</h1>
        <ul></ul>
    </div>
    <div id="catEducation">
        <h1>Education</h1>
        <ul></ul>
    </div>
    <div id="catEnergy">
        <h1>Energy</h1>
        <ul></ul>
    </div>
    <div id="catHealthcare">
        <h1>Healthcare</h1>
        <ul></ul>
    </div>
    <div id="catHousing">
        <h1>Housing</h1>
        <ul></ul>
    </div>
    <div id="catLighting">
        <h1>Lighting</h1>
        <ul></ul>
    </div>
    <div id="catManufacturing">
        <h1>Manufacturing</h1>
        <ul></ul>
    </div>
    <div id="catTransportation">
        <h1>Transportation</h1>
        <ul></ul>
    </div>
    <div id="catWastewater">
        <h1>Wastewater</h1>
        <ul></ul>
    </div>
    <div id="catWater">
        <h1>Water</h1>
        <ul></ul>
    </div>
    -->

    <!--List several companies in category-->
    <!--Company names link to site-->
</div>

<?php
include('includes/footer.html');
?>
</body>
</html>