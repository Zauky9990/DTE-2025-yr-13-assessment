<!-- =============================
	 Sports page for Rosmini website
	 File:	 sports.php
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

	 <!doctype html>

<html lang="en">
  <head>
    <title>Homelessness awareness - Rosmini </title>
    <meta charset="UTF-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../stylesheet/styles.css">  
	<?php require_once('../../private/initialize.php') ?>
	<?php include('../public_navbar.php') ?>                                        <!-- Including all necessary files -->
	<?php include(SHARED_PATH . '/header.php') ?>
  </head>
<div>
	<h1>'</h1>               <!-- This div is crucial for getting my sticky navbar to work properly -->
</div>

<div class="cutofffix">           <!-- Overall container div so that I can margin my page down a few pixels in order to make room for the navbar -->
	<div class="sportscontainer">	
		<div class="sportscolumn">               <!-- I have divided the sports images into 3 columns and 3 rows  -->
			<div class="hovereffects">
				<img src="<?php echo htmlspecialchars($row10["image_url"])?>" class="sportsimg" width="500" height="350"> <!-- I have made all the images the same size and externally cropped the ones that were stretched  -->
			</div>
		</div>	
		<div class="sportscolumn">
			<div class="hovereffects">
				<img src="<?php echo htmlspecialchars($row1["image_url"])?>" class="sportsimg" width="500" height="350">
			</div>
		</div>
		<div class="sportscolumn">
			<div class="hovereffects">
				<img src="<?php echo htmlspecialchars($row2["image_url"])?>" class="sportsimg" width="500" height="350">
			</div>
		</div>
	</div>
	<!-- Page content -->
	<div class="contentcontainer">
		<p class="homecontent">Rosmini Traveling Pots is a community initiative that brings portable kitchens and meal-sharing programs to underserved areas, offering a unique way of addressing food insecurity. By setting up mobile kitchens, it provides freshly cooked meals to individuals and families who may not have access to regular, nutritious food options. Beyond just feeding people, the program fosters a sense of togetherness and mutual support within the community. It also encourages local volunteers and organizations to come together, share resources, and build stronger bonds. Rosmini Traveling Pots not only fills a physical need for food but also nurtures social cohesion, helping individuals feel more connected and supported in times of hardship.
		</p>
		<p class="homecontent">
		Rosmini Traveling Pots is an innovative social initiative that aims to combat food insecurity and foster community solidarity by bringing nutritious meals directly to areas where they are most needed. Named after Antonio Rosmini, a philosopher and humanitarian known for his commitment to helping others, this program operates mobile kitchens equipped to cook and serve meals in various neighborhoods, especially those facing economic challenges. The initiative not only focuses on providing free meals but also promotes social inclusion by encouraging participation from local volunteers and organizations.
		</p>
		<h2 class="rosminititle">How can you get involved?</h2>
		<div class="contactusdiv">
			<p class="homecontent1">If you want to come and get involved with travelling pots and do your bit in the community, come send an email to one of our young vinnies leaders to join the google classroom! </p>
			<img src="<?php echo htmlspecialchars($row8["image_url"])?>" class="contactimg">
		</div>
	</div>
<?php include(SHARED_PATH . '/footer.php') ?> <!-- Including the footer -->
</div>