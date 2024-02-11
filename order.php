<!DOCTYPE html>
<html lang="en">
    <!--Head information and explanation is the same as index-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Sérgio Cutrim Gouveia">
	    <meta name="description" content="Assignment 1, website to order pizza">
        <link href="styles/styles.css" rel="stylesheet" type="text/css">
        <title>ORDER NOW</title>
    </head>
    <!--Body containing all visible content-->
    <body class="order-body">
        <!--No header in this page since I only want the form here-->
        <main>
            <!--Opened the form and put the title-->
            <form action="pizza_order.php" method="GET">
                <h3 id="title">Tell us a little bit about the pizza you want today!</h3>
                <!--Div to separate the inputs-->
                <!--Quantity of Pizza, open text, required field-->
                <div> 
                    <label>How many pizzas do you want today?</label>
                    <input type="text" nome="quantity" id="quantity" required>
                </div>
                <br>
                <!--Pizza size SelectMenu-->        
                <label for="size">Choose the size of your pizza:</label>
                <select name="size" id="size1" required>
                    <option value="">Select</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="Xlarge">X-Large</option>
                </select>
                <br>
                <br>
                <!--Fieldset used to separate and create the style-->
                <!--Piza crust using Radiobuttons-->
                <fieldset class="grupo"> 
                    <div class="campo"><legend>Choose your crust:</legend>
                        <p>
                            <input type="radio" name="crust" id="crust_1" value="Deepdish" checked/>
                            <label for="crust_1">Deep Dish</label>
                        </p>
                        <p>
                            <input type="radio" name="crust" id="crust_2" value="Thin" />
                            <label for="crust_2">Thin</label>
                        </p>
                        <p>
                            <input type="radio" name="crust" id="crust_3" value="Filled edges" />
                            <label for="crust_3">Filled Edges</label>
                        </p>
                    </div>    
                </fieldset>
                <br>
                <!--New fieldset-->
                <!--Pizza shape Radiobuttons-->
                <fieldset class="grupo"> 
                    <div class="campo"> 
                        <legend>Select the shape of your pizza:</legend>
                        <p>
                            <input type="radio" name="shape" id="shape_1" value="Square" checked/>
                            <label for="size_1">Square</label>
                        </p>
                        <p>
                            <input type="radio" name="shape" id="shape_2" value="Round" />
                            <label for="size_2">Round</label>
                        </p>
                    </div>
                </fieldset>
                <br>
                <!--New div to separate the next request for Pizza Sauce checkbox-->
                <div id="check">
                <fieldset>
                    <div class="campo">
                        <legend>Select the sauce of your pizza:</legend>
                        <p class="required">*You can select as many as you want, we will mix them according to your selection.</p>
                        <input type="checkbox" name="sauce[]" id="sauce_1" value="Alfredo" checked/>
                        <label for="sauce_1">Alfredo</label>
                        <input type="checkbox" name="sauce[]" id="sauce_2" value="Tomato" />
                        <label for="sauce_2">Tomato</label>
                        <input type="checkbox" name="sauce[]" id="sauce_3" value="Tomato and Basil" />
                        <label for="sauce_3">Tomato and Basil</label>
                    </div>
                </fieldset>
                </div>
                <br>
                <!--Pizza Toppings Checkbox inside a fieldset-->
                <fieldset class="grupo"> 
                    <div class="campo">
                        <legend>Select as many Toppings as you desire:</legend>
                        <p class="required">*We advise you to select 3 toppings for better tasting experience, but you can select as much as you want - NO EXTRA CHARGE!.</p>
                        <input type="checkbox" name="topping[]" id="topping_1" value="Green Olives" checked />
                        <label for="topping_1">Green Olives</label>              
                        <input type="checkbox" name="topping[]" id="topping_2" value="Black Olives" />
                        <label for="topping_2">Black Olives</label>               
                        <input type="checkbox" name="topping[]" id="topping_3" value="Green Pepper" />
                        <label for="topping_3">Green Pepper</label>
                        <input type="checkbox" name="topping[]" id="topping_4" value="Red Pepper" />
                        <label for="topping_4">Red Pepper</label>
                        <br>
                        <input type="checkbox" name="topping[]" id="topping_5" value="Pepperoni" />
                        <label for="topping_5">Pepperoni</label>
                        <input type="checkbox" name="topping[]" id="topping_6" value="Chicken with Catupiry" />
                        <label for="topping_6">Chicken with 'Catupiry'</label>
                        <input type="checkbox" name="topping[]" id="topping_7" value="Jerky Beef with Catupiry" />
                        <label for="topping_7">Jerky Beef with 'Catupiry'</label>
                    </div>
                    <br>
                </fieldset>
                <!--After selecting the data of the pizza I request the information of the customer-->
                <h3>Now tell us who are you and how you want to receive your pizza!</h3>
                <label for="firstname">First name*:</label>
                    <input type="text" id="firstname" name="firstname" required> 
                <br> 
                <br>
                <!--Inform the last name-->
                <label for="lastname">Last name*:</label> 
                    <input type="text" id="lastname" name="lastname" required>
                <br>    
                <br>
                <!--Customer email-->
                <div> 
                    <label>Email*:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <br>
                <!--Drop down for delivery, pick-up or eat in-->
                <div> 
                    <label for="delivery">Where are you going to enjoy your pizza*:</label>
                    <select name="delivery" id="delivery1" required>
                    <option value="">Select</option>
                    <option value="Eatin">Eat in</option>
                    <option value="homeD">Delivery</option>
                    <option value="pickup">Pick up</option>
                    </select>      
                </div>
                <br>
                <br>
                <!--Inform if you have a coupon-->
                <label for="coupon">Coupon:</label> 
                <input type="coupon" id="coupon" name="coupon">
                <br>
                <br>
                <!--Textarea for any other request-->
                <label for="request">Any requests?</label>
                <textarea id="request" name="request" rows="3" style="width:25em" cols="33">
                </textarea>   
                <br>
                <br>
                <!--Button to submit or clear the form-->
                <button type="reset">Clear All</button>
                <button type="submit">Submit Request</button>
            </form>
        </main>
    </body>
</html>