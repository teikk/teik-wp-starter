<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article><?php the_excerpt(); ?></article>


		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
