<?php
session_start();
?>


<!DOCTYPE html>
<html>
<title>RonShabso - MakeItSnappy</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="indexss.php" class="w3-bar-item w3-button"><b>RonShabso</b> Make It Snappy</a>
            <span class="w3-bar-item w3">|  Welcome <?php echo $_SESSION['username']; ?> ! </span>
            <div class="w3-right w3-hide-small">
                <a href="shop.php" class="w3-bar-item w3-button">Shop Here</a>
                <a href="tables.php" class="w3-bar-item w3-button">All Tables</a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img class="w3-image" src="assets/img/IMG_1847.jpg" alt="Architecture" width="1500" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white">
                <span class="w3-padding w3-black w3-opacity-min"><b>RonShabso</b></span>
                <span class="w3-hide-small w3-text-light-grey">See Through My Lens</span>
                <br><span class="w3-hide-small w3-text-light-grey">“Taking an image, freezing a moment, reveals how rich reality truly is.”</span>
            </h1>
        </div>
    </header>

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">

        <!-- Project Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">My Shots</h3>
        </div>

        <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Moody Ridin'</div>
                    <img src="assets/img/IMG_1050.jpg" alt="Ronshabso" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Moody Ridin'</div>
                    <img src="assets/img/IMG_0866.jpg" alt="Ronshabso" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Hula Valley</div>
                    <img src="assets/img/IMG_1861.jpg" alt="Ronshabso" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Little Jimny</div>
                    <img src="assets/img/IMG_1835.jpg" alt="Ronshabso" style="width:100%">
                </div>
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Wheat Fields</div>
                    <img src="assets/img/IMG_1361.jpg" alt="Ronshabso" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Old Building</div>
                    <img src="assets/img/IMG_2854.jpg" alt="Ronshabso" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Tel Aviv Neons</div>
                    <img src="assets/img/IMG_2775.jpg" alt="Ronshabso" style="width:99% ">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom ">
                <div class="w3-display-container ">
                    <div class="w3-display-topleft w3-black w3-padding ">Tel Aviv Neons</div>
                    <img src="assets/img/IMG_2783.jpg " alt="Ronshabso " style="width:99% ">
                </div>
            </div>
        </div>
        <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">PC Components</div>
                    <img src="assets/img/IMG_2182.jpg" alt="Ronshabso" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Rihaniya & Mount Hermon</div>
                    <img src="assets/img/IMG_2803.jpg" alt="Ronshabso" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Tel Aviv - NightLife</div>
                    <img src="assets/img/IMG_2798.jpg" alt="Ronshabso" style="width:99% ">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom ">
                <div class="w3-display-container ">
                    <div class="w3-display-topleft w3-black w3-padding ">Hula Valley - Water Sprayers</div>
                    <img src="assets/img/IMG_1856.jpg " alt="Ronshabso " style="width:99% ">
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="w3-container w3-padding-32 " id="about ">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 ">About Me.</h3>
            <p>“Photography is the story I fail to put into words.” My name in Ron Shabso, i live in Rihaniya located in the Noethen District in Israel. I Consider myself as an
                amature photographer & im still learning and experiancing with my shooting gear. <br>
                so far, its been an awesome ride ! i get to interact with people and take memories and store it in my PC.
            </p>
        </div>

        <!-- Contact Section -->
        <div class="w3-container w3-padding-32 " id="contact ">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 ">Contact me</h3>
            <p>Lets get in touch and talk !</p>
            <form action="connect.php" method="POST">
                <input class="w3-input w3-border " type="text " placeholder="First Name " name="FirstName" required name="Name ">
                <input class="w3-input w3-section w3-border " type="text " placeholder="Last name" name="LastName" required name="Last Name ">
                <input class="w3-input w3-section w3-border " type="text " placeholder="Phone Number " name="PhoneNumber" required name="Phone Number  ">
                <input class="w3-input w3-section w3-border " type="text " name="Address" placeholder="Address ( Optional )">
                <input class="w3-input w3-section w3-border " type="text " placeholder="Email Address " name="Email" required name="Email ">
                <input class="w3-input w3-section w3-border " type="text " placeholder="What Is In Your Mind? " name="Letter" required name="Letter ">
                <button class="w3-button w3-black w3-section " type="submit " name="submit">SEND MESSAGE</button>
            </form>
        </div>

        <div class="w3-container w3-padding-32 " id="contact ">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 ">Send Me Your Camera Specs</h3>
            <p>Mmmm, Let Me See What Kind Of Gear you Are Rocking </p>
            <form action="connect.php" method="POST">
                <input class="w3-input w3-border " type="text " placeholder="Full Name " name="fullname" required name="Full Name ">
                <input class="w3-input w3-section w3-border" type="text " placeholder="My Camera Is..." name="camera" required name="Camera ">
                <button class="w3-button w3-black w3-section " type="submit " name="send">Send</button>
            </form>
        </div>
        <!-- Image of location/map -->

        <div class="w3-container ">
            <center>
                <img src="assets/img/Screenshot 2021-05-02 223724.png" class="w3-image " style="width:50% ">
            </center>
        </div>
    </div>


    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16 ">
        <p>&#174; RonShabso - Make It Snappy </p>
    </footer>

</body>

</html>