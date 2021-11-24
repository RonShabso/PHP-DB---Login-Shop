<?php

$con = mysqli_connect("localhost", "root", "", "mis_contact");

session_start();
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>


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

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="assets/img/IMG_2803.jpg" alt="Architecture" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>RonShabso</b></span>
            <span class="w3-hide-small w3-text-light-grey">Here Are All The Database</span>
        </h1>
    </div>
</header>

<br><br><br><br>

<?php
if ($_SESSION['username'] == "admin") { ?>
    <div class="container-fluid">
        <table class='table table-bordered table-striped'>
            <thead>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Address</th>
                <th class="text-center">Email</th>
                <th class="text-center" width="50%">Messege</th>
                <th width="10%"></th>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM co_information");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $row['FirstName']; ?></td>
                        <td><?php echo $row['LastName']; ?></td>
                        <td><?php echo $row['PhoneNumber']; ?></td>
                        <td><?php echo $row['Address']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Letter']; ?></td>
                        <td>
                            <a href="edit.php?PhoneNumber=<?php echo $row['PhoneNumber']; ?>">
                                <button class="btn btn-warning btn-block">Edit</button><br>
                            </a>
                            <a href="delete.php?PhoneNumber=<?php echo $row['PhoneNumber']; ?>">
                                <button class="btn btn-danger btn-block">Remove</button>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<?php } else { ?>
    <div class="container-fluid">
        <table class='table table-bordered table-striped'>
            <thead>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center" width="60   %">Messege</th>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM co_information");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $row['FirstName']; ?></td>
                        <td><?php echo $row['LastName']; ?></td>
                        <td><?php echo $row['Letter']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<?php }
?>