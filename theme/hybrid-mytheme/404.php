<?php get_header(); ?>

<main class="is-layout-flow">
	<div class="mainTitle is-layout-constrained has-global-padding">
		<h1 class="alignwide has-text-align-center has-xx-large-font-size">
			404
		</h1>
	</div>

	<div class="mainBody is-layout-constrained has-global-padding">
		<p class="has-text-align-center">ページが見つかりませんでした</p>
		<?php block_template_part( 'search' ); ?>
	</div>
</main>

<?php get_footer(); ?>