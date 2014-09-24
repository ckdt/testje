<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

<?php else : ?>

	<div class="alert alert-warning">
		<?php _e('Sorry, no results were found.', 'jumpstart'); ?>
	</div>

<?php endif; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav class="post-nav">
		<ul class="pager">
			<li class="previous"><?php next_posts_link( __( '&larr; Older posts', 'jumpstart' ) ); ?></li>
			<li class="next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'jumpstart' ) ); ?></li>
		</ul>
	</nav>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>