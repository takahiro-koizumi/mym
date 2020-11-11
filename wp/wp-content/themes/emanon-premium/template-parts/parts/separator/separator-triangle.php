<?php
/**
 * Separator triangle
 *
 * @since 1.0.0
 * @package Emanon Premium
 */

$layout = get_theme_mod( 'firstview_layout_type', 'display_none' );
if ( 'header_eyecatch'             === $layout ) {
	$separator_color = get_theme_mod( 'header_eyecatch_separator_color', '#eeeff0' );
} elseif ( 'header_image_slider'   === $layout ) {
	$separator_color = get_theme_mod( 'header_image_slider_separator_color', '#eeeff0' );
} elseif ( 'header_content_slider' === $layout ) {
	$separator_color = get_theme_mod( 'header_content_slider_separator_color', '#eeeff0' );
}
?>

<svg class="separator-section-triangle" style="fill: <?php echo esc_attr( $separator_color ); ?>;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 50" preserveAspectRatio="none">
	<path d="M 0 0 H 960 V 40 Z M 1920 0 H 960 V 40 Z"></path>
</svg><!--/.separator-section-triangle-->