<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu</title>
	<link rel="stylesheet" href="./assets/css/lightbox.css" media="screen" />
	<link rel="stylesheet" href="./assets/css/style.css" media="screen" />
</head>
<body>
	<div id="main-wrapper">
		<?php require __DIR__ . "/includes/header.php" ?>
		<div id="body">
			<?php require __DIR__ . "/includes/sidebar.php"; ?>
			<div id="content">
				<h3>Drinks</h3>
				<a href="menu/1.jpg" data-lightbox="drinks" title="Drink 1"><img src="menu/1.jpg"  width="160" height="120"/></a>
				<a href="menu/2.jpg" data-lightbox="drinks" title="Drink 2"><img src="menu/2.jpg"  width="160" height="120"/></a>
				<a href="menu/3.jpg" data-lightbox="drinks" title="Drink 3"><img src="menu/3.jpg"  width="160" height="120"/></a>
			
				<h3>Food</h3>
				<a href="menu/4.jpg" data-lightbox="food" title="Food 1"><img src="menu/4.jpg"  width="160" height="120"/></a>
				<a href="menu/5.jpg" data-lightbox="food" title="Food 2"><img src="menu/5.jpg"  width="160" height="120"/></a>
				<a href="menu/6.jpg" data-lightbox="food" title="Food 3"><img src="menu/6.jpg"  width="160" height="120"/></a>
				<a href="menu/7.jpg" data-lightbox="food" title="Food 4"><img src="menu/7.jpg"  width="160" height="120"/></a>
				<a href="menu/8.jpg" data-lightbox="food" title="Food 5"><img src="menu/8.jpg"  width="160" height="120"/></a>
			</div>
		</div>	
	</div>

<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/lightbox.js"></script>
</body>
</html>