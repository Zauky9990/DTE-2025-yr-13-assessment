<!-- =============================
	 Home page for Rosmini website
	 File:	 home.php
	 Author: Zachary Williams
	 Date:	 April 2024
	 ============================= -->

     <!doctype html>

	 <html lang="en">
  <head>
    <title>Homelessness awareness - Home</title>
    <meta charset="UTF-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../stylesheet/styles.css">                       <!-- Including all necessary files -->
	<?php require_once('../../private/initialize.php') ?>
	<?php include('../public_navbar.php') ?> 
	<?php include(SHARED_PATH . '/header.php') ?>
  </head>

<div>
	<h1>'</h1>                 <!-- This div is crucial for getting my sticky navbar to work properly -->
</div>
<div class="cutofffix">       <!-- Overall container div so that I can margin my page down a few pixels in order to make room for the navbar -->

     <!-- Page content -->
	<div class="contentcontainer">
		<h2 class="title"><b>Homelessness in our community</b></h2>
		<div class="carousel">
			<?php include('carousel.php') ?>   <!-- Including the carousel (in same folder as this file) -->
		</div>
		<p class="homecontent"> 
		Homelessness is a growing issue that affects millions of people worldwide, and raising awareness about it is crucial in fostering understanding and compassion. Many individuals experiencing homelessness are often seen as invisible or stigmatized, but their struggles are real and varied, ranging from economic hardship and mental health issues to addiction and systemic failures. By increasing awareness, we can begin to break down stereotypes, advocate for policy changes, and create more support systems for those in need. It is essential to remember that homelessness is not a choice, and everyone deserves access to safe, stable housing and the opportunity to rebuild their lives. Encouraging empathy, community involvement, and a commitment to addressing the root causes of homelessness can help reduce its prevalence and ultimately create a more equitable society for all.
		</p>

		<h2 class="title" style="margin-top: 40px"><b>Travelling pots (Rosmini)</b></h2>
		<img src="<?php echo htmlspecialchars($row9["image_url"])?>" class="sportsimg1" width="auto" height="550">
		<p class="homecontent" style="margin-top:20px">
		"Travelling Pots" is a joint initiative by the Young Vinnies groups of Rosmini College and Carmel College in Auckland, where students prepare and package meals to be distributed to individuals and families in need, often through Vinnies food banks.
		</p>
		
		<p class="homecontent" style="margin-top:20px">
		More information on this is shown on <a href="../rosmini/rosmini.php">Rosmini Involvement</a>
		</p>
	</div>
	<?php include(SHARED_PATH . '/footer.php') ?>  <!-- Including the footer -->

  <!-- Loading Screen -->
</html>
</div>
</html>
