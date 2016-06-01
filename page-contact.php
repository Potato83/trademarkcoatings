<?php
/*
Template Name: Contact
 */
get_header(); ?>


<h1>Contact</h1>
	<?php while ( have_posts() ) : the_post(); ?>
					
		<?php the_content(); ?>
					
	<?php endwhile; // end of the loop ?>				





<?php get_footer(); ?>


