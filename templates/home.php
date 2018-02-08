<?php
/**
 * Template name: Home
 */
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
    <div class="container">
  		<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
  		<?php endwhile; ?>
    </div>
	<?php endif; ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
