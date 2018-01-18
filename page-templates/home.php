<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?> 


<div class="intro">
	<div class="row">
		<div class="small-12 columns">
			<h1>Hello</h1>
			<div class="row">
				<div class="small-12 medium-3 columns">
					<div class="hp-selfie">
						<img src="./wp-content/uploads/2018/01/me.png">
					</div>	
				</div>
				<div class="small-12 medium-9 columns section-padding">	
					<p>Welcome to my site. My name is Justin Kingsly Rosen and I'm a WordPress developer. I live in Las Vegas and have worked for R&R Partners since 2011.</p>
					<p>This site is built in WordPress using a custom theme. No templates here. I'm using Foundation 6 as my framework with SCSS. I'm using a GitHub repo and Gulp to commit my changes from local to live.</p>
					<p style="color: #FF7200;">This site is a work in progress. Thank you for your patience as I continue to add content and refine the experience.</p>
				</div>
			</div>		 
		</div>
	</div>
</div>
<div class="row">
	<div class="small-12 medium-8 columns about-me">	
		<h1>A little about me</h1>
		<p>Originally a Jersey kid, I moved to Las Vegas in the Summer of 2007, where I interned for Station Casinos. I then accepted a job as the Marketing Coordinator for another Station's property, Wildfire Casino, where I worked in casino marketing for a short time. I eventually went back to school full time at the University of Nevada - Las Vegas, where I graduated in 2010 with a bachelors degree in Marketing.</p>	
		<p>After graduation, I took an internship in the web department at SK+G, a local ad agency. It was after this internship that I began my career at R&R Partners. Although I have been working in web development for three and a half years, I got my start on the Digital Project Management team. It was in this role that I learned the fundamentals of digital advertising.</p>
		<p>As a Digital Project Manager, I acted as a primary client and vendor contact for a number of our clients. My role included providing scopes of work for digital campaigns, creating and sticking to timelines, facilitating work across departments, as well as content entry for client websites and management of R&R's domain names. I helped influence digital strategy across email, social and web projects while working on major campaigns.</p>
		<p>This is where I found my passion for web development. I began to teach myself the fundamentals and expressed my interest in transferring to the web development team, where I have worked ever since. I have worked on countless websites, web banners and emails for a myriad of clients, all while learning new and valuable skills and assisting in whatever ways possible, including creative design, web strategy and analytics/tagging.</p>
		<p>Some noteworthy clients that I have worked on include Las Vegas Convention and Visitors Authority (LVCVA), Boeing, MGM Resorts International, Avnet, NV Energy, Small Town Brewery, Cox, as well as countless other small and pro-bono clients.</p>
	</div>		
	<div class="small-12 medium-4 columns">
		<h1>Skills</h1>
		<h3><i class="fa fa-code" aria-hidden="true"></i> Languages</h3>
		<ul>
			<li><i class="fa fa-html5" aria-hidden="true"></i> HTML</li>
			<li><i class="fa fa-css3" aria-hidden="true"></i> CSS/SCSS</li>
			<li><i class="icon-javascript"></i> JS/JQuery</li>
			<li><i class="icon-php-alt"></i> PHP</li>
		</ul>
		<h3><i class="fa fa-sitemap" aria-hidden="true"></i> Frameworks</h3>
		<ul>
			<li>Zurb Foundation (preferred)</li>
			<li>Bootstrap</li>
		</ul>
		<h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> CMS/Software</h3>
		<ul>
			<li><i class="icon-wordpress"></i> WordPress</li>
			<li><i class="fa fa-crop" aria-hidden="true"></i> Photoshop</li>
			<li><i class="fa fa-google" aria-hidden="true"></i> Google Web Designer</li>
		</ul>
		<h3><i class="fa fa-globe" aria-hidden="true"></i> Misc Web Skills</h3>
		<ul>
			<li><i class="fa fa-line-chart" aria-hidden="true"></i> Google Analytics (Certified)</li>
			<li><i class="fa fa-google" aria-hidden="true"></i> Google Tag Manager</li>
			<li><i class="fa fa-github" aria-hidden="true"></i> GitHub</li>
			<li><i class="fa fa-link" aria-hidden="true"></i> Domain/Hosting Management</li>
			<li><i class="fa fa-desktop" aria-hidden="true"></i> MAMP/Local Development</li>
			<li><i class="icon-shell"></i> OS X Command Line (Terminal)</li>
			<li><i class="fa fa-database" aria-hidden="true"></i> phpMyAdmin</li>
			<li><i class="icon-npm"></i> NPM</li>
			<li><i class="icon-gulp"></i> Gulp / <i class="icon-grunt"></i> Grunt</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> Email Marketing Services (MailChimp, Constant Contact, etc)</li>			
	</div>	
</div>

<?php endwhile; ?>	

<?php get_footer(); ?>