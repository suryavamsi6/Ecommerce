<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require 'includes/common.php';

?>
<html>
    <head><title>Lifestyle Store-Login</title>
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
        <?php include 'includes/header.php';
        ?>
        <div class="container" style="padding-top:90px">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Log in</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                        <form method="POST" action="login_submit.php">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="form-control" type="text" name="email" id="email"></div>
                            <div class="form-group">
                                <label for="password" style="text-align: right">Password:</label>
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer"><a href="signup.php">Don't have an account? Register</a></div>
                </div>
            </div>
        </div>
        <?php        
        include 'includes/footer.php';
        ?>
    </body>
</html>
