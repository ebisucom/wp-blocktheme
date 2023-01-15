<?php
/**
 * Title: 並びをずらした組写真
 * Slug: mytheme/photos
 * Categories: mytheme
 * Block types: core/image, core/cover
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/decoration.png' ) ); ?>","id":10,"dimRatio":0,"focalPoint":{"x":0.74,"y":1},"isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/decoration.png' ) ); ?>" style="object-position:74% 100%" data-object-fit="cover" data-object-position="74% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"id":12,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waterfront-blue.jpg' ) ); ?>" alt="" class="wp-image-12"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waterfront-cat.jpg' ) ); ?>" alt="" class="wp-image-13"/><figcaption class="wp-element-caption">昼どきの街並み</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:image {"id":8,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waterfront-flower.jpg' ) ); ?>" alt="" class="wp-image-8"/><figcaption class="wp-element-caption">路地裏の日常</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->