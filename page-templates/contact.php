<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?> 

<div class="row">
	<div class="small-12 columns">
		<h1>Contact Me</h1>
		<p><?php the_content(); ?></p>
	</div>	
</div>

<?php endwhile; ?>

<?php get_footer(); ?>	