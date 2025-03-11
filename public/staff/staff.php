<!-- =============================
	 Staff page for Rosmini website
	 File:	 staff.php
	 Author: Zachary Williams
	 Date:	 April 2024
	 ============================= -->

     <!doctype html>

<html lang="en">
  <head>
    <title>Homelessness awareness - Funding</title>
    <meta charset="UTF-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../stylesheet/styles.css">                       <!-- Including all necessary files -->
	<?php require_once('../../private/initialize.php') ?>
	<?php include('../public_navbar.php') ?> 
	<?php include(SHARED_PATH . '/header.php') ?>
  </head>
<div>
	<h1>'</h1>              <!-- This div is crucial for getting my sticky navbar to work properly -->
</div>
<div class="staffcutofffix">           <!-- Overall container div so that I can margin my page down a few pixels in order to make room for the navbar -->
	<div class="staffcontainer">
		
		<div class="stafftitle">
			<h2>Digital Technology</h2>
		</div>
		<div class="dterow">
			<div class="cards">   <!-- Cards to make staff page look better and more attractive -->
				<img src="../images/John.png" class="staffimg" width="250" height="300">
				<div class="staffcontainer">
    				<h4 class="stafftext"><b>Mr John</b></h4>
 				</div>
			</div>
			<div class="cards">
				<img src="../images/Foong.png" class="staffimg" width="250" height="300">
				<div class="staffcontainer">
    				<h4 class="stafftext"><b>Mr Foong</b></h4>
 				</div>
			</div>
		</div>	
		<div class="line">
			<h1>     `</h1>      <!-- Line dividing the two departments (` is invisible) -->
		</div>
		
		<div class="stafftitle">
			<h2>Geography</h2>
		</div>
		<div class="geographyrow">
			<div class="cards">
				<img src="../images/cooper.png" class="staffimg" width="250" height="300">
				<div class="staffcontainer">
    				<h4 class="stafftext"><b>Mr Cooper</b></h4>
 				</div>
			</div>
			<div class="cards">
				<img src="../images/latch.png" class="staffimg" width="250" height="300">
				<div class="staffcontainer">
    				<h4 class="stafftext"><b>Mr Latch</b></h4>
 				</div>
			</div>
			<div class="cards">
				<img src="../images/maggs.png" class="staffimg" width="250" height="300">
				<div class="staffcontainer">
    				<h4 class="stafftext"><b>Mr Maggs</b></h4>
 				</div>
			</div>
			<div class="cards">
				<img src="../images/morrogh.png" class="staffimg" width="250" height="300">
				<div class="staffcontainer">
    				<h4 class="stafftext"><b>Mrs Morrogh</b></h4>
 				</div>
			</div>
		</div>
	</div>
</div>	
	
	

<?php include(SHARED_PATH . '/footer.php') ?> <!-- Including footer -->
</html>