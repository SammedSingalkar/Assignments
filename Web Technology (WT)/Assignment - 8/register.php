<?php
//  $aadhar = $name = $email = $mobile = $password = $gender "";

	$connection = mysqli_connect("localhost","root","Iamsammed@12");
	$db = mysqli_select_db($connection,"student_registration");
	$query = "insert into student values(null,'$_POST[aadhar]','$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[password]','$_POST[gender]')";
	$query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	alert("Registration successfully.....")
	window.location.href = "index.php";
</script>