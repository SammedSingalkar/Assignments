<?php
session_start();
        if(!isset($_SESSION['name']))
        {
                header("location: login.html");
        }
        $name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Dasboard</title>
</head>
<body>
<h1>Hello <?php echo $name; ?> <h1></body>
</html>