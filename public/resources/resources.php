<!-- =============================
	 Staff page for Rosmini website
	 File:	 staff.php
	 Author: Zachary Williams
	 Date:	 April 2024
	 ============================= -->

     <!doctype html>

<html lang="en">
  <head>
    <title>Homelessness awareness - Resources/FAQ</title>
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
			<h2>Resources and FAQ</h2>
		</div>
		<div class="contentcontainer" style="margin-top:20px;">
			<h5 class="resourcecontent">How can I join Young Vinnies at Rosmini College?</h5>
			<p class="resourcecontent">To join Young Vinnies at Rosmini College, you can sign up during the start of the school year or when the group recruits new members. Look out for announcements made by the school's leadership team or check the notices around the school. You may also be able to approach a teacher or the coordinator of the group to express your interest. Once you’re a member, you’ll have the opportunity to participate in various community service activities and make a positive impact through social justice initiatives.</p>
		
		</div>
			<div class="line">
			<p>     `</p>      <!-- Line dividing the two departments (` is invisible) -->
		</div>
		
		<div class="contentcontainer">
			<h5 class="resourcecontent">How can I get involved with Travelling Pots?</h5>
			<p class="resourcecontent">To get involved with Travelling Pots at Rosmini College, you can start by expressing your interest to the school’s service learning coordinator or the teacher responsible for the program. Travelling Pots is typically focused on helping others through fundraising, food preparation, and community service, so look out for any recruitment events or announcements in school assemblies or notices. It’s a great way to contribute to local causes and engage in hands-on service projects alongside fellow students.</p>
		</div>

		</div>
			<div class="line">
			<p>     `</p>      <!-- Line dividing the two departments (` is invisible) -->
		</div>

		<div class="contentcontainer">
			<h5 class="resourcecontent">Why is it important that we work together to combat homelessness?</h5>
			<p class="resourcecontent">It is important to work together to combat homelessness because it is a complex issue that affects individuals, families, and communities in profound ways. By collaborating, we can pool resources, ideas, and efforts to provide more effective solutions, such as emergency shelter, affordable housing, mental health support, and job training. Working together also helps to reduce the stigma surrounding homelessness and creates a sense of shared responsibility in making society more inclusive. When we all contribute to addressing the root causes and immediate needs of homelessness, we can build a stronger, more compassionate community where everyone has the opportunity to thrive.</p>
		</div>

		</div>
	</div>
</div>	
	
	

<?php include(SHARED_PATH . '/footer.php') ?> <!-- Including footer -->
</html>