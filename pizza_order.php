<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Here is your coupon</title>
		<meta name="author" content="Sérgio Cutrim Gouveia">
		<meta name="description" content="Assignment 1, website to order pizza">
		<meta name="viewport" content="width=device-width">
		<link href="styles/styles.css" rel="stylesheet" type="text/css"> 
	</head>
	<body>
		<header>
			<h1>Thank you for your order</h1>
		</header>
	    <main>
		    <section>
            <?php
                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    echo "<h2>This are your selections:</h2>";
                    }

                    // Quantity of Pizzas
                    if (!empty($_GET["quantity"])) {
                        echo "<p>Quantity of Pizzas: " . $_GET["quantity"] . "</p>";
                    }
                
                    // Pizza size
                    if (!empty($_GET["size"])) {
                        echo "<p>Pizza Size: " . $_GET["size"] . "</p>";
                    }
                
                    // Crust
                    if (!empty($_GET["crust"])) {
                        echo "<p>Crust Type: " . $_GET["crust"] . "</p>";
                    }
                
                    // Pizza Shape
                    if (!empty($_GET["shape"])) {
                        echo "<p>Pizza Shape: " . $_GET["shape"] . "</p>";
                    }
                
                    // Sauce
                        if (!empty($_GET["sauce"])) {
                        echo "<p>Pizza Sauce(s): ";
                        if (is_array($_GET["sauce"])) {
                            echo implode(", ", $_GET["sauce"]);
                        } else {
                            echo $_GET["sauce"];
                        }
                        echo "</p>";
                    }
                                    
                    // Toppings
                    if (!empty($_GET["topping"])) {
                        echo "<p>Pizza Toppings: ";
                        if (is_array($_GET["topping"])) {
                            echo implode(", ", $_GET["topping"]);
                        } else {
                             echo $_GET["topping"];
                        }
                        echo "</p>";
                    }
                    // Customer Info
                    if (!empty($_GET["firstname"]) && !empty($_GET["lastname"]) && !empty($_GET["email"]) && !empty($_GET["delivery"])) {
                        echo "<h2>Customer Information:</h2>";
                        echo "<p>First Name: " . $_GET["firstname"] . "</p>";
                        echo "<p>Last Name: " . $_GET["lastname"] . "</p>";
                        echo "<p>Email: " . $_GET["email"] . "</p>";
                        echo "<p>Delivery Option: " . $_GET["delivery"] . "</p>";
                    }
                
                    // Coupon
                    if (!empty($_GET["coupon"])) {
                        echo "<p>Coupon: " . $_GET["coupon"] . "</p>";
                    }
                
                    // Additional Request
                    if (!empty($_GET["request"])) {
                        echo "<p>Additional Requests: " . $_GET["request"] . "</p>";
                    }
                
                ?>
            </main>    
           
        <footer> <p><small>© 1982-2024 All rights reserved. Pizza 'Carioca' is copyrighted to Sérgio Cutrim Gouveia and any unauthorized use will be informed to the FBI.</small></p></footer>