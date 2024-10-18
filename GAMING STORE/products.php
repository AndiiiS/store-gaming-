<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Lifestyle Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Gaming Store!</h1>
                <p>Temukan berbagai pilihan game terbaru dan klasik untuk semua platform, mulai dari konsol hingga PC. Dapatkan pengalaman gaming terbaik hanya di sini!</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Koorui-24E4-24Inch.jpg" alt="monitor">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Koorui-24E4-24Inch</h3>
                                <p>Price: Rs. 36000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(1)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Lenovo-Monitor-L24i-4A.jpg" alt="monitor">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Lenovo-Monitor-L24i</h3>
                                <p>Price: Rs. 40000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(2)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Monitor-Asus-Tuf-VG249QM1A.jpg" alt="Sony DSLR">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Tuf-VG249QM1A</h3>
                                <p>Price: Rs. 50000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(3)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Monitor-Led-Aoc-Agon-AG275QXL.jpg" alt="Olympus">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Agon-AG275QXL</h3>
                                <p>Price: Rs. 80000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(4)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Cpu-AMD Ryzen 5 7600X.jpg" alt="Titan 301">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Ryzen 5 7600X</h3>
                                <p>Price: Rs. 13000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(5)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Cpu-AMD Ryzen 9 7950X.jpg" alt="Titan 201">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Titan Model #201</h3>
                                <p>Price: Rs. 3000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Cpu-Intel Core i9-13900K.JPG" alt="htm milan">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Core i9-13900K</h3>
                                <p>Price: Rs. 8000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(7)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Cpu-Intel i9 10900.jpg" alt="Favre Leuba">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Cpu-Intel i9 10900</h3>
                                <p>Price: Rs. 18000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(8)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Keyboard LED Leopard G700 Gaming.jpg" alt="Raymond shirt">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Leopard G700</h3>
                                <p>Price: Rs. 1500.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(9)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/Keyboard Mechanical_VortexSeries VX5 Pro.jpg" alt="Charles shirt">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>VortexSeries VX5 Pro</h3>
                                <p>Price: Rs. 1000.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(10)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/hyperx_alloy_core_rgb_Keyboard.jpg" alt="HXR">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>hyperx_alloy_core</h3>
                                <p>Price: Rs. 900.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(11)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/KEYBOARD GAMING RAZER HUNTSMAN V2 ANALOG.jpg" alt="PINK">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Huntsman V2 Analog</h3>
                                <p>Price: Rs. 1200.00</p>
                                <?php if (!isset($_SESSION['email'])) {  ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(12)) {
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    } else {
                                    ?>
                                        <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <footer class="footer">
            <div class="container">
                <center>
                    <p>Copyright &copy PC GAMING Store. All Rights Reserved. | Contact Us: 0831-6125-9104</p>
                    <p>This website is developed by MiniBootcamp Kel.7</p>
                </center>
            </div>
        </footer>
    </div>
</body>

</html>