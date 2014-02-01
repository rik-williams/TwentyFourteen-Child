<?php
/*
 * テーマのCSSを読み込み
 */
function twentyfourteen_child_scripts() {
	// Twenty Fourteen用WEBフォント「Lato Web Font」読み込み
	wp_enqueue_style( 'twentyfourteen-lato', twentyfourteen_font_url(), array(), null );

	// Twenty Fourteen用アイコンフォント「Genericons」読み込み
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.2' );

	// Twenty Fourteen用メインスタイルシート読み込み
	wp_enqueue_style( 'twentyfourteen-style', get_template_directory_uri() . '/style.css', array( 'genericons' ) );

	// 子テーマ用メインスタイルシート読み込み
	wp_enqueue_style( 'twentyfourteen-child-style', get_stylesheet_uri(), array( 'twentyfourteen-style' ) );

	// Twenty Fourteen用IE向けスタイルシート読み込み
	wp_enqueue_style( 'twentyfourteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfourteen-child-style', 'genericons' ) );
	wp_style_add_data( 'twentyfourteen-ie', 'conditional', 'lt IE 9' );

	// 子テーマ用IE向けスタイルシート読み込み
	wp_enqueue_style( 'twentyfourteen-child-ie', get_stylesheet_directory_uri() . '/css/ie.css', array( 'twentyfourteen-ie' ) );
	wp_style_add_data( 'twentyfourteen-child-ie', 'conditional', 'lt IE 9' );

	// 子テーマ用スクリプトファイル読み込み
	wp_enqueue_script( 'twentyfourteen-child-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'twentyfourteen-script' ), true );

}
add_action( 'wp_enqueue_scripts', 'twentyfourteen_child_scripts' );



/*
 * 親テーマのfunctions.phpを書き換える
 */
function mytheme_setup() {

	/* ここにfunctionを記述すると親テーマのfunctionsの後に実行される */

}
add_action( 'after_setup_theme', 'mytheme_setup', 20 );