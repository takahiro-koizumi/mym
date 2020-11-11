<?php
/**
 * Template style general
 *
 * @since 1.0.0
 * @package Emanon Premium
 */

function emanon_style_general() {
	/*---root--*/
	$content_width = get_theme_mod( 'one_col_content_width', 780 );
	$root_css = '
		:root {
			--one-col-content-width: ' . $content_width . 'px;
		}
		';

	/*---button border radius--*/
	$button_border_radius_design = get_theme_mod( 'button_border_radius_design', 'standard-corner' );
	if ( 'standard-corner' === $button_border_radius_design ) {
		$button_border_radius = '3px';
	} elseif ( 'large-corner' === $button_border_radius_design ) {
		$button_border_radius = '25px';
	} elseif ( 'none-corner' === $button_border_radius_design ) {
		$button_border_radius = '0';
	}

	$button_css = '
		input[type="button"],
		input[type="submit"],
		.c-btn {
			border-radius: ' . $button_border_radius . ';
		}
		';

	/*---button hover animation--*/
	$button_hover_animation_design = get_theme_mod( 'button_hover_animation_design', 'transparen' );
	if ( 'transparen' === $button_hover_animation_design ) {
		$button_hover_css = '
		input[type="button"]:hover,
		input[type="submit"]:hover,
		.c-btn:hover {
			opacity: 0.8;
		}
		';
	} elseif ( 'corner' === $button_hover_animation_design ) {
		$button_hover_css = '
		input[type="button"]:hover,
		input[type="submit"]:hover,
		.c-btn:hover {
			border-radius: 25px;
		}
		';
	} elseif ( 'shadow' === $button_hover_animation_design ) {
		$button_hover_css = '
		.main-visual__btn {
			padding-bottom: 8px;
		}
		input[type="button"]:hover,
		input[type="submit"]:hover,
		.c-btn:hover {
			box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
		}
		';
	} elseif ( 'floating' === $button_hover_animation_design ) {
		$button_hover_css = '
		input[type="button"]:hover,
		input[type="submit"]:hover,
		.c-btn:hover {
			transform: translateY(-4px);
			box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.1);
		}
		';
	} elseif ( 'falldown' === $button_hover_animation_design ) {
		$button_hover_css = '
		input[type="button"]:hover,
		input[type="submit"]:hover,
		.c-btn:hover {
			transform: translateY(4px);
			box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.1);
		}
		';
	} elseif ( 'lustre' === $button_hover_animation_design ) {
		$button_hover_css = '
		.c-btn::before {
			content: "";
			position: absolute;
			top: -10%;
			left: -180%;
			width: 200%;
			height: 200%;
			background-color: rgba(249, 249, 249, 0.2);
			transform: rotate(-45deg);
		}
		.c-btn:hover::before {
			animation: lustre 0.7s forwards;
		}
		';
	} elseif ( 'none' === $button_hover_animation_design ) {
		$button_hover_css = '';
	}

	$html_minified = get_theme_mod( 'minified_html' );

	if ( $html_minified ) {
	$html_minified_css = '
		.wp-block-code {
			white-space: pre-wrap ;
		}
	';
	} else {
		$html_minified_css = '';
	}

	/*---one col content width--*/
	$content_width_css = '
	.one-col .l-content__main {
		width: 100%;
	}
	@media screen and ( min-width: 960px ) {
		.one-col .l-content__main {
			width: var(--one-col-content-width);
			margin-left: auto;
			margin-right: auto;
		}
		.one-col.share_sticky_col .l-content__main {
			width: calc(var(--one-col-content-width) - 80px);
		}
	}
	';

	$theme_css = $root_css . $html_minified_css . $button_css . $button_hover_css . $content_width_css;

	return apply_filters( 'emanon_style_general', emanon_css_minify( $theme_css ) );
}