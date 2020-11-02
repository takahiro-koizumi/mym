<?php
/**
* Ad matched content
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 20.08
*/
?>
<aside>
	<div class="ad-matched-content wow fadeIn" data-wow-delay="0.2s">
<?php
	if( is_active_sidebar( 'ad-matched-content' ) ) {
		dynamic_sidebar( 'ad-matched-content' );
	} else {
		echo '<p class="no-code">' . __( 'Ad code has not been entered in the widget.', 'emanon' ) . '</p>' . "\n";
	}
?>
	</div>
</aside>