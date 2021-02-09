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
<!--<div class="container" id="main">
     Jumbotron
    <div class="jumbotron">
        <img src="images/coneybeare-favicon.png" height="170" width="171" alt="logo"/>
        <h1 class="display-4">Coneybeare Sustainability Catalog</h1>
        <p class="lead">THREE GENERATIONS OF SUCCESSFUL ENTREPRENEURS</p>
    </div>

</div>-->
<!--Start Nav
<div class="mainContainer">
    <ul class="nav nav-tabs flex-column flex-sm-row">
        <li id="menu-item-home" class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li id="menu-item-about" class="nav-item"><a class="nav-link" href="about.html">About</a></li>
        <li id="menu-item-signup" class="nav-item"><a class="nav-link" href="form.php">Sign Up</a></li>
        <li id="menu-item-category" class="nav-item"><a class="nav-link" href="category.php">Categories</a></li>
    </ul>
</div>-->

<div class="container" id="whatIs">
    <h1>What is this site for?</h1>
    <p>
        This site is your host to find sustainability companies.
    </p>
</div>

<div class="container" id="categoryList">
    <h1>Categories</h1>
    <ul>
        <li>
            <img src="images/imgAgri.png" height="20" alt="Agriculture Image" id="AgriImg">
            <p>Agriculture</p>
        </li>
        <li>
            <img src="images/imgCirc.png" height="20" alt="Circular Economy Image" id="CircImg">
            <p>Circular Economy</p>
        </li>
        <li>
            <img src="images/imgCloth.png" height="20" alt="Clothing Image" id="ClothImg">
            <p>Clothing</p>
        </li>
        <li>
            <img src="images/imgCons.png" height="20" alt="Consumer Goods Image" id="ConsImg">
            <p>Consumer Goods</p>
        </li>
        <li>
            <img src="images/imgEco.png" height="20" alt="Ecology Image" id="EcoImg">
            <p>Ecology</p>
        </li>
        <li>
            <img src="images/imgEduc.png" height="20" alt="Education Image" id="EducImg">
            <p>Education</p>
        </li>
        <li>
            <img src="images/imgEnrg.png" height="20" alt="Energy Image" id="EnrgImg">
            <p>Energy</p>
        </li>
        <li>
            <img src="images/imgHeal.png" height="20" alt="Healthcare Image" id="HealImg">
            <p>Healthcare</p>
        </li>
        <li>
            <img src="images/imgHouse.png" height="20" alt="Housing Image" id="HouseImg">
            <p>Housing</p>
        </li>
        <li>
            <img src="images/imgLight.png" height="20" alt="Lighting Image" id="LightImg">
            <p>Lighting</p>
        </li>
        <li>
            <img src="images/imgManuf.png" height="20" alt="Manufacturing Image" id="ManufImg">
            <p>Manufacturing</p>
        </li>
        <li>
            <img src="images/imgTransp.png" height="20" alt="Transportation Image" id="TranspImg">
            <p>Transportation</p>
        </li>
        <li>
            <img src="images/imgWast.png" height="20" alt="Wastewater Image" id="WastImg">
            <p>Wastewater</p>
        </li>
        <li>
            <img src="images/imgWtr.png" height="20" alt="Water Image" id="WtrImg">
            <p>Water</p>
        </li>
    </ul>
</div>

<!--bootstrap card with logos-->
<!--
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/auroratech.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Aurora Tech</h5>
                        <p class="card-text">Technology company that is building the world’s driver and its ecosystem
                            to save lives, get crucial goods where they need to go, and make mobility more efficient
                            and accessible for all.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://aurora.tech/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/allpowerlabs.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">All Power Labs</h5>
                        <p class="card-text">Astrolabe Analytics’ software makes batteries work better, longer and more
                            reliably, using a suite of cloud computing, data management and machine learning techniques.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="http://www.allpowerlabs.com/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/oValley1.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Organic Valley</h5>
                        <p class="card-text">Conglomerate of local agriculture co-ops in the Midwest.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://www.organicvalley.coop/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/Nuleaf1.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Nuleaf</h5>
                        <p class="card-text">NuLeaf’s NuTree makes treating and recycling water at any scale easy by
                            mimicking wetland ecosystems.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://www.nuleaftech.com/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/Evmatch.jpg" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Evmatch</h5>
                        <p class="card-text">EVmatch’s peer-to-peer network for EV charging harnesses the power of
                            sharing to address the need for more reliable and convenient charging.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://www.evmatch.com/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/aquacycl.png" height="250"  alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">Aquacycl</h5>
                        <p class="card-text">Aquacycl uses bacteria to convert organic waste into
                            electricity, while decentralizing wastewater treatment for industries and applications.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                               <a href="https://www.aquacycl.com/"><button type="button" class="btn btn-sm btn-outline-secondary">Visit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<?php
    include('includes/footer.html');
?>





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!--<script src="../scripts/scripts.js"></script> -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->

</body></html>