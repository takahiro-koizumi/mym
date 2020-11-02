<?php
/**
* Theme customizer
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/

/*------------------------------------------------------------------------------------
/* Customize Register
/*----------------------------------------------------------------------------------*/
	add_action( 'customize_register', 'emanon_customize_register' );
	function emanon_customize_register( $wp_customize ) {

		$wp_customize->get_section( 'colors' )->panel = 'emanon_general_settings';
		$wp_customize->get_section( 'colors' )->priority = '10';
		$wp_customize->get_section( 'background_image' )->panel = 'emanon_general_settings';
		$wp_customize->get_section( 'background_image' )->priority = '10';
		$wp_customize->get_section( 'header_image' )->panel = 'emanon_landing_page_settings';
		$wp_customize->get_section( 'header_image' )->priority = '1';

		/* General Panel */
		require_once get_template_directory() . '/lib/customizer-panels/general-panel.php';

		/* Header Panel */
		require_once get_template_directory() . '/lib/customizer-panels/header-panel.php';

		/* Content Panel */
		require_once get_template_directory() . '/lib/customizer-panels/content-panel.php';

		/* Footer Panel */
		require_once get_template_directory() . '/lib/customizer-panels/footer-panel.php';

		/* Front Page Panel */
		require_once get_template_directory() . '/lib/customizer-panels/front-page-panel.php';

		/* Template Panel */
		require_once get_template_directory() . '/lib/customizer-panels/template-panel.php';

		/* CTA Panel */
		require_once get_template_directory() . '/lib/customizer-panels/cta-panel.php';

		/* Landing Panel */
		require_once get_template_directory() . '/lib/customizer-panels/landing-page-panel.php';

		/* AD Panel */
		require_once get_template_directory() . '/lib/customizer-panels/ad-panel.php';

		/* Page Speed Panel */
		require_once get_template_directory() . '/lib/customizer-panels/page-speed-panel.php';
}

/*------------------------------------------------------------------------------------
/* Text Control
/*----------------------------------------------------------------------------------*/
	if( class_exists( 'WP_Customize_Control' ) ):
		class Customize_Textarea_Control extends WP_Customize_Control {
			public $type = 'textarea';
			public function render_content() {
				?>
				<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
				</label>
				<?php
			}
		}
	endif;

