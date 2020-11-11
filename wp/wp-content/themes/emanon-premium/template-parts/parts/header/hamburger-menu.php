<?php
/**
 * Hamburger menu
 *
 * @since 1.0.0
 * @package Emanon Premium
 */

$menu          = get_theme_mod( 'hamburger_menu_label', __( 'Menu', 'emanon-premium' ) );
$menu_label_sp = get_theme_mod( 'display_hamburger_menu_label_sp' );
if ( $menu_label_sp ) {
	$class_menu_label = 'u-display-block ';
} else {
	$class_menu_label = 'u-display-pc ';
}
$hamburger_sp = get_theme_mod( 'display_hamburger_menu_sp' );
$hamburger_pc = get_theme_mod( 'display_hamburger_menu_pc' );
if ( $hamburger_sp && ! $hamburger_pc ) {
	$class_hamburger = 'u-display-sp u-display-tablet';
} elseif ( ! $hamburger_sp && $hamburger_pc ) {
	$class_hamburger = 'u-display-pc';
} elseif ( $hamburger_sp && $hamburger_pc ) {
	$class_hamburger = 'u-display-block';
} else {
	$class_hamburger = 'u-display-none';
}
?>

<button class="js-hamburger-menu hamburger-menu <?php echo esc_attr( $class_hamburger ); ?>" aria-label="ハンバーガーメニュー">
	<a class="hamburger-menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</a>
	<?php if ( $menu ): ?>
		<span class="<?php echo esc_attr( $class_menu_label ); ?>hamburger-menu-label"><?php echo esc_html( $menu ); ?></span>
	<?php endif; ?>
</button><!--/#js-hamburger-menu-->