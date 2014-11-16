<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<?php the_content('Read more...'); ?>
			</div>
		<?php endwhile; ?>
		<?php if(function_exists('wp_pagenavi')){wp_pagenavi();} ?>

	<?php else : ?>
		<div class="post">
			<h1>Oops!</h1>
			<p>The page you are trying to reach doesn't appear to exist.</p>
		</div>
		<?php endif; ?>
</div>

<?php get_footer(); ?>