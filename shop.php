<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "shop");

if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['cart'])) {

        $session_arr_id = array_column($_SESSION['cart'], "id");

        if (!in_array($_GET['id'], $session_arr_id)) {
            $session_arr = array(
                'id' => $_GET['id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
            );

            $_SESSION['cart'][] = $session_arr;
        }
    } else {
        $session_arr = array(
            'id' => $_GET['id'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity'],
        );

        $_SESSION['cart'][] = $session_arr;
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>MIS RonShabso - Shop Now !</title>
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

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Shopping Cart</h2>
                    <div class="col-md-12">
                        <div class="row">

                            <?php

                            $query = "SELECT * FROM tbl_product";
                            $result = mysqli_query($connect, $query);

                            while ($row = mysqli_fetch_array($result)) { ?>
                                <div class="col-md-4">

                                    <form method="post" action="shop.php?id=<?= $row['id'] ?>">

                                        <style>
                                            .shop_image {
                                                height: 150px;
                                            }
                                        </style>

                                        <img class="shop_image" src="assets/img/<?= $row['image'] ?>">
                                        <h5 class="text-center"><?= $row['name']; ?></h5>
                                        <h5 class="text-center"><?= number_format($row['price'], 2) ?> $</h5>
                                        <input type="hidden" name="name" value="<?= $row['name']; ?>">
                                        <input type="hidden" name="price" value="<?= $row['price']; ?>">
                                        <input type="number" name="quantity" value="1" class="form-control">
                                        <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="Add To Cart">
                                        <br>
                                    </form>
                                </div>

                            <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2 class="text-center">Items Selected</h2>

                    <?php

                    $result = "";

                    $result .= "
                                <table class='table table-bordered table-striped'>
                                    <tr>
                                        <th>ID</td>
                                        <th>Item</td>
                                        <th>Price</td>
                                        <th>Quantity</td>
                                        <th>Total Price</td>
                                        <th>Action</td>
                                    </tr>

                    ";

                    if (!empty($_SESSION['cart'])) {

                        $allPrices = "0"; // For Now, We will use it later in the for each loop

                        foreach ($_SESSION['cart'] as $key => $value) {
                            $result .= "
                                <tr>
                                    <td>" . $value['id'] . "</td>
                                    <td>" . $value['name'] . "</td>
                                    <td>$" . $value['price'] . "</td>
                                    <td>" . $value['quantity'] . "</td>
                                    <td>$" . number_format($value['price'] * $value['quantity']) . "</td>
                                    <td>
                                        <a href='shop.php?action=remove&id=" . $value['id'] . "'>
                                            <button type='submit' class='btn btn-danger btn-block'>Remove</button>
                                        </a>
                                    </td>
                                </tr>
                            ";

                            $allPrices += $value['quantity'] * $value['price'];
                        }

                        $result .= "
                            <tr>
                                <td colspan='3'></td>
                                <td><b>Total Price</b></td>
                                <td>$" . number_format($allPrices, 2) . "</td>
                                <td>
                                    <a href='shop.php?action=clearall'>
                                        <button class='btn btn-warning btn-block'>Clear All</button>
                                    </a>
                                </td>
                            </tr>
                        ";
                    }

                    echo $result;

                    ?>
                </div>
            </div>
        </div>
    </div>


    <?php

    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'clearall') {
            session_destroy();
        }

        if ($_GET['action'] == 'remove') {
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['id'] == $_GET['id']) {
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
    }



    ?>

</body>

</html>