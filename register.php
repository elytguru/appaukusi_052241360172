<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$birthdate =$_POST['birthDate'];
$phoneNum = $_POST['phoneNum'];
$email = $_POST['email'];
$profilepicture = $_POST['profile-picture'];
$stuNum = $_POST['stuNum'];

// create connection
$con = mysqli_connect("localhost", "", "registrationForm");
?>