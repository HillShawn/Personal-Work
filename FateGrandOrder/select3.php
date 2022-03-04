<?php

$servername = "localhost";
$username = "csci3632_Admin";
$password = "Usagih99";
$databasename = "csci3632";  
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$databasename; charset=utf8", $username, $password);
    // set the PDO error mode to exception  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM `FGO`");
    $stmt->execute();

    // set the resulting array to associative  
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json'); //display the content of this page in JSON
    
    //output json data in with basic format
    echo json_encode($result);
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>