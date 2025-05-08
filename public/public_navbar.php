<!-- =============================
	 Navigation bar for Rosmini website
	 File:	 public_navbar.php
	 Author: Zachary Williams
	 Date:	 April 2024
	 ============================= -->
<?php require_once('../../private/dbconn.php') ?>
<?php $sql = "SELECT * FROM images";
 
 // SQL query to fetch data from the table
 	$result = $conn->query($sql);
 	$row1 = $result->fetch_assoc();
 	$row2 = $result->fetch_assoc();
 	$row3 = $result->fetch_assoc();
 	$row4 = $result->fetch_assoc();
 	$row5 = $result->fetch_assoc();
 	$row6 = $result->fetch_assoc();
 	$row7 = $result->fetch_assoc();
 	$row8 = $result->fetch_assoc();
 	$row9 = $result->fetch_assoc();
 	$row10 = $result->fetch_assoc();
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../stylesheet/styles.css">   <!-- Including all necessary files -->
</head>

<header>
	<div class="navbar">   <!-- Container div -->
	<img src="<?php echo htmlspecialchars($row7["image_url"])?>" class="rosminilogo" width="120px">
	<div class="motto">
			<h3><b>Homelessness</b></h3>
			<h3><b>Awareness</b></h3>
		</div>

		<ul class="navb">	         <!-- Navbar is split into 3 sections -->
			<li><a href="../home/home.php"><div class="buttons1"><p class="HeaderText"><b>Home</b></p></div></a></li>
			<li><a href="../rosmini/rosmini.php"><div class="buttons1"><p class="HeaderText"><b>Rosmini Involvement</b></p></div></a></li>
			<li><a href="../resources/resources.php"><div class="buttons1"><p class="HeaderText"><b>Resources/FAQ</b></p></div></a></li>      <!-- 1 being first half of pages and links -->
			<li><a href="../home/home.php"><div class="buttons1"><p class="HeaderText"><b>Support</b></p></div></a></li>
		</ul>
		
	</div>
</header>  