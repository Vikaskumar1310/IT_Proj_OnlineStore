<?php
    

   $srch = $_POST['srch'];

    if($srch == "shirt" || $srch == "shirts" )
    {
        echo ' <div>
                    
                    <div class="container">
                        <div class="jumbotron">
                            <center>
                        <h1>Shirts Store</h1>
                        </center>
                        <p>We have the best shirts for you. No need to hunt around, we have all in one place.</p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <a href="cart.php">
                                        <img src="img/raymond.jpg" alt="Raymond shirt">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <h3>Raymond</h3>
                                            <p>Price: Rs. 1500.00</p> 
                                                        <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        </div>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <a href="cart.php">
                                        <img src="img/charles.jpg" alt="Charles shirt">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <h3>Charles</h3>
                                            <p>Price: Rs. 1000.00</p>
                                            <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

                                        </div>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <a href="cart.php">
                                        <img src="img/HXR.jpg" alt="HXR">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <h3>HXR</h3>
                                            <p>Price: Rs. 900.00</p>
                                            <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

                                        </div>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <a href="cart.php">
                                        <img src="img/pink.jpg" alt="PINK">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <h3>PINK</h3>
                                            <p>Price: Rs. 1200.00</p>
                                            <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

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
                            <p>Copyright &copy Online Store. All Rights Reserved. | Contact Us: +91 9998877994</p>
                            <p>This website is developed by Vikas kumar</p>
                       </center>
                       </div>
                   </footer>
                </div>
        ';
    }

    else if($srch == "watch" || $srch == "watches" || $srch == "watche" )
    {
        echo ' <div>
        
        <div class="container">
            <div class="jumbotron">
            <center>
            <h1>Watches Store</h1>
            </center>
            <p>We have the best watches for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/titan301.jpg" alt="Titan 301">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Titan Model #301</h3>
                                <p>Price: Rs. 13000.00</p>
                                <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/titan201.jpg" alt="Titan 201">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Titan Model #201</h3>
                                <p>Price: Rs. 3000.00</p>
                                <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/hmt.JPG" alt="htm milan">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>HMT Milan</h3>
                                <p>Price: Rs. 8000.00</p>
                                <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/favreleuba.jpg" alt="Favre Leuba">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Favre Leuba #111</h3>
                                <p>Price: Rs. 18000.00</p>
                                    <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

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
                            <p>Copyright &copy Online Store. All Rights Reserved. | Contact Us: +91 9998877994</p>
                            <p>This website is developed by Vikas kumar</p>
                       </center>
                       </div>
                   </footer>
                </div>
        ';
    }

    else if($srch == "camera" || $srch == "cameras")
    {
        echo ' <div>
        
        <div class="container">
            <div class="jumbotron">
            <center>
            <h1>Cameras Store</h1>
            </center>
            <p>We have the best cameras for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        <div class="container" id="camera_id">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/cannon_eos.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Cannon EOS</h3>
                                <p>Price: Rs. 36000.00</p>
                                <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price: Rs. 40000.00</p>

                                    <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price: Rs. 50000.00</p>
                                <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/olympus.jpg" alt="Olympus">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Olympus DSLR</h3>
                                <p>Price: Rs. 80000.00</p>
                                <a href= class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>

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
                            <p>Copyright &copy Online Store. All Rights Reserved. | Contact Us: +91 9998877994</p>
                            <p>This website is developed by Vikas kumar</p>
                       </center>
                       </div>
                   </footer>
                </div>
        ';
    }

    else
    {
        header("Location: " . "http://" . $_SERVER['localhost'] . $location);
    }

?>