<?php get_header(); ?>

<div class="article container">
	<?php while ( have_posts() ) : the_post(); ?>

		<h2 class="inner_title"><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>
