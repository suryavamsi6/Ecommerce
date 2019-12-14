<?php
require 'includes/common.php';
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <title>LifeStyle Store-Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php        
            include 'includes/header.php';
            include 'includes/check-if-added.php'
        ?>
        <div class="container" style="padding-top:70px">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="5.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>Canon EOS</h2>
                                    <p>Price:Rs.36000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                   
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(1)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                  
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="2.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>Sony DSLR</h2>
                                    <p>Price Rs.40000.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                    
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(2)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                   
                                </center>
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="3.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>Sony DSLR</h2>
                                    <p>Price Rs.50000.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                    
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="4.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>Olympus DSLR</h2>
                                    <p>Price Rs.80000.000</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                    
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>    
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="9.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>Titan Model #301</h2>
                                    <p>Price:Rs.13000.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                    
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(5)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="10.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>Titan Model #201</h2>
                                    <p>Price Rs.3000.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                    
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(6)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="11.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>HMT Milan</h2>
                                    <p>Price Rs.8000.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                    
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(7)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="12.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>Faber Luba #111</h2>
                                    <p>Price Rs.18000.000</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                   
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(8)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>    
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="22.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>H&W</h2>
                                    <p>Price:Rs.800.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                   
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(9)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="6.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>Luis Phil</h2>
                                    <p>Price Rs.1000.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                    
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(10)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="13.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>John Zok</h2>
                                    <p>Price Rs.1500.00</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                    
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(11)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="14.jpg" class="img-responsive">
                            <div class="caption">
                                <center>
                                    <h2>Jhalsani</h2>
                                    <p>Price Rs.1300.000</p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php 
                                    } else {
                                            if (check_if_added_to_cart(12)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                             }   else {
                                ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                             }
                                     }
                                ?>
                                </center>    
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
