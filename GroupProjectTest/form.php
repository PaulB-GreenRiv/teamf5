<!--Include Head.html-->
<?php
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('includes/head.html');
?>
<body>
<!--Include Header.html-->
<?php
  include('includes/header.html') ;
?>

<br>

<!--4 Explanatory text-->
<div id="aboutText">
    <p>Please complete the form to be included in the Sustainability Catalog.</p>
</div>

<!-- Form -->
<form action="confirm.php" method="post" id="orgForm" enctype="multipart/form-data">

    <!-- Organization Name -->
    <fieldset class="form-group border p-2">
        <legend>Organization Info</legend>

        <div class="row">
            <div class="col">
                <!-- Company Name -->
                <div class="form-group">
                    <label for="oname" class="oInfo">Organization Name *</label>
                    <input type="text" class="form-control" placeholder="Organization name" id="oname" name="oname">
                    <span class="err" id="err-oname">Please enter an organization name</span>
                </div>
            </div>
            <div class="col">
                <!-- Website Name -->
                <div class="form-group">
                    <label for="website" class="oInfo">Website *</label>
                    <input type="text" class="form-control" placeholder="website.com" id="website" name="website">
                    <span class="err" id="err-website">Please enter an website</span>
                </div>
            </div>
        </div>

        <!--4 - Add an about tab that, when filled, prompts for a tagline of 250 characters or less-->
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="about">Enter the tagline you wish to see in the sustainability catalog. (Character Limit: 250)</label>
                    <textarea class="form-control" rows="4" id="about" name="about"></textarea>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <!-- Category -->
                <div class="form-group">
                    <label for="category" class="oInfo">Category *</label>
                    <select id="category" name="category" class="form-control">
                        <option value="none">Select a category</option>
                        <option value="agriculture">Agriculture</option>
                        <option value="circular_economy">Circular Economy</option>
                        <option value="clothing">Clothing</option>
                        <option value="consumer_goods">Consumer Goods</option>
                        <option value="ecology">Ecology</option>
                        <option value="education">Education</option>
                        <option value="energy">Energy</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="housing">Housing</option>
                        <option value="lighting">Lighting</option>
                        <option value="manufacturing">Manufacturing</option>
                        <option value="transportation">Transportation</option>
                        <option value="wastewater">Wastewater</option>
                        <option value="water">Water</option>
                    </select>
                    <span class="err" id="err-category">Please enter an category</span>
                </div>
            </div>
            <div class="col">
                <!-- Email -->
                <div class="form-group">
                    <label for="cemail" class="oInfo">Company Email *</label>
                    <input type="text" class="form-control" placeholder="companyemailhere@email.com" id="cemail" name="cemail">
                    <span class="err" id="err-cemail">Please enter an email</span>
                </div>
            </div>
        </div>
    </fieldset>

    <!-- I just have this field here in case we need it later
    <fieldset class="form-group border p-2">
        <legend>Screaming</legend>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <label for="test" class="oInfo">Test Field</label>
                    <input type="text" class="form-control" placeholder="test" id="test" name="test">
                </div>
            </div>
        </div>
    </fieldset>
    -->

    <br>
    <!-- Location -->
    <fieldset class="form-group border p-2">
        <legend>Location</legend>

        <div class="row">
            <div class="col">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="inputCity">
            </div>
            <div class="col">
                <label for="inputState" class="form-label">State *</label>
                <select id="inputState" class="form-select" name="inputState">
                    <option selected="">Choose...</option>
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Arkansas">Arkansas</option>
                    <option value="California">California</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Connecticut">Connecticut</option>
                    <option value="Delaware">Delaware</option>
                    <option value="Florida">Florida</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Idaho">Idaho</option>
                    <option value="Illinois">Illinois</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Iowa">Iowa</option>
                    <option value="Kansas">Kansas</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Louisiana">Louisiana</option>
                    <option value="Maine">Maine</option>
                    <option value="Maryland">Maryland</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Michigan">Michigan</option>
                    <option value="Minnesota">Minnesota</option>
                    <option value="Mississippi">Mississippi</option>
                    <option value="Missouri">Missouri</option>
                    <option value="Montana">Montana</option>
                    <option value="Nebraska">Nebraska</option>
                    <option value="Nevada">Nevada</option>
                    <option value="New Hampshire">New Hampshire</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="New Mexico">New Mexico</option>
                    <option value="New York">New York</option>
                    <option value="North Carolina">North Carolina</option>
                    <option value="North Dakota">North Dakota</option>
                    <option value="Ohio">Ohio</option>
                    <option value="Oklahoma">Oklahoma</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Pennsylvania">Pennsylvania</option>
                    <option value="Rhode Island">Rhode Island</option>
                    <option value="South Carolina">South Carolina</option>
                    <option value="South Dakota">South Dakota</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Utah">Utah</option>
                    <option value="Vermont">Vermont</option>
                    <option value="Virginia">Virginia</option>
                    <option value="Washington">Washington</option>
                    <option value="West Virginia">West Virginia</option>
                    <option value="Wisconsin">Wisconsin</option>
                    <option value="Wyoming">Wyoming</option>
                </select>
                <span class="err" id="err-state">Please enter a state</span>
            </div>
            <div class="col">
                <label for="inputCountry" class="form-label">Country</label>
                <input type="text" class="form-control" id="inputCountry" name="inputCountry">
            </div>
            <div class="col">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="inputZip">
            </div>
        </div>
        <!--Geographical area served (local/regional, state, national, global)-->
        <div class="row">
            <div class="col">
                <label for="areaServed" class="form-label">Area Served</label>
                <select id="areaServed" class="form-control" name="areaServed">
                    <option value="localRegional">Local/Regional</option>
                    <option value="state">State</option>
                    <option value="national">National</option>
                    <option value="global">Global</option>
                </select>
            </div>
        </div>

    </fieldset>

    <br>
    <!-- Contact Info -->
    <fieldset class="form-group border p-2">
        <legend>Contact Info</legend>
        <p>This person will be contacted regarding questions about their submission</p>
        <div class="row">
            <div class="col">
                <!-- First Name -->
                <div class="form-group">
                    <label for="fname" class="cInfo">First Name</label>
                    <input type="text" class="form-control" placeholder="First name" id="fname" name="fname">
                </div>
            </div>
            <div class="col">
                <!-- Last Name -->
                <div class="form-group">
                    <label for="lname" class="cInfo">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname">
                </div>
            </div>
            <!--
            <div class="col">
                 Phone Number
                <div class="form-group">
                    <label for="phone" class="cInfo" >Enter a phone number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="123-456-789">
                </div>
                -->
                <!--pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
            </div>
            -->
            <div class="col">
                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="cInfo">Email</label>
                    <input type="text" class="form-control" placeholder="personalemailhere@email.com" id="email" name="email">
                </div>
            </div>
        </div>
    </fieldset>

    <br>

    <fieldset class="form-group border p-2">
        <legend>Logo</legend>
        <div class="row">
            <div class="form-group">
                <label for="imgUpload" class="cInfo">Upload an image of your logo</label>
                <input type="file" value="Upload Image" class="form-control" name="imgUpload" id="imgUpload">
            </div>
        </div>
    </fieldset>

    <br>

    <!-- Check and submit buttons -->
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    <!--When successfully submitted, have an alert thanking them
    Submitting sends them to a page which has organized info-->
    <!--Email function for successful form-->

</form>

<!--4 - When form is complete, have a section to upload a logo image-->

<!--Include Footer.html-->

<!-- Start of Conybear Footer -->
<?php
    include('includes/footer.html');
?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="../scripts/scripts.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->

</body></html>