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
			<h1>Congratulations on subscribing to The Pizza 'Carioca'</h1>
			<h2>You are now a 'Carioca'</h2>
		</header>
	    <main>
		    <section>
            <?php
                $emailAddress = htmlspecialchars($_GET['emailAddress']);
                echo 'Your email address ', $emailAddress,' has been added to our list of subscribers.';
                echo 'Your coupon is "12345"';
            ?>

            
        <footer> <p><small>© 1982-2024 All rights reserved. Pizza 'Carioca' is copyrighted to Sérgio Cutrim Gouveia and any unauthorized use will be informed to the FBI.</small></p></footer>