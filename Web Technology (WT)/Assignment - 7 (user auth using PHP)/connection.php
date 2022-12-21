<?php

$conn = "";
  
try {
    $servername = "localhost:3306";
    $dbname = "student_registration";
    $username = "root";
    $password = "Iamsammed@12";
  
    $conn = new PDO(
        "mysql:host=$servername:8080; dbname=student_registration",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>