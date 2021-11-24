<?php

$con = mysqli_connect("localhost", "root", "", "mis_contact");

if (isset($_POST['submit'])) {
    if (!empty($_POST['FirstName']) && !empty($_POST['LastName']) && !empty($_POST['Email']) && !empty($_POST['Letter'])) {
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Address = $_POST['Address'];
        $Email = $_POST['Email'];
        $Letter = $_POST['Letter'];

        $query = "insert into co_information(FirstName, LastName, PhoneNumber, Address, Email, Letter) values('$FirstName', '$LastName', '$PhoneNumber', '$Address','$Email', '$Letter')";

        $run = mysqli_query($con, $query);

        if ($run) {
            $message = "Sent Successfuly!";
            header("Location: indexss.php?sent=success");
        } else
            echo "Error, Somthing Went Wrong ...";
    }
}

if (isset($_POST['send'])) {
    if (!empty($_POST['fullname']) && !empty($_POST['camera'])) {
        $fullname = $_POST['fullname'];
        $camera = $_POST['camera'];

        $query = "insert into co_cameras(fullname, camera) values('$fullname', '$camera')";

        $run = mysqli_query($con, $query);

        if ($run) {
            $message = "Sent Successfuly!";
            header("Location: indexss.php?sent=success");
        } else
            echo "Error, Something Went Wrong ...";
    }
}
