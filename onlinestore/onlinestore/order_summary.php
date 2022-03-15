<div id="topnavigation">
    <a href="./index.php" title="Go to homepage">Home</a>
</div>

<?php

/* Validates user:
 * If user navigates to this page and sends an
 * HTTP GET Request named ["cart"], then it's OK 
 * to display something. Otherwise, tell them to knock it off.
 */
if (isset($_GET["cart"])) //ISSET function checks if VARIABLE is setup and ready to use
{
    $customer_cart = $_GET["cart"]; //Create a variable to store information
    
    //Display content back to the user
    echo "<h1>" . "Order Summary" . "</h1>";
    
    //Instead of using PHP print_r function, loop through the array and output results nicely
    foreach($_GET["cart"] as $value){
        echo "$value<br>";
    }
} else 
{
    //Display content back to the user
    echo "You don't belong here yet! Go back and try again!";
}
?>