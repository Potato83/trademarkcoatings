<!-- CONTACT -->
<section id="contact">
<a name="contact" class="anchor"></a>	
	<div id="contact-container">
		<div class="spacer"></div>
		<div class="col-sm-8 col-sm-offset-2">
			<h2>Contact</h2>
			<p class="lead">Use the form below to send us a message. We'll get back to you as soon as possible.</p>
		</div>
		
		<?php while ( have_posts() ) : the_post(); ?>
							
				<?php the_content(); ?>
							
		<?php endwhile; // end of the loop ?>

	</div>
</section><!-- contact