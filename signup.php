<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require 'includes/common.php';
 if(isset($_SESSION['email']))
 {
     header('location: products.php');
 }
?>
<html>
    <head>
        <title>Lifestyle Store-SignUp</title>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
        include 'includes/header.php';
        ?>
        <div class="container" style="padding-top: 90px">
            <div class="col-xs-4 col-xs-offset-4"><h1><B>SIGN UP</B></h1></div>
            <form method="POST" action="signup_script.php">
                <div class="col-xs-4  col-xs-offset-4 form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name" required="true" pattern="[a-zA-Z]+"> 
                </div>
                <div class="form-group col-xs-4  col-xs-offset-4">
                    <input class="form-control" type="text" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </div>
                <div class="form-group col-xs-4  col-xs-offset-4">
                    <input class="form-control" type="password" name="password" placeholder="Password" required="true" pattern=".{6,}">
                </div>
                <div class="form-group col-xs-4  col-xs-offset-4">
                    <input class="form-control" type="text" name="contact" placeholder="Contact" required="true" pattern="\d{10}">
                </div>
                <div class="form-group col-xs-4  col-xs-offset-4">
                    <input class="form-control" type="text" name="city" placeholder="City" required="true" pattern="[a-zA-Z]+">
                </div>
                <div class="form-group col-xs-4  col-xs-offset-4">
                    <input class="form-control" type="text" name="address" placeholder="Address" required="true">
                </div>
                <div class="form-group col-xs-4  col-xs-offset-4">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
        <?php 
        include 'includes/footer.php';
        ?>
    </body>
</html>
