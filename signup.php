<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $gender = $_POST['gender'];
        $num = $_POST['number'];
        $address = $_POST['add'];
        $email = $_POST['mail'];
        $password = $_POST['pass'];
    }

    if(!empty($email) && !empty($password) && !is_numeric($email)){

        $query = "insert into form (fname, lname, gender, cnum, address, email, pass) values ('$firstname', '$lastname', '$gender', '$num', '$address', '$email', '$password')";
        mysqli_query($con, $query);
        echo "<script type='text/javascript'> alert('Succesfully Registered') </script>";
    }

    else{
        echo "<script type='text/javascript'> alert('Please eneter valid information') </script>";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1">
    <title>Form login and Register</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="signup">

        <h1>Sign up</h1>

        <form method="POST">
            <label>First name</label>
            <input type="text" name="fname" required>

            <label>Last name</label>
            <input type="text" name="lname" required>

            <label>Gender</label>
            <input type="text" name="gender" required>

            <label>Contact Address</label>
            <input type="tel" name="number" required>

            <label>Address</label>
            <input type="text" name="add" required>

            <label>Email</label>
            <input type="email" name="mail" required>

            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>By clicking the Sign up button, you agree to our<br>
        <a href="">Terms and Conditions</a> and <a href="#">Policy Privacy</a>
        </p>
        <p>Already have an account? <a href='login.php'>Login Here</a></p>
    </div>
</body>