<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1 id="registration">Student Registraion</h1>
    <div class="container">
        <form action="register.php" method="post">
        <div class="form">
            <label for="aadhar">Aadhar Number:</label>
            <input type="text" id="form1" pattern="[0-9]*" size="16" name="aadhar" placeholder="Enter Your Aadhar Number" required oninvalid="this.setCustomValidity('Only numbers are allowed')" oninput="setCustomValidity('')">
        </div>

        <div class="form">
            <label for="name">Name:</label>
            <input type="text" id="form1" name="name" pattern="[a-z A-Z]*" placeholder="Enter Your Name" required  oninvalid="this.setCustomValidity('Only Characters are allowed')" oninput="setCustomValidity('')">
        </div>

        <div class="form">
            <label for="email">Email Id:</label>
            <input type="email" id="form1" name="email" placeholder="Enter Your Email" required>
        </div>


        <div class="form">
            <label for="mobile">Mobile Numeber:</label>
            <input type="text" pattern="[0-9]*" size="10" id="form1" name="mobile" placeholder="Enter Your Mobile number" required required oninvalid="this.setCustomValidity('Only numbers are allowed')" oninput="setCustomValidity('')">
        </div>

        <div class="form">
            <label for="password">Password:</label>
            <input type="text" id="form1" name="password" placeholder="Enter Your password" required>
        </div>

        <div class="form">
            <label for="gender">Gender:</label>
            <input type="radio" Name="gender" id="gender" value="Male" checked style="margin-left: 4.5vh; margin-top:4vh; color:black;"><Strong style="font-size:2.5vh;">  Male</Strong>
            <input type="radio" Name="gender" id="gender" value="Female" style="margin-left:4vh; margin-top:4vh; color:black;"><Strong style="font-size:2.5vh;">  Female</Strong>
        </div>

        <button type="submit" id="form_button">Submit</button>
    </form>
        
    </div>
</body>
</html>