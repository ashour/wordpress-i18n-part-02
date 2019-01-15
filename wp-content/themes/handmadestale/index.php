<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<h1><?php esc_html_e('Latest Posts', 'handmadestale'); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
