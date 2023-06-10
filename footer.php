<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>


<footer class="site-footer" id="colophon" style="background:url( <?php echo get_stylesheet_directory_uri() . '/imgs/footer.png'; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">

	<div class="container">
		<div class="row footer-wrapper">
			<div class="col-md-6">
				<h4>QuickFunds</h4>
				<p>Our mission is to empower individuals and
					businesses by providing them with the
					financial resources they
					need to achieve their goals.</p>
			</div>
			<div class="col-md-3">
				<h4>OUR SERVICES</h4>
			</div>
			<div class="col-md-3">
				<h4>CONTACT US</h4>
			</div>
		</div>
	</div>

</footer><!-- #colophon -->

<?php // Closing div#page from header.php. 
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>