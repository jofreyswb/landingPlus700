  <?php
/**
 * File header.php
 *
 *
 * Template Name: Page_proba_new
 * @package landingPlus700
 * @since landingPlus700  1.0
 */
?>
<?php get_header(); ?>

<div class="main-heading">
    <h1 class="site-title"><?php the_title(); ?></h1>
</div>

<section>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>    <!-- end main-heading -->
<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
                <?php comments_template( '', true ); ?>
            <?php endwhile; // end of the loop. ?>



        <header class="entry-header">
						<!-- Если это запись -->
						<?php if ( is_single() || is_sticky() ) : ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php else : ?>
						<h1 class="entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?></a>
						</h1>
						<?php endif; ?>

						<?php echo get_the_category_list(); ?>
						<?php echo get_the_tag_list('', ', ');?>

					</header><!-- .entry-header -->
                    <?php if ( is_search() ) : // Показывать только краткое описание записи, если это результаты поиска?>
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->
					<?php else : ?>
					<div class="entry-content">
						<?php the_content( __( 'Читатать дальше.. <span class="meta-nav">></span>') ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Страницы:'), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
					<?php endif; ?>
<?php get_footer(); ?>