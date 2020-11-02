<?php
/**
* Template Name: フロントページ（固定ページ+記事一覧）
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 2.0.2
*/

get_header(); ?>

<?php emanon_firstview(); ?>

<?php // 固定ページレイアウトの表示判定
	$front_layout_type = get_theme_mod( 'front_sidebar_layout', 'right_sidebar' );
	
	if ( $front_layout_type == 'right_sidebar') {
		get_template_part( 'blog-templates/front-page/front-right-sidebar-content' );
	}
	if ( $front_layout_type == 'left_sidebar' ) {
		get_template_part( 'blog-templates/front-page/front-left-sidebar-content' );
	}
	if ( $front_layout_type == 'no_sidebar' ) {
	 get_template_part( 'blog-templates/front-page/front-no-sidebar-content' );
	}
; ?>

<?php get_footer(); ?>