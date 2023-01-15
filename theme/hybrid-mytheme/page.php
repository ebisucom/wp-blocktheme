<?php get_header(); ?>

<main class="is-layout-flow">
	<div class="mainTitle is-layout-constrained has-global-padding">
		<h1 class="alignwide has-text-align-center has-xx-large-font-size">
			<?php the_title(); ?>
		</h1>
	</div>

	<div class="mainBody is-layout-constrained has-global-padding wp-block-post-content">
		<?php the_content(); ?>
	</div>
</main>

<?php get_footer(); ?>