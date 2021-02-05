<?php
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('includes/head.html');
?>
<body>

<!-- Header start (May want to make a header html file)-->
    <div class="container" id="main">
        <!-- Jumbotron -->
        <div class="jumbotron">
            <img src="images/coneybeare-favicon.png" height="170" width="171" alt="logo"/>
            <h1 class="display-4">Coneybeare Sustainability Catalog</h1>
            <p class="lead">THREE GENERATIONS OF SUCCESSFUL ENTREPRENEURS</p>
        </div>

    </div>
    <!--Start Nav-->
    <div class="mainContainer">
        <ul class="nav nav-tabs flex-column flex-sm-row">
            <li id="menu-item-home" class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li id="menu-item-about" class="nav-item"><a class="nav-link" href="about.html">About</a></li>
            <li id="menu-item-signup" class="nav-item"><a class="nav-link" href="form.php">Sign Up</a></li>
            <li id="menu-item-category" class="nav-item"><a class="nav-link" href="category.php">Categories</a></li>
        </ul>
    </div>
<!-- Header end -->

    <div class="container" id="main">
        <!--Include headers for each category-->
        <div id="catAgriculture">
            <h1>Agriculture</h1>
            <ul>
                <li>
                    <h1><a href="https://compostwerks.com/contact-us" target="_blank">CompostWorks LLC.</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a href="https://ecologyartisans.com" target="_blank">Ecology Artisans</a></h1>
                    <h2>Location: San Diego</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a href="https://farmbot.io" target="_blank">FarmBot</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a href="http://compostingtechnology.com/" target="_blank">Green Mountain Technologies</a></h1>
                    <h2>Location: Bainbridge Island, Washington</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a href="http://interraenergy.us" target="_blank">Interra Energy</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a href="https://www.kandarianorganicfarms.com" target="_blank">Kandarian Organic Farms</a></h1>
                    <h2>Location: Los Osos, CA</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a>Kitchen Table Consultants</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a href="http://www.lundberg.com" target="_blank">Lundberg Family Farms</a></h1>
                    <h2>Location: Richvale, CA</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a>Mastadon Family Farm</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a>McManis Family Ranch</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a href="https://naturesfootprint.com" target="_blank">Nature's Footprint</a></h1>
                    <h2>Location: Bellingham, WA</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a>Organic Valley</a></h1>
                    <h2>Location: La Farge, WI</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a>Pharmersea</a></h1>
                    <h2>Location: Santa Barbara</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a>San Diego Seed Company</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a>Spiked Soil</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a>Tablas Creek</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a href="https://unclejimswormfarm.com/" target="_blank">Uncle Jim's Worm Farm</a></h1>
                    <h2>Location:</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a>Upcyle and Company</a></h1>
                    <h2>Location: San Diego</h2>
                    <h2>Tagline:</h2>
                </li>
                <li>
                    <h1><a href="https://www.vitalchoice.com/" target="_blank">Vital Choice</a></h1>
                    <h2>Location: Bellingham, WA</h2>
                    <h2>Tagline:</h2>
                </li>
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