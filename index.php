<!DOCTYPE html> 
<html lang="en-US">
    <!--Head with the appropriate structure and Meta tag-->
    <head> 
        <!--Meta to register chars in the UTF-->
        <meta charset="utf-8">
        <!--Meta to define the author and description-->
        <meta name="author" content="Sérgio Cutrim Gouveia">
		<meta name="description" content="Assignment 1, website to order pizza">
        <!--Meta to allow page to be responsive in any kind of device-->
        <meta name="viewport" content="width=device-width">
        <!--Connecting the CSS to the index-->
        <link href="styles/styles.css" rel="stylesheet" type="text/css"> 
        <!--Main title of the page-->
        <title>The Pizza 'Carioca'</title>
    </head>
    <!--Body of the HTML with all the visible part of the webpage-->
    <body class="index-body">
        <!--Header of the page-->
        <header>
            <h1 class="header1">Welcome to The Pizza 'Carioca'</h1>
        </header>
        <!--Main is the main part of the page-->
        <main>
            <!--Inside the main defined a section to contain the image and the header together-->
            <section>
                <h2 class="header2">The authentic pizza made by 'Cariocas' - born and raised in <em>Rio de Janeiro</em></h2>
                <img src="Images/pizza.jpg" alt="Pizza Image" class="main-image">    
                <!--Image of pizza obtained at https://www.flickr.com/photos/rcheles/8381667778--> 
                <br>  
            </section>
            <!--To create the layout with 2 columns separated here with an aside-->
            <aside class="index-aside">
                <!--Form to capture user email and give a 10% discount.-->
                <form action="subscribe.php" method="GET">
                    <h3>Subscribe to earn a coupon with 10% discount</h3>
                    <label for="emailAddress">Email:</label> 
                    <input type="email" id="emailAddress" name="emailAddress" required/> <button type="submit"> Subscribe </button>
                    <p> A coupon will be sent to your register email, use the code when you finish your purchase.</p>
                    <p> *Conditions apply.</p>
                </form>
                <!--Below the form I put here a link to the order page with a button-->
                <h3 class="orderClass">Do you want to order now?</h3> 
                <a href="order.php"> <button class="buttonOrder"> Click here to ORDER </button></a>    
            </aside>   
        </main>
        <!--After the main I inserted a part to put the social media using UL,LI-->
        <h3 class="header3">Follow us on:</h3>
            <ul>
                <!--Linkedin link and image-->
                <li>
                    <a href="https://www.linkedin.com/in/sergiocutrimgouveia/" target="_blank"> 
                    <img src="Images/LI-In-Bug.png" alt="LI_logo" height="22" width="27"> 
                    </a>
                </li>
                <!--X link and image-->
                <li>
                    <a href="https://twitter.com/elonmusk" target="_blank">
                    <img src="Images/X_logo_black.png" alt="X_logo" height="22" width="27">
                    </a>
                </li>
                <!--Instagram link and image-->
                <li>
                    <a href="https://www.instagram.com/neymarjr/?hl=en" target="_blank">
                    <img src="Images/Instagram_logo.png" alt="IG_logo" height="22" width="27">
                    </a>
                </li>
            </ul>
        <br>
        <br>
        <!--Footer just for reference, there is no copyright and nobody is going to report anything to the FBI-->
        <footer font-size="1em"> © 1982-2024 All rights reserved. Pizza 'Carioca' is copyrighted to Sérgio Cutrim Gouveia and any unauthorized use will be informed to the FBI. </footer>
    </body>
</html>