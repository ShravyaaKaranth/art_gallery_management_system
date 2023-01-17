<!DOCTYPE HTML>
<!--
	Lens by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
$conn = mysqli_connect('localhost', 'root', '', 'art_gaery_db') or die("Unable to connect to database");
session_start();
$uname = $_SESSION['$uname'];
$sql1 = "SELECT * from uploaded_art where '$uname' = uploaded_art.artist_name";


//$sql = 'SELECT Id, art_title FROM arts';

//print out the result


?>
<html>

<head>
	<title>
		<?php echo $uname; ?>
	</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload-0 is-preload-1 is-preload-2">

	<!-- Main -->
	<div id="main">

		<!-- Header -->
		<header id="header">
			<h1>
				<?php echo $uname; ?>
			</h1>
			<h3>Want To Post?</h3>
			<form method="post" action="uploadart.php" class="form-content" enctype="multipart/form-data">
				<div class="input">
					<input type="text" id="artname[]" name="artname" placeholder=" " />
					<div class="label">
						<label for="artname">Enter Art Name </label>
					</div>
				</div>
				<div class="input">
					<input type="text" id="artdesc[]" name="artdesc" placeholder=" " />
					<div class="label">
						<label for="artdesc">Description About Art </label>
					</div>
				</div>

				<div class="input">
					<label>Select Image File:</label>
					<input type="file" id="image" name="image">
					<button type="submit">Upload</button>
				</div>

			</form>
		</header>

		<!-- Thumbnail -->
		<?php
		$result = mysqli_query($conn, $sql1);
		//while ($row = mysqli_fetch_array($result)) {
		
		//while ($row = mysqli_fetch_array($result)):
		$row = $result->fetch_assoc();
		if ($row == null) {
			echo "You Have Not Uploaded Yet";
		} else {
			$artname = $row['artname'];
			$artdesc = $row['artdesc'];
			$artimage = $row['artimage'];

			$convart = '<td><img src="data:image/jpeg;base64,' . base64_encode($artimage) . '"/></td>';
			file_put_contents('images/fulls/' . $artname . '.jpg', $artimage);

			?>
			<section id="thumbnails">
				<!-- <article>
																			<a class="thumbnail" href="images/fullsa2.jpg" data-position="left center"><img
																					src="images/fulls/lily2.jpg" alt="" /></a>
																			<h2>Diam tempus accumsan</h2>
																			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																		</article> -->
				<article>
					<a class="thumbnail" href="<?php echo "images/fulls/" . $artname . ".jpg"; ?>"
						data-position="left center"><img src="<?php echo "images/fulls/" . $artname . ".jpg"; ?>"
							alt="" /></a>
					<h2>
						<?php if ($row == null) {
							echo "You Have Not Uploaded Yet";
						} else {
							echo $artname;
						} ?>
					</h2>
					<p><?php if ($row == null) {
						echo "You Have Not Uploaded Yet";
					} else {
						echo $artdesc;
					} ?></p>
				</article>

			<?php } //endwhile; ?>
		</section>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>