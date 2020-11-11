<?php
/**
 * The template for displaying sidebar request
 *
 * @since 1.0.0
 * @package Emanon Premium
 */

$css_bg     = post_custom( 'emanon_form_enable_css_bg' );
if ( $css_bg ) {
	$class_background = ' has-background';
} else {
	$class_background = '';
}
$title      = post_custom( 'emanon_form_title' );
$action     = post_custom( 'emanon_form_action' );
$hidden     = post_custom( 'emanon_input_hidden' );
$submit     = post_custom( 'emanon_input_submit' );
$short_code = post_custom( 'emanon_form_short_code' );
$javascript = post_custom( 'emanon_form_javascript' );
?>

<?php if( $title || $action || $short_code || $javascript ): ?>
<aside class="sidebar">
	<div id="js-sidebar-sticky" class="sidebar-request<?php echo esc_attr( $class_background ); ?>">
	<?php
		echo $action;
		echo $hidden;
	?>
	<?php if( $title ): ?>
		<h3><?php echo esc_html( $title ); ?></h3>
	<?php endif; ?>
	<?php for($c=1; $c<7; $c++) { ?>
		<?php
			$label    = post_custom( 'emanon_form_label_'.$c );
			$required = post_custom( 'emanon_required_item_'.$c );
			$tag      = post_custom( 'emanon_form_tag_'.$c );
		?>
	<?php if( $label ): ?>
		<dl>
			<dt><?php if ( $required ) { echo ' <span class="small strong warning-color">'. __( 'Required' , 'emanon-premium' ) .'</span>'; } ?><?php echo esc_html( $label ); ?></dt>
			<dd><?php echo ( $tag ); ?></dd>
		</dl>
		<?php endif; ?>
		<?php } ?>
		<?php if ( $submit ): ?>
			<div class="submit"><?php echo $submit; ?></div>
		<?php endif; ?>
		<?php if ( $short_code ): ?>
			<?php echo apply_shortcodes( $short_code ); ?>
		<?php endif; ?>
		<?php if ( $action ) { ?></form>
	<?php } ?>
	<?php if( $javascript ): ?>
		<?php echo $javascript ; ?>
	<?php endif; ?>
	</div>
</aside><!--.sidebar-->
<?php endif; ?>