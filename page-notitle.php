<?php 
	
/*
	Template Name: Page No Title
*/
	
get_header(); ?>

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
			
			<h1>This is my Static Title</h1>
			
			<p><?php the_content(); ?></p>
			
			<hr>
		
		<?php endwhile;
		
	endif;
			
	?>

<?php get_footer(); ?>