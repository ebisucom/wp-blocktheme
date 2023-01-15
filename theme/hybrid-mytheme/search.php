<?php get_header(); ?>

<main class="is-layout-flow">
	<div class="mainTitle is-layout-constrained has-global-padding">
		<h1 class="alignwide has-text-align-center">
			検索結果: <?php echo esc_html( get_search_query() ); ?>
		</h1>
	</div>

	<div class="mainBody is-layout-constrained has-global-padding">
	<?php block_template_part( 'search' ); ?>
		<?php block_template_part( 'posts' ); ?>
	</div>
</main>

<?php get_footer(); ?>