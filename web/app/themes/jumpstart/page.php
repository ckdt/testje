<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class(); ?>>
	<header>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<?php get_template_part('entry-meta'); ?>
	</header>
	<div class="entry">
		<?php the_content(); ?>
	</div>
	<?php
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
	?>
</article>

<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>