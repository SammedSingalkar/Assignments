<?php
 
include_once('connection.php');
// $connection = mysqli_connect("localhost","root","Iamsammed@12");
// $db = mysqli_select_db($connection,"student_registration");
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM student");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['student_email'] == $username) &&
            ($user['student_password'] == $password)) {
                echo "<script language='javascript'>";
                echo "alert('User is authenticated')";
                echo "</script>";
                // header("location: index.html");
                ?>
                <script>
	            window.location.href = "index.html"; </script>
                <?php
                die();
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            // header("location: index.html");
            ?>
                <script>
	            window.location.href = "index.html"; </script>
                <?php
            die();
        }
    }
}
 
?>