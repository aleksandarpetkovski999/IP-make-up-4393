<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reservation</title>
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
				<?php if(isset($_POST['reserve'])): ?>
					<?php 
						$con = mysqli_connect("localhost","root","","reserves");
						$name = mysqli_real_escape_string($con,$_POST['name']);
						$phone = mysqli_real_escape_string($con,$_POST['phone']);
						$email = mysqli_real_escape_string($con,$_POST['email']);
						$date = mysqli_real_escape_string($con,$_POST['date']);
						$time = mysqli_real_escape_string($con,$_POST['time']);
						$people = mysqli_real_escape_string($con,$_POST['people']);
						if(empty($phone) || empty($email)){
							echo "<h2>Please Input All The Required Information</h2>";
							header("refresh:3; url:reserve.php");
						}else if(mysqli_query($con,"INSERT INTO reserves(name, phone, email, date, time, people) VALUES('$name','$phone', '$email', '$date', '$time', '$people')")) {
							echo "<h2>Thank you, we will call you to approve the reservation.</h2>
							Name: {$name}<br>
							Phone: {$phone}<br>
							Email: {$email}<br>
							Date/Time: {$date}/{$time}<br>
							No. of people: {$people}

							";
						}else{
							echo $phone;
						}
					 ?>
				<?php else: ?>
					<form method="POST">
						<h2 style="margin-bottom: 20px;">Make A Reservation</h2>
						<div class="input-group">
							<label for="name">Name and Surname</label>
							<input type="text" name="name" id="name" placeholder="Name and Surname">
						</div>
						<br>
						<div class="input-group">
							<label for="phone">Phone *</label>
							<input type="text" name="phone" id="phone" placeholder="Phone">
						</div>
						<div class="input-group">
							<label for="email">Email *</label>
							<input type="text" name="email" id="email" placeholder="Email">
						</div>
						<div class="input-group">
							<label for="date">Date *</label>
							<input type="date" name="date" id="date">
						</div>
						<div class="input-group">
							<label for="time">Time *</label>
							<input type="time" name="time" id="time">
						</div>
						<div class="input-group">
							<label for="people">No. of people</label>
							<input type="number" name="people" id="people" placeholder="No. Of People">
						</div>
						<br>
						<div class="input-group">
							<label>	</label>
							<input type="checkbox" id="agree"> I agree to pay reservation fee, even if I don't apear at the restaurant
						</div>
						<input type="submit" id="reserve" value="Reserve" style="padding: 5px 10px;" name="reserve">
					</form>
					<script>
						window.onload = (event) => {
						  document.querySelector("#reserve").addEventListener("click",(e)=>{
						  	if (!document.getElementById('agree').checked) {
					            alert("Please check the agreement");
					            e.preventDefault();
					        }
						  })
						};
					</script>
				<?php endif; ?>
			</div>
		</div>	
	</div>

<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/lightbox.js"></script>
</body>
</html>