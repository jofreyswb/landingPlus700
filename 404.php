 <?php
/**
 * File 404.php
 *
 *Error page
 *
 * @package landingPlus700
 * @since landingPlus700  1.0
 */
?>
<?php get_header(); ?>

<div class="main-heading">
    <h1 class="site-title"><?php the_title(); ?></h1>
</div>
<?php get_sidebar(); ?>
<section>
 <p><?php echo __('Страница не найдена', 'whitesquare'); ?></p>
</section>    <!-- end main-heading -->
<?php get_footer(); ?>