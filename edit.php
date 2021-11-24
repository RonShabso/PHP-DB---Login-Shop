<?php
$con = mysqli_connect("localhost", "root", "", "mis_contact");

$id = $_GET['PhoneNumber'];
$query = mysqli_query($con, "SELECT * FROM co_information where PhoneNumber='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Basic MySQLi Commands</title>
    <link rel="stylesheet" type="text/css" href="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="indexss.php" class="w3-bar-item w3-button"><b>RonShabso</b> Make It Snappy</a>
        <div class="w3-right w3-hide-small">
            <a href="shop.php" class="w3-bar-item w3-button">Shop Here</a>
            <a href="tables.php" class="w3-bar-item w3-button">All Tables</a>
        </div>
    </div>
</div>

<br><br><br><br>

    <h2 class="text-center">Edit</h2>
    <form class="text-center" method="POST" action="update.php?PhoneNumber=<?php echo $id; ?>">
        <label style="font-size: 30px;">First Name:</label><input class="form-control form-control-lg text-center" type="text" value="<?php echo $row['FirstName']; ?>" name="FirstName">
        <label style="font-size: 30px;">Last name:</label><input class="form-control form-control-lg text-center" type="text" value="<?php echo $row['LastName']; ?>" name="LastName">
        <label style="font-size: 30px;">Address:</label><input class="form-control form-control-lg text-center" type="text" value="<?php echo $row['Address']; ?>" name="Address">
        <label style="font-size: 30px;">Email:</label><input class="form-control form-control-lg text-center" type="text" value="<?php echo $row['Email']; ?>" name="Email">
        <label style="font-size: 30px;">Phone Number:</label><input class="form-control form-control-lg text-center" type="text" value="<?php echo $row['PhoneNumber']; ?>" name="Phone Number">
        <BR><button type="submit" name="submit" class="btn btn-primary btn-block">Update Information</button><BR> 
        <a href="tables.php"><button class="btn btn-primary btn-block">Back</button></a>
    </form>
</body>

</html>