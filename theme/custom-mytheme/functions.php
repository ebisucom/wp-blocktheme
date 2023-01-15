<?php

function custom_mytheme_support() {

	// 親テーマのCSS（style.css）をエディターに読み込み
	add_editor_style( '../mytheme/style.css' );

	// 子テーマのCSS（style.css）をエディターに読み込み
	add_editor_style( 'style.css' );


}
add_action( 'after_setup_theme', 'custom_mytheme_support' );


function custom_mytheme_enqueue() {

	// 親テーマのCSS（style.css）をフロントに読み込み
	wp_enqueue_style( 
		'mytheme-style', 
		get_parent_theme_file_uri( 'style.css' ),
		array(),
		filemtime( get_parent_theme_file_path( 'style.css' ) )
	);

   	// 子テーマのCSS（style.css）をフロントに読み込み
	wp_enqueue_style( 
		'mytheme-child-style', 
		get_stylesheet_uri(),
		array( 'mytheme-style' ),
		filemtime( get_theme_file_path( 'style.css' ) )
	);

}
add_action( 'wp_enqueue_scripts', 'custom_mytheme_enqueue' );


function custom_mytheme_news() {

	//カスタム投稿タイプ
	register_post_type(
		'news', 
		array(
			'label' => 'お知らせ',
			'public' => true,
			'has_archive' => true,
			'show_in_rest' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			)
		)
	);

	// カスタムタクソノミー
	register_taxonomy(
		'newscategory',
		'news',
		array(
			'label' => 'お知らせカテゴリー',
			'hierarchical' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'show_in_rest' => true,
		)
	);

}
add_action( 'init', 'custom_mytheme_news' );

