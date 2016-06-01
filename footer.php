<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tmcoatings
 */

?>
				

	<!-- FOOTER -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		
			<p>&copy; <?php echo date('Y'); ?> Trademark Coatings &bull;
			Site by <a href="https://twitter.com/Sammy_Potato" target="_blank">Sammy_Potato</a></p>
		




	</footer><!-- #colophon -->

<?php wp_footer(); ?>

<!-- BOOTSTRAP CORE JAVASCRIPT
	 Placed at the end of the document so the pages
	 load faster!
================================================== -->

<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
