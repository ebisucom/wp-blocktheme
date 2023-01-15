<?php
/**
 * Title: トップページを元にした雛形
 * Slug: mytheme/create-home
 * Categories: mypagebase
 * Block types: core/post-content
 * Post types: page
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0px","bottom":"var:preset|spacing|70"}},"color":{"gradient":"linear-gradient(155deg,rgba(0,0,0,0) 48%,rgba(0,0,0,0.06) 48%)"}},"layout":{"type":"constrained","contentSize":"980px","wideSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(155deg,rgba(0,0,0,0) 48%,rgba(0,0,0,0.06) 48%);padding-top:0px;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","className":"is-style-reverse"} -->
<div class="wp-block-columns alignwide is-style-reverse"><!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:paragraph -->
<p>旅に思いを馳せる</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<h1 style="margin-top:var(--wp--preset--spacing--50)">Travel Times</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">ここからどこかに出かけよう。知らない街へ、海へ、山へ<br>見知らぬ美味しいものに出会いに。</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button">旅を計画する</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"dark-gray","className":"is-style-scroll-down","fontFamily":"josefin-sans"} -->
<p class="is-style-scroll-down has-dark-gray-color has-text-color has-josefin-sans-font-family">Scroll</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/ancient.jpg' ) ); ?>","id":589,"dimRatio":0,"minHeight":570,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:570px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-589" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ancient.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"タイトルを入力...","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.8"},"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} -->
<h2 class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--80);font-style:normal;font-weight:400;line-height:1.8">身近な旅から遠くの旅まで<br>ここから、いつでも、どこへでも</h2>
<!-- /wp:heading -->

<!-- wp:image {"align":"center","id":660,"width":500,"height":262,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stamp.png' ) ); ?>" alt="" class="wp-image-660" width="500" height="262"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0px","bottom":"var:preset|spacing|70"},"margin":{"top":"0px"}},"color":{"gradient":"linear-gradient(20deg,rgba(0,0,0,0) 48%,rgba(0,0,0,0.06) 48%)"}},"layout":{"type":"constrained","contentSize":"980px","wideSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(20deg,rgba(0,0,0,0) 48%,rgba(0,0,0,0.06) 48%);margin-top:0px;padding-top:0px;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":0,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"250px"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<p class="has-text-align-right has-link-color"><a href="<?php echo esc_url( home_url() ); ?>/blog/" data-type="page" data-id="577">View More »</a></p>
<!-- /wp:paragraph -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"クエリが結果を返さない場合に表示するテキスト、またはブロックを追加してください。"} -->
<p>該当する記事がありません</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->