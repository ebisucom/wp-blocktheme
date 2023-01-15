<?php
/**
 * Title: アバウトページを元にした雛形
 * Slug: mytheme/create-page
 * Categories: mypagebase
 * Block types: core/post-content
 * Post types: page
 */
?>
<!-- wp:heading {"textAlign":"center","align":"wide","className":"is-style-decoration-line"} -->
<h2 class="alignwide has-text-align-center is-style-decoration-line">見出し</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト </p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"linkTo":"none","align":"wide"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-default is-cropped"><!-- wp:image {"id":17,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px"}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photo01.jpg' ) ); ?>" alt="" class="wp-image-17" style="border-top-left-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":14,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px"}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photo02.jpg' ) ); ?>" alt="" class="wp-image-14" style="border-top-left-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":15,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px"}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photo03.jpg' ) ); ?>" alt="" class="wp-image-15" style="border-top-left-radius:20px"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"0"},"border":{"width":"4px"}},"borderColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-border-color has-secondary-border-color" style="border-width:4px;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","textColor":"base"} -->
<h3 class="has-text-align-center has-base-color has-secondary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">見出し</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p>テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/travel-map.jpg' ) ); ?>","id":16,"dimRatio":80,"overlayColor":"secondary","align":"full"} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-16" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/travel-map.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"タイトルを入力...","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">身近な旅から遠くの旅まで<br>ここから、いつでも、どこへでも</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">旅を計画する</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->