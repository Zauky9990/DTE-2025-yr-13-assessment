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
		<p class="homecontent">Rosmini College is a Catholic Boys’ School founded by the Rosminian order to provide a Catholic education to young men on Auckland’s North Shore. We aim to shape them into well-rounded young men ready to leave school who are able to make a positive contribution to society and are empowered to serve others by living out the founder’s maxims.
		</p>

		<p class="homecontent">
		Our Mission: Rosmini College supports and develops well-rounded young men while keeping true to the maxims of Antonio Rosmini.  A holistic education in the Rosminian tradition that fosters a genuine encounter with Christ.
		</p>
		<p class="homecontent">
		Our Vision: Christ-centred young men who have the values, attitudes, knowledge and skills to fulfil their life and be empowered to serve others.
		</p>
		<p class="homecontent">
		Our Values: Dignity. Integrity. Fairness. Charity. Justice
		</p>
		<p class="homecontent">
		Our Motto: Charity fulfils the law.
		</p>
		<p class="homecontent">
		Treaty of Waitangi: Rosmini College is committed to the principles of the Treaty of Waitangi and actively supports and encourages the achievement of its Maori pupils and fosters Maori culture.
		</p>
		<p class="homecontent">
		Special Character: Rosmini College is a learning community that requires each student to pursue his fullest potential in spiritual, academic, social, cultural and co-curricular pursuits. The school will equip each student with the desire to keep the Law of Christ;  
		</p>
		<p class="homecontent">
		“Love the Lord your God with your whole heart and your neighbour as yourself.”
		</p>
	</div>
	<?php include(SHARED_PATH . '/footer.php') ?>  <!-- Including the footer -->
</div>
</html>
