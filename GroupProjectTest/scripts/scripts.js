document.getElementById("orgForm").onsubmit = validate;

function validate()
{
    let isValid = true;

    let errors = document.getElementsByClassName("err");
    for (let i =0; i<errors.length;i++){
        errors[i].style.display = "none";
    }

    //check org name
    let org = document.getElementById("oname").value;
    if (org == "")
    {
        let errOrg = document.getElementById("err-oname");
        errOrg.style.display = "inline";
        isValid = false;
    }

    //check website
    let website = document.getElementById("website").value;
    //Splits URL at the .
    let webSplit = website.split(".");
    let webEnd, webStart;
    //Stores the end of the URL if one is there
    if (webSplit.length > 1)
    {
        webEnd = webSplit[1];
    }
    //Checks the end of the URL to see if it is a valid website (add on to this if you can think of more)
    let propEnd = (webEnd == "com" || webEnd == "io" || webEnd == "us" ||
                    webEnd == "uk" || webEnd == "org" || webEnd == "gov");
    //Chects the beginning of the URL to see if it is https:// or http://
    webSplit = website.split("://");
    if (webSplit.length > 1)
    {
        webStart = webSplit[0];
    }
    let propStart = (webStart == "http" || webStart == "https");

    //If the URL is blank or has an improper start or end, an error is thrown
    if (website == "" || !propEnd || !propStart)
    {
        let errWebsite = document.getElementById("err-website");
        errWebsite.style.display = "inline";
        isValid = false;
    }

    //Logo
    let logo = document.getElementById("imgUpload").value;
    if (logo == "")
    {
        let errLogo = document.getElementById("err-img");
        errLogo.style.display = "inline";
        isValid = false;
    }

    //check address
    /*
    let address = document.getElementById("inputAddress").value;
    if (address == "")
    {
        let errAddress = document.getElementById("err-address");
        errAddress.style.display = "inline";
        isValid = false;
    }
    */

    //check category
    let category = document.getElementById("category").value;
    if (category == "none")
    {
        let errCategory = document.getElementById("err-category");
        errCategory.style.display = "inline";
        isValid = false;
    }

    //check email
    let email = document.getElementById("cemail").value;
    //checks to see if the email has a @ or a .com
    let propEmail = (email.includes("@") && email.includes(".com"));
    if (email == "" || !propEmail)
    {
        let errEmail = document.getElementById("err-cemail");
        errEmail.style.display = "inline";
        isValid = false;
    }

    //Phone



    let phone = document.getElementById("phone").value;

    let phoneSegments = phone.split("-");
    let truePhone1 = true, truePhone2 = true, truePhone3 = true;
    if (phoneSegments.length == 3)
    {
        truePhone1 = (phoneSegments[0].length === 3 && !isNaN(phoneSegments[0]));
        truePhone2 = (phoneSegments[1].length === 3 && !isNaN(phoneSegments[1]));
        truePhone3 = (phoneSegments[2].length === 4 && !isNaN(phoneSegments[2]));
    }
    if ((!truePhone1 || !truePhone2 || !truePhone3) || (phoneSegments.length != 3))
    {
        let errPhone = document.getElementById("err-phone");
        errPhone.style.display = "inline";
        isValid = false;
    }

    //City
    let city = document.getElementById("inputCity").value;
    if (city == "")
    {
        let errCity = document.getElementById("err-city");
        errCity.style.display = "inline";
        isValid = false;
    }

    //check state
    let state = document.getElementById("inputState").value;
    if (state == "")
    {
        let errState = document.getElementById("err-state");
        errState.style.display = "inline";
        isValid = false;
    }

    //Country
    let country = document.getElementById("inputCountry").value;
    if (country == "")
    {
        let errCountry = document.getElementById("err-country");
        errCountry.style.display = "inline";
        isValid = false;
    }

    //Area Served
    let served = document.getElementById("areaServed").value;
    if (served == "None")
    {
        let errServed = document.getElementById("err-serve");
        errServed.style.display = "inline";
        isValid = false;
    }

    return isValid;
}