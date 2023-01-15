<?php get_header(); ?>

<main class="is-layout-flow">
	<?php block_template_part( 'post-header' ); ?>

	<div class="mainBody is-layout-constrained has-global-padding wp-block-post-content">
		<?php the_content(); ?>
	</div>

	<?php block_template_part( 'post-footer' ); ?>
</main>

<?php get_footer(); ?>