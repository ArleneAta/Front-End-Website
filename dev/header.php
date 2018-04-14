<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSD Website</title>
    <link rel="stylesheet" href="./styles/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
</head>
<body>
<div class="wrapper">
    <header>
		<div class="topnav" id="myTopnav">
			<a href="./index.php" class="logo">
					<img src="images/bcit-logo.png" alt="BCIT Logo">
			</a>
			<div class="padding-rest-of-nav">
			<a href="./index.php">Home</a>
			<a href="./program.php">Program</a>
			<a href="./schedule.php">Schedule</a>
			<a href="./students.php">Students</a>
			<a href="./staff.php">Staff</a>
			<a href="./eresources.php">E-Resources</a>
			<a href="./contact.php">Contact</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
		</div>
	</div>
	</header>