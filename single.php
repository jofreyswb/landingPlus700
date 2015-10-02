  <?php
/**
 * File header.php
 *
 * single of the site
 *
 * @package landingPlus700
 * @since landingPlus700  1.0
 */
?>
<?php get_header(); ?>


 <!-- Content -->

<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
<?php get_sidebar();?>
<section>
	<?php while (have_posts()): the_post();?>
		<?php the_content();?>
		<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		?>
	<?php endwhile; ?>
</section>
<!-- content -->

</div> <!-- end inCont -->



<?php get_footer(); ?>