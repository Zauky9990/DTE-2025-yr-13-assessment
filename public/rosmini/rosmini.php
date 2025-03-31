<!-- =============================
	 Sports page for Rosmini website
	 File:	 sports.php
	 Author: Zachary Williams
	 Date:	 April 2024
	 ============================= -->

     <!doctype html>

<html lang="en">
  <head>
    <title>Homelessness awareness - More info</title>
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
				<img src="../images/travpots.jpg" class="sportsimg" width="500" height="350"> <!-- I have made all the images the same size and externally cropped the ones that were stretched  -->
			</div>
		</div>	
		<div class="sportscolumn">
			<div class="hovereffects">
				<img src="../images/2dd6e123de0f174119b0d9f005fb7277.webp" class="sportsimg" width="500" height="350">
			</div>
		</div>
		<div class="sportscolumn">
			<div class="hovereffects">
				<img src="../images/105551729_3148184185250303_7257899827383759481_n.webp" class="sportsimg" width="500" height="350">
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
	</div>
<?php include(SHARED_PATH . '/footer.php') ?> <!-- Including the footer -->
</div>