/*------------------------------------------------------------------------------------
/* Sanitize
/*----------------------------------------------------------------------------------*/
	function emanon_customize_sanitize_checkbox( $input ) {
	if ( $input == true ) {
		return true;
		} else {
		return '';
		}
	}

	function emanon_customize_sanitize_text( $input ) {
		$input = wp_kses_post( $input );
		return $input;
	}

	function emanon_customize_sanitize_textarea( $input ) {
		$input = stripslashes( wp_filter_post_kses( addslashes( $input ) ) );
		return $input;
		}

	function emanon_customize_sanitize_number( $input ) {
		$input = absint( $input );
		return $input;
		}

	function emanon_customize_sanitize_email( $input ) {
		if( is_email( $input ) ){
		return $input;
		} else {
			return '';
		}
	}

	function emanon_customize_sanitize_colorcode( $input ) {
		if ( preg_match( '/^#([\da-fA-F]{6}|[\da-fA-F]{3})$/', $input ) ) {
		return $input;
		} else {
			return '';
		}
	}

	function emanon_customize_integer( $input ) {
		if( is_numeric( $input ) ) {
				return intval( $input );
		}
	}

	function emanon_customize_sanitize_color_scheme( $input ) {
		$valid = array(
					'#161616,#777,#aaa'		 => __( 'Color scheme of black', 'emanon' ),
					'#d2d5d9,#7c899a,#acb4bf' => __( 'Color scheme of gray', 'emanon' ),
					'#ed5058,#eeb043,#eeb043' => __( 'Color scheme of red', 'emanon' ),
					'#ffab11,#f25800,#ff8037' => __( 'Color scheme of orange', 'emanon' ),
					'#ff8cb2,#914a8d,#b977b5' => __( 'Color scheme of pink', 'emanon' ),
					'#00b7e0,#6c819a,#9eacbc' => __( 'Color scheme of blue', 'emanon' ),
					'#a8e798,#4cd1db,#76dce4' => __( 'Color scheme of green', 'emanon' ),
					'#957dc6,#c4b0a4,#d1c3b9' => __( 'Color scheme of purple', 'emanon' ),
		);

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
			} else {
			return '';
			}
		}

	function emanon_customize_sanitize_twitter_card_type( $input ) {
		if( $input == 'summary' || $input == 'summary_large_image' ) {
		return $input;
		} else {
			return 'summary';
		}
	}

	function emanon_customize_sanitize_header_layout_type( $input ) {
		if( $input == 'header-default' || $input == 'header-center' || $input == 'header-line' ) {
		return $input;
		} else {
			return 'header-default';
		}
	}

	function emanon_customize_sanitize_header_tagline_position_type( $input ) {
		if( $input == 'upper-left' || $input == 'logo-under' || $input == 'no-display' ) {
		return $input;
		} else {
			return 'upper-left';
		}
	}

	function emanon_customize_sanitize_header_cta_btn_type( $input ) {
		if( $input == 'tel' || $input == 'mail' || $input == 'tel_mail' || $input == 'no_display' ) {
		return $input;
		} else {
			return 'tel';
		}
	}

	function emanon_customize_sanitize_global_nav_design_type( $input ) {
		if( $input == 'default' || $input == 'tracking' ) {
		return $input;
		} else {
			return 'default';
		}
	}

	function emanon_customize_sanitize_firstview_layout_type( $input ) {
		if( $input == 'slider' || $input == 'slider-content' || $input == 'featured' || $input == 'pagebox' || $input == 'video' || $input == 'eyecatch'|| $input == 'no_display' ) {
		return $input;
		} else {
			return 'no_display';
		}
	}

	function emanon_customize_sanitize_slider_animation_type( $input ) {
		if( $input == 'fade' || $input == 'horizontal' ) {
		return $input;
		} else {
			return 'fade';
		}
	}

	function emanon_customize_sanitize_slider_text_animation_type( $input ) {
		if( $input == 'fade' || $input == 'slide' ) {
		return $input;
		} else {
			return 'fade';
		}
	}

	function emanon_customize_sanitize_header_message_layout_type( $input ) {
		if( $input == 'header_message_left' || $input == 'header_message_center' || $input == 'header_message_right' ) {
		return $input;
		} else {
			return 'header_message_center';
		}
	}

	function emanon_customize_sanitize_slider_message_layout_type( $input ) {
		if( $input == 'slider_message_left' || $input == 'slider_message_center' || $input == 'slider_message_right') {
		return $input;
		} else {
			return 'slider_message_center';
		}
	}

	function emanon_customize_sanitize_overlay_pattern_type( $input ) {
		if( $input == 'pattern_dots' || $input == 'pattern_diamond' || $input == 'pattern_none' ) {
		return $input;
		} else {
			return 'pattern_none';
		}
	}

	function emanon_customize_sanitize_slider_content_display_type( $input ) {
		if( $input == 'featured' || $input == 'new_arrivals' || $input == 'category' ) {
		return $input;
		} else {
			return 'featured';
		}
	}

	function emanon_customize_sanitize_featured_article_type( $input ) {
		if( $input == 'post' || $input == 'page' ) {
		return $input;
		} else {
			return 'post';
		}
	}

	function emanon_customize_sanitize_featured_display_type( $input ) {
		if( $input == 'featured' || $input == 'new_arrivals' ) {
		return $input;
		} else {
			return 'featured';
		}
	}

	function emanon_customize_sanitize_header_video_type( $input ) {
		if( $input == 'mp4' || $input == 'youtube' ) {
		return $input;
		} else {
			return 'mp4';
		}
	}

	function emanon_customize_sanitize_rangeslider( $input ) {
	if ( is_numeric( $input ) && $input >= 0 && $input <= 1 ) {
	return $input ;
		} else {
			return '';
		}
	}

	function emanon_customize_breadcrumb_home_name_type( $input ) {
		if( $input == 'site_title' || $input == 'home' ) {
		return $input;
		} else {
			return 'site_title';
		}
	}

	function emanon_customize_sanitize_read_more( $input ) {
		if( $input == 'read_more' || $input == 'read_more_post_title' ) {
		return $input;
		} else {
			return 'read_more';
		}
	}

	function emanon_customize_sanitize_sidebar_layout_type( $input ) {
		if( $input == 'right_sidebar' || $input == 'left_sidebar' || $input == 'no_sidebar' ) {
		return $input;
		} else {
			return 'right_sidebar';
		}
	}

	function emanon_customize_sanitize_entry_layout_type( $input ) {
		if( $input == 'one_column' || $input == 'two_column' || $input == 'three_column' || $input == 'big_column' ) {
		return $input;
		} else {
			return 'one_column';
		}
	}

	function emanon_customize_sanitize_thumbnail_layout_type( $input ) {
		if( $input == 'wide' || $input == 'normal' || $input == 'no_display' ) {
		return $input;
		} else {
			return 'wide';
		}
	}

	function emanon_customize_sanitize_list_layout_type( $input ) {
		if( $input == 'one_column' || $input == 'two_column' || $input == 'three_column' ) {
		return $input;
		} else {
			return 'one_column';
		}
	}

	function emanon_customize_sanitize_select_category( $input ) {
		if ( !in_array( $input, array( 'Uncategorized','category_slider' ) ) )
		 return $input;
	}

	function emanon_customize_sanitize_cta_post_layout_type( $input ) {
		if( $input == 'cta_post_left' || $input == 'cta_post_center' || $input == 'cta_post_right') {
		return $input;
		} else {
			return 'cta_post_left';
		}
	}

	function emanon_customize_sanitize_cta_popup_layout_type( $input ) {
		if( $input == 'cta_popup_left' || $input == 'cta_popup_center' || $input == 'cta_popup_right' ) {
		return $input;
		} else {
			return 'cta_popup_left';
		}
	}

	function emanon_customize_sanitize_cta_landing_page_layout_type( $input ) {
		if( $input == 'cta_landing_page_left' || $input == 'cta_landing_page_center' || $input == 'cta_landing_page_right' ) {
		return $input;
		} else {
			return 'cta_landing_page_left';
		}
	}

	function emanon_customize_sanitize_sns_layout_type( $input ) {
		if( $input == 'no_count' || $input == 'count' ) {
		return $input;
		} else {
			return 'no_count';
		}
	}

	function emanon_customize_sanitize_h_style( $input ) {
		if( $input == 'none' || $input == 'background' || $input == 'balloon' || $input == 'border-left' || $input == 'border-left-background' || $input == 'border-left-bottom' || $input == 'border-bottom' || $input == 'border-bottom-two' || $input == 'border-left-background-stripe' || $input == 'border-top-bottom-stripe' ) {
		return $input;
		} else {
			return 'border-left-background';
		}
	}

	function emanon_customize_sanitize_tab_1( $input ) {
		if( $input == 'tab_new_arrivals' || $input == 'tab_category_1' || $input == 'tab_featured_1' ) {
		return $input;
		} else {
			return 'tab_new_arrivals';
		}
	}

	function emanon_customize_sanitize_related_post_style( $input ) {
		if( $input == 'display_two_row' || $input == 'display_three_row' ) {
		return $input;
		} else {
			return 'display_two_row';
		}
	}

	function emanon_customize_sanitize_related_post_sp_style( $input ) {
		if( $input == 'display_related_list' || $input == 'display_related_card' ) {
		return $input;
		} else {
			return 'display_related_list';
		}
	}

	function emanon_customize_sanitize_cta_popup_position_type( $input ) {
		if( $input == 'right' || $input == 'left' ) {
		return $input;
		} else {
			return 'right';
		}
	}

	function emanon_customize_sanitize_facebook_messenger_position_type( $input ) {
		if( $input == 'right' || $input == 'left' ) {
		return $input;
		} else {
			return 'right';
		}
	}

	function emanon_customize_sanitize_mobile_footer_btn_style( $input ) {
		if( $input == 'display' || $input == 'display_no_share_button' ) {
		return $input;
		} else {
			return 'display';
		}
	}

	function emanon_customize_sanitize_lp_header_cta_type( $input ) {
		if( $input == 'default' || $input == 'tracking' ) {
		return $input;
		} else {
			return 'default';
		}
	}

	function emanon_customize_sanitize_lp_cta_btn_type( $input ) {
		if( $input == 'mail' || $input == 'tel' || $input == 'tel_mail' ) {
		return $input;
		} else {
			return 'mail';
		}
	}

	function emanon_customize_sanitize_empathy_layout_type( $input ) {
		if( $input == 'default' || $input == 'image' ) {
		return $input;
		} else {
			return 'default';
		}
	}

	function emanon_customize_sanitize_postscript_layout_type( $input ) {
		if( $input == 'postscript_right' || $input == 'postscript_center' || $input == 'postscript_left' ) {
		return $input;
		} else {
			return 'postscript_right';
		}
	}

	function emanon_no_sanitize( $input ) {
		return $input;
	}
