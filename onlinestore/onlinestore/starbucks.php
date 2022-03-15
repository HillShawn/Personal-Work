<?php

/*TO DO:
 * 1) Validate user. Check if user sends an
 * HTTP GET Request named ["location"], before displaying
 * any content. Otherwise, send user back to main page anyway you want
 * 
 * 2) Use JavaScript to output the array of items into an HTML Form just 
 * like it is displayed in <div id="HTMLcontent"> element container. Be 
 * the code you output functions the same. Once you get it working, remove the
 * <div id="HTMLcontent"> element container. 
 */


?>


<div id="topnavigation">
    <a href="./index.php" title="Go to homepage">Home</a>
</div>

<?php
if(isset($_GET["location"]))
{
    $location = $_GET["location"]; //Create a variable to store information

    //Display content back to the user in PHP
    echo "<h1> Starbucks in " . $location . "</h1>";

    echo "<h3>Available Items:</h3>";

    echo "<div>";
        echo "<form action='order_summary.php' method='get'>";
            echo "<table border='1' id='JScontent'></table>";
            echo "<input type='submit' value='Continue to Payment'/>";
        echo "</form>";
    echo "</div>";
}
else 
{
    //Display content back to the user
    echo "You don't belong here yet! Go back and try again!";
}
?>

<script>

    //Array containing an array of items
    var json_array_of_array_items = [
        ["Caffe Latte", "Tall", "$2.95"],
        ["Caffe Latte", "Grande", "$3.65"],
        ["Caffe Latte", "Venti", "$4.15"],
        ["White Chocolate Mocha", "Tall", "$3.75"],
        ["White Chocolate Mocha", "Grande", "$4.45"],
        ["White Chocolate Mocha", "Venti", "$4.75"],
        ["Pumpkin Spice Latte (Limited Time)", "Tall", "$4.25"],
        ["Pumpkin Spice Latte (Limited Time)", "Grande", "$4.95"],
        ["Pumpkin Spice Latte (Limited Time)", "Venti", "$5.25"],
        ["Caramel Frappuccino", "Tall", "$3.75"],
        ["Caramel Frappuccino", "Grande", "$4.45"],
        ["Caramel Frappuccino", "Venti", "$4.95"],
        ["Chocolate Chip Cookie", "", "$1.95"],
        ["Pumpkin Cream Cheese Muffin (Limited Time)", "", "$2.45"],
        ["Blueberry Scone", "", "$2.45"]
    ];
    
    /*
     * GOAL:
     * Loop through the array using JavaScript's ForEach function
     * so we can get rid of <div id="HTMLcontent"> element
     * 
     */
    json_array_of_array_items.forEach(function myFunction(item, index, array){
        //Uncomment line below to find out what happens
        document.getElementById("JScontent").innerHTML += "<tr><td>" + item[0] + "</td>" + "<td>" + item[1] + "</td>" + "<td>" + item[2] + "</td><td><input type='checkbox' id='check' name='cart[]'></td></tr>";
        var check = document.getElementById("check");
        for(i = 0; i < json_array_of_array_items.length; i++)
        {
            check.setAttribute("value", array[i]);
        }
    });

</script>
