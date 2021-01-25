<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<link rel="stylesheet" href="./assets/css/lightbox.css" media="screen" />
	<link rel="stylesheet" href="./assets/css/style.css" media="screen" />
	<link rel="stylesheet" href="./assets/css/form.css" media="screen" />
</head>
<body>
	<div id="main-wrapper">
		<?php require __DIR__ . "/includes/header.php" ?>
		<div id="body">
			<?php require __DIR__ . "/includes/sidebar.php"; ?>
			<div id="content">
				<form method="POST">
					<div class="input-group">
						<label for="age">Age</label>
						<input type="number" id="age" name="age" placeholder="Age" <?php echo isset($_POST['age']) ? "value='{$_POST['age']}'" : ""; ?>>
					</div>
					<div class="input-group">
						<label for="sex">Sex</label>
						<input type="radio" name="sex" value="male" <?php if(isset($_POST['sex']) && $_POST['sex'] == 'male'){echo "checked";} ?>> Male  
						<input type="radio" name="sex" value="female" <?php if(isset($_POST['sex']) && $_POST['sex'] == 'female'){echo "checked";} ?>> Female 
					</div>
					<div class="input-group">
						<label for="height">Height</label>
						<input type="number" id="height" name="height" placeholder="Height" <?php echo isset($_POST['height']) ? "value='{$_POST['height']}'" : ""; ?>>centimeters
					</div>
					<div class="input-group">
						<label for="weight">Weight</label>
						<input type="number" id="weight" name="weight" placeholder="Weight" <?php echo isset($_POST['weight']) ? "value='{$_POST['weight']}'" : ""; ?>>kilograms
					</div>
					<div class="input-group">
						<input type="submit" value="Calculate" name="calculate">
					</div>
					<?php 
					if (isset($_POST['calculate'])) {
						$age = $_POST['age'];
						$sex = $_POST['sex'];
						$height = $_POST['height'];
						$weight = $_POST['weight'];
						if ($sex == "male") {
							$value = 10*$weight+6.25*$height-5*$age+5;
						}else{
							$value = 10*$weight+6.25*$height-5*$age-161;
						}
						echo "You need <i>{$value}</i> calories/day to maintain your weight";
					} 
					?>
				</form>
			</div>
		</div>	
	</div>

<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/lightbox.js"></script>
</body>
</html>