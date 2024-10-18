<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>PC Gaming Store</title>
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
        <div id="bannerImage">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1>PC Gaming Terbaikmu</h1>
                        <p>Diskon 40% untuk semua merek premium.</p>
                        <a href="products.php" class="btn btn-danger">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/CPU1.jpg" alt="CPU1">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Mini MegxSnow 3.0
                                </p>
                                <p>RTX 4060/4060 Ti x Intel & AMD PC (FREE COOLER UPGRADE)</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/MONITOR1.jpg" alt="MONITOR">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Acer Predator XB323U
                                </p>
                                <p> 170Hz Gaming Monitor Compatible with NVIDIA G-SYNC | Gadgetsin</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/KEYBOARD.jpg" alt="KEYBOARD">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Mechanical & Mouse
                                </p>
                                <p>Mechanical gaming keyboard with quick responding switches,</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br> <br><br><br><br>
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