<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="img/shop.jpg" />
        <title>Online Store</title>
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
            <br>
            <div id="output-ajax">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h3>Change Password</h3>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Change">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Online Store. All Rights Reserved. | Contact Us: +91 9998877994</p>
                   <p>This website is developed by Vikas kumar</p>
               </center>
               </div>
           </footer>
        </div>
        </div>
    </body>
</html>
