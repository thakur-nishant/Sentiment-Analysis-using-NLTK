<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <?php
    session_start();
    ?>

    <head>
        <title>Sentiminion</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!--[if IE 6]>
                <link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
        <![endif]-->
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-func.js"></script>

    </head>
    <body>
        <!-- Shell -->
        <div id="shell">
            <!-- Header -->

            <div id="header"> <!-- Navigation -->
                <div id="navigation">
                    <ul>
                        <h3>Sentiminion &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h3>
                        <li><a class="active" href="index.php">HOME</a></li>
                        <li></li>
                        <li><a href="login_page.html">LOGIN</a></li>
                        <li><a href="#">COMING SOON</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li style="margin-left: 160px;">
                            <?php
                            if (isset($_SESSION['username'])) {

                                echo "<a>Hi, " . $_SESSION['username'] . "</a>";
                            } else {

                                echo '<a id="modal_trigger" href="login_page.html">Login | Register</a>';
                            }
                            ?>                        

                        </li>
                        <?php
                        if (isset($_SESSION['username'])) {
                            ?>
                            <li>
                                <a href="logout.php" >| Logout</a>
                            </li>     
                        <?php }
                        ?>
                    </ul>
                </div>
                <!-- end Navigation -->

                <!-- Sub-menu -->


                <div id="sub-navigation" style="text-align:center">


                </div>
                <!-- end Sub-Menu -->

            </div>
            <!-- end Header -->

            <!-- Main -->

            <div id="main">
                <!-- Content -->
                <div id="content">

                    <!-- Box -->
                    <div class="box">
                        <div class="head">
                            <h2>Movies</h2>
                            <p class="text-right">&nbsp;</p>
                        </div>

                        <!-- Movie -->
                        <div class="movie">

                            <div class="movie-image">

                                <a href="movie1.php"><span class="play"><span class="name">X-MAN</span></span><img src="css/images/movie1.jpg" alt="movie" /></a><span class="name">X-MAN</span>
                            </div>

                            <div class="rating">
                                <p>RATING</p>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="movie2.php"><span class="play"><span class="name">Kung FU Panda</span></span><img src="css/images/movie9.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="movie3.php"><span class="play"><span class="name">SPIDER MAN 3</span></span><img src="css/images/movie3.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="movie4.php"><span class="play"><span class="name">The Prestige</span></span><img src="css/images/movie18.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="movie5.php"><span class="play"><span class="name">GLADIATOR</span></span><img src="css/images/movie5.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie last">
                            <div class="movie-image">
                                <a href="movie6.php"><span class="play"><span class="name">ICE AGE</span></span><img src="css/images/movie6.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->
                        <div class="cl">&nbsp;</div>
                    </div>
                    <br />



                    <!-- end Content -->


                </div>
                <!-- end Main --><br/><br/>

                <!-- Footer -->	
                <footer> 
                    <!-- This is the footer with default 3 divs -->
                    <div>
                        <p>In order for the consumers to make a better choice, they ought to have access to reviews &amp; experiences from other consumers who have made similar choices. </p>
                        <p>This will help them not only to avoid mistakes that other consumers made but also help clear confusion, if any, about the product or service. </p>
                    </div>



                </footer>
                <!-- end Footer -->
            </div>
            <!-- end Shell -->
    </body>
</html>
