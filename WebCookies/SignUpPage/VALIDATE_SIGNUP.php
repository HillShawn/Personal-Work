<?php
echo "<link rel='icon' href='Images/favicon.ico'>";
date_default_timezone_set('Pacific/Honolulu');
$cookie_name = "username";
$cookie_value = $_GET["uname"];
$expires_on = strtotime("+24 hours");
$path = "/";
setcookie($cookie_name, $cookie_value, $expires_on , $path);

if(sizeof($_GET) > 0){
    echo "Thanks for signing up.";    
}
else{
    echo "Sorry get lost";
    echo "<br>";
    echo "<a href='./index.html'>Click here to sign up</a>";
}

if(isset($_COOKIE["username"])){
    echo " You are now able to access this site";
}
else{
    echo "Sorry get lost";
    echo "<br>";
    echo "<a href='./index.html'>Click here to sign up</a>";
}

?>