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
				<img src="../images/basketball.jpg" class="sportsimg" width="500" height="300"> <!-- I have made all the images the same size and externally cropped the ones that were stretched  -->
			</div>
			<div class="container">
    			<h4><b>Basketball</b></h4>
 			</div>
			<div class="hovereffects"> <!-- This div is here to add a hover effect behind each of the images for extra aesthetics -->
				<img src="../images/cricket.jpg" class="sportsimg" width="500" height="300">
			</div>
			<div class="container">
    			<h4><b>Cricket</b></h4>
 			</div>
			<div class="hovereffects">
				<img src="../images/hockey.jpg" class="sportsimg" width="500" height="300">
			</div>
			<div class="container">
    			<h4><b>Hockey</b></h4> <!-- In bold to stand out -->
 			</div>
		</div>	
		<div class="sportscolumn">
			<div class="hovereffects">
				<img src="../images/lacrose.jpg" class="sportsimg" width="500" height="300">
			</div>
			<div class="container">
    			<h4><b>Lacrosse</b></h4>
 			</div>
			<div class="hovereffects">
				<img src="../images/rugby.jpg" class="sportsimg" width="500" height="300">
			</div>
			<div class="container">
    			<h4><b>Rugby</b></h4>
 			</div>
			<div class="hovereffects">
				<img src="../images/snowboard.jpg" class="sportsimg" width="500" height="300">
			</div>
			<div class="container">
    			<h4><b>Snowboarding</b></h4>
 			</div>
		</div>
		<div class="sportscolumn">
			<div class="hovereffects">
				<img src="../images/tennis.jpg" class="sportsimg" width="500" height="300">
			</div>
			<div class="container">
    			<h4><b>Tennis</b></h4>
 			</div>
			<div class="hovereffects">
				<img src="../images/track.jpg" class="sportsimg" width="500" height="300">
			</div>
			<div class="container">
    			<h4><b>Track</b></h4>
 			</div>
			<div class="hovereffects">
				<img src="../images/water polo.jpg" class="sportsimg" width="500" height="300">
			</div>
			<div class="container">
    			<h4><b>Water Polo</b></h4>
 			</div>
		</div>
	</div>
	<!-- Page content -->
	<div class="contentcontainer">
		<p>Sport at Rosmini College is an integral element of holistic education and helps promote a healthy and active lifestyle. We have a strong sporting culture and value performance at both the elite and participation levels, offering competitive opportunities in various codes. It is important for young men to involve themselves with physical endeavours throughout their time at school and sport offers a platform for this.
		</p>
		<p>
	We are committed to:

	Providing opportunities for all students to develop a healthy lifestyle through a breadth and depth of physical activities.
	Ensuring all students participate in a holistic curriculum which embeds physical activity into their daily routine.
	Fostering and nurturing athletes who aspire to excellence in their selected codes.
	Developing the whole person as well as the athlete.
	Engaging with the school's wider community through developing partnerships with external agencies, regional and national sporting bodies and other schools.
	Rosmini College primarily focuses on encouraging enjoyment of sport and traditions of sportmanship and fair play. Further to this, excellence is also valued and the Rosmini College High Performance Sport programme is designed to cater for those individuals aiming to follow a pathway of competitive sport.
		</p>
	</div>
<?php include(SHARED_PATH . '/footer.php') ?> <!-- Including the footer -->
</div>