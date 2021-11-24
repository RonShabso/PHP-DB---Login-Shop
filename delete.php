<?php
$con = mysqli_connect("localhost", "root", "", "mis_contact");
$id = $_GET['PhoneNumber'];

mysqli_query($con, "delete from co_information where PhoneNumber='$id'");
header('location:tables.php');
