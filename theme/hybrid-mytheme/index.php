<?php get_header(); ?>

<main class="is-layout-flow">
	<div class="mainTitle is-layout-constrained has-global-padding">
		<h1 class="alignwide has-text-align-center has-xx-large-font-size">
			<?php bloginfo( 'name' ); ?>
		</h1>
	</div>

	<div class="mainBody is-layout-constrained has-global-padding">
		<h2 class="alignwide has-text-align-center is-style-decoration-line">記事一覧</h2>
		<?php block_template_part( 'posts' ); ?>
	</div>
</main>

<?php get_footer(); ?>