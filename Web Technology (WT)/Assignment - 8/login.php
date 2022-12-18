<?php
//  $aadhar = $name = $email = $mobile = $password = $gender "";

$connection = mysqli_connect("localhost","root","Iamsammed@12");
$db = mysqli_select_db($connection,"student_registration");

$username = $_POST['username'];  
$password = $_POST['password'];  
$query = "select * from student where student_email = '$username' and student_password = '$password'";
$query_run = mysqli_query($connection,$query);
$row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);  
$count = mysqli_num_rows($query_run);

if($count == 1){  
    if(isset($row['student_name'])){
        session_start();
        $_SESSION['name']=$row['student_name'];
        //Storing the name of user in SESSION variable.
        // header("location: dashboard.php");
}
    echo "<script>alert('Login Sucessful')</script>";  
    echo '<script>	window.location.href = "dashboard.php";</script>';
}  
else{  
    echo "<script>alert('email or password is wrong')</script>";  
    echo '<script>	window.location.href = "login.html";</script>';
}
