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

			<h5 class="resourcecontent2">How does being a part of Young Vinnies benefit Rosmini College students?</h5>
			<p class="resourcecontent2">Being a part of Young Vinnies offers students at Rosmini College the opportunity to grow personally, spiritually, and socially. It helps them develop leadership and teamwork skills, as they often work together to plan and carry out service projects. The experience also builds a sense of empathy, gratitude, and responsibility toward others. Students gain a deeper appreciation for the struggles faced by people in their community, which often inspires them to continue volunteering beyond their school years. Additionally, it reinforces the school’s Catholic values by encouraging students to live out their faith in practical, meaningful ways.</p>
		</div>
			<div class="line">
			<p>     `</p>      <!-- Line dividing the two departments (` is invisible) -->
		</div>
		
		<div class="contentcontainer">
			<h5 class="resourcecontent">How can I get involved with Travelling Pots?</h5>
			<p class="resourcecontent">To get involved with Travelling Pots at Rosmini College, you can start by expressing your interest to the school’s service learning coordinator or the teacher responsible for the program. Travelling Pots is typically focused on helping others through fundraising, food preparation, and community service, so look out for any recruitment events or announcements in school assemblies or notices. It’s a great way to contribute to local causes and engage in hands-on service projects alongside fellow students.</p>

			<h5 class="resourcecontent2">What is the purpose of the Travelling Pots program at Rosmini College?</h5>
			<p class="resourcecontent2">The Travelling Pots program at Rosmini College is designed to promote community spirit and provide students with opportunities to engage in service to others through the sharing of meals. The initiative allows students and families to prepare and share home-cooked meals with people in need, especially in their local community. It emphasizes the value of generosity and hospitality, helping to build connections and foster a sense of unity within the Rosmini College community.</p>
		</div>

		</div>
			<div class="line">
			<p>     `</p>      <!-- Line dividing the two departments (` is invisible) -->
		</div>

		<div class="contentcontainer">
			<h5 class="resourcecontent">Why is it important that we work together to combat homelessness?</h5>
			<p class="resourcecontent">It is important to work together to combat homelessness because it is a complex issue that affects individuals, families, and communities in profound ways. By collaborating, we can pool resources, ideas, and efforts to provide more effective solutions, such as emergency shelter, affordable housing, mental health support, and job training. Working together also helps to reduce the stigma surrounding homelessness and creates a sense of shared responsibility in making society more inclusive. When we all contribute to addressing the root causes and immediate needs of homelessness, we can build a stronger, more compassionate community where everyone has the opportunity to thrive.</p>
			
			<h5 class="resourcecontent2">How does combating homelessness benefit the community as a whole?</h5>
			<p class="resourcecontent2">Combating homelessness benefits the community by creating a safer, more inclusive environment for everyone. When people are given the support they need to find stable housing and employment, they can reintegrate into society, reducing crime rates and improving public health. Additionally, providing resources for the homeless helps lower the long-term financial strain on public services such as healthcare, law enforcement, and social services, as addressing the root causes of homelessness can prevent costly emergency interventions. Ultimately, when homelessness is reduced, communities become more resilient and supportive, benefiting not only those who were homeless but the entire population.</p>
		</div>

		</div>
	</div>
</div>	
	
	

<?php include(SHARED_PATH . '/footer.php') ?> <!-- Including footer -->
</html>