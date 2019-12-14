<!DOCTYPE html>
<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
 header('location: index.php');
}
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LifeStyle Store-Settings</title>
        <link href="index.css" rel="stylesheet" type="text/css"/> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php        include 'includes/header.php';
        ?>
        <div class="container" style="padding-top: 90px">
            <div class="col-xs-4 col-xs-offset-4"><h3><B>Change Password</B></h3></div>
            <form action="setting_script.php" method="POST">
                <div class="col-xs-4  col-xs-offset-4 form-group">
                    <input class="form-control" type="password" name="oldpassword" placeholder="Old Password">
                </div>
                <div class="form-group col-xs-4  col-xs-offset-4">
                    <input class="form-control" type="password" name="password" placeholder="New Password">
                </div>
                <div class="form-group col-xs-4  col-xs-offset-4">
                    <input class="form-control" type="password" name="cnfpassword" placeholder="Re-type New Password">
                </div>
                <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>

                <div class="form-group col-xs-4  col-xs-offset-4">
                    <input type="submit" class="btn btn-primary" value="Change">
                </div>
            </form>
        </div>
         <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
