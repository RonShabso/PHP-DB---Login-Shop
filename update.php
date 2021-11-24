<?php
$con = mysqli_connect("localhost", "root", "", "mis_contact");
$id = $_GET['PhoneNumber'];

$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$address = $_POST['Address'];
$email = $_POST['Email'];
$phone = $_POST['PhoneNumber'];

mysqli_query($con, "UPDATE co_information SET FirstName='$firstname', LastName='$lastname', Address='$address'
, Email='$email', PhoneNumber='$phone' where PhoneNumber='$id'");
header('location:tables.php');
