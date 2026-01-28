<?php
/**
 * Template Name: Página de Productos
 */

get_header();
?>

<main class="container mx-auto py-12">

	<h1 class="text-4xl font-bold mb-8">
		<?php the_title(); ?>
	</h1>

	<?php
	$query = new WP_Query([
		'post_type'      => 'producto',
		'posts_per_page' => 6
	]);

	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();
			?>

			<article class="mb-10 border-b pb-6">
				<?php the_post_thumbnail('medium'); ?>
				<?php the_title('<h2 class="text-2xl font-semibold mt-4">', '</h2>'); ?>
				<div class="prose">
					<?php the_content(); ?>
				</div>
			</article>

		<?php
		endwhile;
		wp_reset_postdata();
	else :
		echo '<p>No hay productos aún.</p>';
	endif;
	?>

</main>

<?php get_footer(); ?>
