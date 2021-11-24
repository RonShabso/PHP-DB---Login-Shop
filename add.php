<?php
$con = mysqli_connect("localhost", "root", "", "mis_contact");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

mysqli_query($conn, "insert into `user` (firstname,lastname) values ('$firstname','$lastname')");
header('location:index.php');
