<?php
$conn = mysqli_connect('localhost', 'root', '', 'art_gaery_db') or die("Unable to connect to database");
$uname='lilypichu';
//sql staments
$sql1 = "SELECT email from main where '$uname' = main.username" ;
$sql2 = "SELECT fullname from main where '$uname' = main.username";
$sql3 = "SELECT maindescription from main where '$uname' = main.username";



//$sql = 'SELECT Id, art_title FROM arts';

//print out the result
$result = mysqli_query($conn, $sql1);
echo $result;


    // $sql2 = "SELECT * from $sql where '$in2' = logintable.pass";
    //$result2 = mysqli_query($conn, $sql2);
    //$final2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    session_start();
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
    $email = $row['email'];
    $maindescription = $row['maindescription'];
    
    echo $fullname;


    //$_SESSION['$artname'] = $row['artname'];
    //$_SESSION['$artdesc'] = $row['artdesc'];
    //$_SESSION['$artimage'] = $row['artimage'];



    //new table in mysql to connect username and arrtist.html? enta like nav hage copy madidre prati time new page agat ala
    //elrige ondond table agatta?
    
    // if (file_exists('../artpage/'.$uname.".php"))
    // {
    //     header("Location: ".'../artpage/'.$uname.".php");
    // }
    
    // else
    // {
    //     echo copy('../artpage/base.php','../artpage/'.$uname.'.php');  //boom done
    //     header("Location: ".'../artpage/'.$uname.".php");

    // }




//$result2 = mysqli_query($conn, $sql);
//rep result in the form of an array
//$final = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
//print_r($final);  



?>


<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Colourful Serenity</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
		
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
							<!--
								logo
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>
							-->
							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="../main/index.html">Home</a></li>
							<li><a href="../main/contact.html">Contact Us</a></li>
							<li><a href="../main/login.html">Login</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1 >Colourful Serenity<br /></h1>
								<!-- <p >Fill your cart with art.</p> -->
								<p>You imagine. We will create.</p>
							</header>
							<br>
							<h3>SELECT THE ARTIST</h3>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/lilypichu1.jpg" alt="" />
									</span>
									<a href="../artpage/lilyart.html">
										<h2>LilyPichu</h2>
										<div class="content">
											<p>Lily Ki</p>
											<p>American internet personality, musician, voice actress, and animator</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/derek1.jpg" alt="" />
									</span>
									<a href="../artpage/derekart.html">
										<h2>Derek</h2>
										<div class="content">
											<p>Derek Domnic D'souza</p>
											<p>Visual artist & animator from Bangalore.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/minori1.jpg" alt="" />
									</span>
									<a href="../artpage/minoriart.html">
										<h2>Minori</h2>
										<div class="content">
											<p>Japanese YouTuber from San Francisco!</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Tempus</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Aliquam</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Veroeros</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Ipsum</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic08.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Dolor</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Nullam</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic10.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Ultricies</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic11.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Dictum</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Pretium</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>