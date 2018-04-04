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


         <script >
             function showmovie(str) {
                 var xhttp;
                 if (str == "") {
                     document.getElementById("txtHint").innerHTML = "";
                     return;
                 }
                 xhttp = new XMLHttpRequest();
                 xhttp.onreadystatechange = function () {
                     if (xhttp.readyState == 4 && xhttp.status == 200) {
                         document.getElementById("txtHint").innerHTML = xhttp.responseText;
                     }
                 };
                 xhttp.open("GET", "getmovie1.php?q=" + str, true);
                 xhttp.send();
             }
          </script>

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
                            if(isset($_SESSION['username'])) {
                                
                                echo "<a>Hi, " . $_SESSION['username'] . "</a>";
                            }else {

                                echo '<a id="modal_trigger" href="login_page.html">Login | Register</a>';
                            }
                        ?>                        
                        
                    </li>
                        <?php 
                            if(isset($_SESSION['username'])) {
                        ?>
                                <li>
                                    <a href="logout.php" >| Logout</a>
                                </li>     
                        <?php     }
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
						
						<a href="https://www.youtube.com/watch?v=x_EZZrIErDI"><span class="play"><span class="name">X-MAN</span></span><img src="css/images/movie1.jpg" alt="movie" /></a><span class="name">X-MAN</span>
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
						<a href="https://www.youtube.com/watch?v=enmFqm_N_ZE"><span class="play"><span class="name">SPIDER MAN 2</span></span><img src="css/images/movie2.jpg" alt="movie" /></a>
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
						<a href="https://www.youtube.com/watch?v=43sGeIAQwrw"><span class="play"><span class="name">SPIDER MAN 3</span></span><img src="css/images/movie3.jpg" alt="movie" /></a>
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
						<a href="https://www.youtube.com/watch?v=-YppIQUiE9Y"><span class="play"><span class="name">VALKYRIE</span></span><img src="css/images/movie4.jpg" alt="movie" /></a>
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
						<a href="https://www.youtube.com/watch?v=owK1qxDselE"><span class="play"><span class="name">GLADIATOR</span></span><img src="css/images/movie5.jpg" alt="movie" /></a>
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
						<a href="#"><span class="play"><span class="name">ICE AGE</span></span><img src="css/images/movie6.jpg" alt="movie" /></a>
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
            <div id="Div1" style="text-align:center">
 
             <?php 
                            if(isset($_SESSION['username'])) {
                        ?> 
				<form action="/cgi-bin/movie.py" method="post" accept-charset="utf-8" style="width: 945px; font-size:17px">

User Name : <input type="text" name="user_name" value = <?php echo $_SESSION['username'] ?> /> <br />
              Select Movie :<select name="movie" onchange="showmovie(this.value)">
<option value="">Select a movie:</option>
<option value="100">Superman </option>
<option value="1200">Batman</option>
<option value="300">SpiderMAn3</option>
</select><br/>     
<div id="Div1" style="text-align:center">       
        <div id="search">

				  What do you think about this movie ?? Do let us know below : <br />
				  <input type="text" name="message"  id="search-field" title=" Please enter your review" class="blink search-field"  />
					<br /> <input type="submit" value="enter review!" class="button"/></form>
			<?php     }
                        ?>
          


            <br /><br /></br>
			<!-- end Box -->
			
			<!-- Box -->			<!-- end Box -->
			
			<!-- Box -->			<!-- end Box -->
			
		</div>
		<!-- end Content -->
<br/>
<div id="txtHint">Movie info will be listed here...</div>
        
	</div>
	<!-- end Main --><br/><br/><br /><br /></br>

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
