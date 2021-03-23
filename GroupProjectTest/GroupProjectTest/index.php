<?php
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('includes/head.html');
?>

<body>
    <link href="images/symbol-defs.svg">
<?php
    include('includes/header.html');
?>

<!--<div class="container" id="whatIs">
    <h1>What is this site for?</h1>
    <p>
        A searchable database and on-line marketplace for innovative solutions in sustainability;
        Creating visibility and accelerating speed to market.
    </p>
</div>-->

<div class="container" id="categoryList">
    <h1>Categories</h1>
    <ul>
        <div class="row">
            <div class="col">
                <li>
                    <img src="images/imgAgri.png" height="20" alt="Agriculture Image" id="Agriculture">
                    <p><a href="category.php?getIndex=Agriculture">Agriculture</a></p>
                </li>
            </div>
            <div class="col">
                <li>
                    <img src="images/imgCirc.png" height="20" alt="Circular Economy Image" id="CircImg">
                    <p>Circular Economy</p>
                </li>
            </div>
            <div class="col">
                <li>
                    <img src="images/imgCloth.png" height="20" alt="Clothing Image" id="ClothImg">
                    <p>Clothing</p>
                </li>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <li>
                    <img src="images/imgCons.png" height="20" alt="Consumer Goods Image" id="ConsImg">
                    <p>Consumer Goods</p>
                </li>
            </div>
            <div class="col">
                <li>
                    <img src="images/imgEco.png" height="20" alt="Ecology Image" id="EcoImg">
                    <p>Ecology</p>
                </li>
            </div>
            <div class="col">
                <li>
                    <img src="images/imgEduc.png" height="20" alt="Education Image" id="EducImg">
                    <p>Education</p>
                </li>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <li>
                    <img src="images/imgEnrg.png" height="20" alt="Energy Image" id="EnrgImg">
                    <p>Energy</p>
                </li>
            </div>
            <div class="col">
                <li>
                    <img src="images/imgHeal.png" height="20" alt="Healthcare Image" id="HealImg">
                    <p>Healthcare</p>
                </li>
            </div>
            <div class="col">
                <li>
                    <img src="images/imgHouse.png" height="20" alt="Housing Image" id="HouseImg">
                    <p>Housing</p>
                </li>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <li>
                    <img src="images/imgLight.png" height="20" alt="Lighting Image" id="LightImg">
                    <p>Lighting</p>
                </li>
            </div>
            <div class="col">
                <li>
                    <img src="images/imgManuf.png" height="20" alt="Manufacturing Image" id="ManufImg">
                    <p>Manufacturing</p>
                </li>
            </div>
            <div class="col">
                <li>
                    <img src="images/imgTransp.png" height="20" alt="Transportation Image" id="TranspImg">
                    <p>Transportation</p>
                </li>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <li>
                    <img src="images/imgWast.png" height="20" alt="Wastewater Image" id="WastImg">
                    <p>Wastewater</p>
                </li>

            </div>
            <div class="col">
                <li>
                    <img src="images/imgWtr.png" height="20" alt="Water Image" id="WtrImg">
                    <p>Water</p>
                </li>
            </div>
            <div class="col"><!--This empty column keeps the list evenly spaced--></div>
        </div>
    </ul>
</div>



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