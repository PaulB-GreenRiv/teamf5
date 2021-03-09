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
        <?php
            //Variables
            //Variable for search bar input
            $searching = "";
            //Category Array
            $categories = array("Agriculture", "Circular Economy", "Clothing", "Consumer Goods", "Ecology", "Education", "Energy", "Healthcare", "Housing", "Lighting", "Manufacturing", "Transportation", "Wastewater", "Water");
            //Determines whether or not to search by category or by finding matching words
            $searchMode = false;

            //Gets searched item from search bar
            if (isset($_GET['search'])) {
                $searching = $_GET['search'];
            }

            //If what is searched is in the categories array, displays category name
            if (in_array($searching, $categories)) {
                echo "<h1>$searching</h1>";
            }
            //If search bar input is not empty, header displays Search: (Thing)
            else if (!empty($searching)) {
                echo "<h1>Search: $searching</h1>";
                $searchMode = true;
            }
            //For if nothing is being searched
            else {
                echo "<h1>Use the search bar or category list to start looking for companies!</h1>";
            }

        ?>
        <ul>
            <?php
                $sql = "";
                // Gets companies with Names/Descriptions with searched words
                if ($searchMode) {
                    $sql = "SELECT name, about, url, city, state, country, email, phone, logo FROM company WHERE about LIKE '%$searching%' OR name LIKE '%$searching%'";
                }
                // (Default) Gets all companies
                else if (empty($_GET)) {
                    $sql = "SELECT name, about, url, city, state, country, email, phone, logo FROM company";
                }
                // Gets all companies from one category
                else {
                    $sql = "SELECT name, about, url, city, state, country, email, phone, logo FROM company WHERE category = '$searching'";
                }

                //Query to database
                $result = mysqli_query($cnxn, $sql);

                //Opens row
                echo "<div class='row row-cols-2 row-cols-lg-4'>";
                //Assigns database fields to variables
                foreach ($result as $row) {
                    $name = $row['name'];
                    $about = $row['about'];
                    $url = $row['url'];
                    $validURL = !empty($url);
                    $city = $row['city'];
                    $state = $row['state'];
                    $country = $row['country'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    echo "<div class='col'>";
                        echo "<li>";
                            //Hyperlinks title and image if url is available
                            if ($validURL) {
                                echo "<h4><a href='$url' target='_blank'>$name</a></h4>";
                                echo "<a href='$url' target='_blank'><img class='rounded mx-auto d-block' src='images/coneybeare_favicon.png' alt='placeholder logo'></a>";
                            } else {
                                echo "<h4>$name</h4>";
                                echo "<img class='rounded mx-auto d-block' src='images/coneybeare_favicon.png' alt='placeholder logo'>";
                            }
                            //Displays Location if available
                            if (!empty($city) || !empty($state) || !empty($country))
                            { echo "<p>Location: $city $state $country</p>"; }
                            //Displays Tagline if available
                            if (!empty($about))
                            { echo "<p>Tagline: $about</p>"; }
                            //Displays Contact Info if available
                            if (!empty($email) || !empty($phone)) {
                                echo "<p>Contact Info:</p>";
                                if (!empty($email)) { echo "<p>email: $email</p>";}
                                if (!empty($phone)) { echo "<p>phone#: $phone</p>";}
                            }
                        echo "</li>";
                    echo "</div>";/*
                    $colNum++;
                    if ($colNum == 5) {
                        $colNum = 0;
                        $inRow = false;
                    }*/
                }
                echo "</div>";
                //Closes row if it is open
                //if ($inRow) {echo "</div>";}
                $inRow = false;
            ?>
        </ul>
    </div>
</div>

<?php
include('includes/footer.html');
?>
</body>
</html>