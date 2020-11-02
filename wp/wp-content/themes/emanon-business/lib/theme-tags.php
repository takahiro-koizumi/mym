<?php
/**
* Theme tags
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/

// Pop up CTA mobile［モーダルウィンドウ］
function emanon_cta_popup_modal_window_business() {
	$display_cta_popup_mobile = get_theme_mod( 'display_cta_popup_mobile', '' );
	$display_cta_popup_frontpage = get_theme_mod( 'display_cta_popup_frontpage', '' );
	$display_cta_popup_archive = get_theme_mod( 'display_cta_popup_archive', '' );
	$emanon_hide_popup_cta = post_custom( 'emanon_hide_popup_cta' );
	if ( $emanon_hide_popup_cta ) {
		$display_cta_popup_single = '';
	} else {
		$display_cta_popup_single = get_theme_mod( 'display_cta_popup_single', '' );
	}
	if ( $emanon_hide_popup_cta ) {
		$display_cta_popup_page = '';
	} else {
		$display_cta_popup_page = get_theme_mod( 'display_cta_popup_page', '' );
	}
	$cta_popup_mobile_icon = get_theme_file_uri() . '/lib/images/line.png';

	if ( $display_cta_popup_mobile && wp_is_mobile() && !is_404() ) {
		if ( $display_cta_popup_frontpage && is_home() || $display_cta_popup_frontpage && is_front_page() || $display_cta_popup_single && is_single() || $display_cta_popup_page && is_page() || $display_cta_popup_archive	&& is_archive() ) {
		echo '<div class="popup-btn-mobile wow fadeInRight" data-wow-delay="2.0s"><a href="#modal-cta-popup" data-remodal-target="modal-cta-popup"><img src="' . esc_url( $cta_popup_mobile_icon ) . '"></i></div>';
		}
	}
}

// ニュースティッカーセクションの表示
function emanon_business_newsticker_section() {
	$display_newsticker_section = get_theme_mod( 'display_newsticker_section', '' );
	if ( $display_newsticker_section ) {
		get_template_part( 'lib/modules/sections/section-newsticker' );
	}
}

// ソリューションセクションの表示
function emanon_business_solution_section() {
	$display_solution_section = get_theme_mod( 'display_solution_section', '' );
	if ( $display_solution_section ) {
		get_template_part( 'lib/modules/sections/section-solution' );
	}
}

// セールスセクションの表示
function emanon_business_sales_section() {
	$display_sales_section = get_theme_mod( 'display_sales_section', '' );
	if ( $display_sales_section ) {
		get_template_part( 'lib/modules/sections/section-sales' );
	}
}

// ベネフィットセクションの表示
function emanon_business_benefit_section() {
	$display_benefit_section = get_theme_mod( 'display_benefit_section', '' );
	if ( $display_benefit_section ) {
		get_template_part( 'lib/modules/sections/section-benefit' );
	}
}

// 事例セクションの表示
function emanon_business_case_section() {
	$display_case_section = get_theme_mod( 'display_case_section', '' );
	if ( $display_case_section ) {
		get_template_part( 'lib/modules/sections/section-case' );
	}
}

// プロダクトセクションの表示
function emanon_business_product_section() {
	$display_product_section = get_theme_mod( 'display_product_section', '' );
	if ( $display_product_section ) {
		get_template_part( 'lib/modules/sections/section-product' );
	}
}

// 料金セクションの表示
function emanon_business_price_table_section() {
	$display_price_table_section = get_theme_mod( 'display_price_table_section', '' );
	if ( $display_price_table_section ) {
		get_template_part( 'lib/modules/sections/section-price-table' );
	}
}

// インフォメーションセクションの表示
function emanon_business_info_section() {
	$display_info_section = get_theme_mod( 'display_info_section', '' );
	if ( $display_info_section ) {
		get_template_part( 'lib/modules/sections/section-info' );
	}
}

// インフォメーションセクションの日付表示
function emanon_info_meta() {
		echo '<div class=info-meta>' . "\n";
		echo '<span>' . esc_html( get_the_date() ) . '</span>' . "\n";
		echo '</div>' . "\n";
}

// Q&Aセクションの表示
function emanon_business_accordion_faq_section() {
	$display_accordion_faq_section = get_theme_mod( 'display_accordion_faq_section', '' );
	if ( $display_accordion_faq_section ) {
		get_template_part( 'lib/modules/sections/section-accordion-faq' );
	}
}

// フロントCTAの表示
function emanon_business_front_cta_section() {
	$display_front_cta_section = get_theme_mod( 'display_front_cta_section', 'no_display' );
	if ( $display_front_cta_section == 'tell' || $display_front_cta_section == 'mail' || $display_front_cta_section == 'tell_mail' ) {
		get_template_part( 'lib/modules/sections/section-front-cta');
	}
}

// カテゴリーセクションの表示
function emanon_business_category_section() {
	$display_category_section = get_theme_mod( 'display_category_section', '' );
	if ( $display_category_section ) {
		get_template_part( 'lib/modules/sections/section-category');
	}
}

// コンタクトフォームの表示
function emanon_contactform_section() {
	$display_contactfrom_section = get_theme_mod( 'display_contactfrom_section', '' );
	if ( $display_contactfrom_section ) {
		get_template_part( 'lib/modules/sections/section-contactform');
	}
}
