<?php get_header(); ?>

<main class="container mx-auto py-12">

	<h1 class="text-4xl font-bold mb-10">Productos</h1>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<article class="mb-10">
				<?php the_post_thumbnail('medium'); ?>
				<?php the_title('<h2 class="text-2xl mt-4">', '</h2>'); ?>
				<?php the_excerpt(); ?>
			</article>

		<?php endwhile; ?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
