<?php
/**
 * Template part for row layout in header.php
 *
 * @since 1.0.0
 * @package Emanon Premium
 */

$width        = get_theme_mod( 'header_content_inner_width', 'normal' );
$display_tel  = get_theme_mod( 'display_header_tel' );
$sns_layout   = get_theme_mod( 'header_sns_layout', 'display_none' );
$hamburger_sp = get_theme_mod( 'display_hamburger_menu_sp' );
$hamburger_pc = get_theme_mod( 'display_hamburger_menu_pc' );
$language     = get_theme_mod( 'display_header_language_' . DEVICE );
$search       = get_theme_mod( 'display_header_search_form_' . DEVICE );
$cta          = get_theme_mod( 'display_header_cta_' . DEVICE );
?>

<header class="l-header">
	<div class="l-header-row">
		<div class="l-content<?php if ( 'full' === $width ) { ?>__fluid<?php } ?>">
			<?php
				if ( $display_tel || 'display_none' !== $sns_layout ) {
					get_template_part( 'template-parts/parts/header/header-info' );
				}
			?>
			<div class="l-header__inner">
			<?php
				if ( has_nav_menu( 'drawer-menu-sp' ) && $hamburger_sp || has_nav_menu( 'drawer-menu-pc' ) && $hamburger_pc ) {
					get_template_part( 'template-parts/parts/header/hamburger-menu' );
				}
				get_template_part( 'template-parts/parts/header/site-branding' );
			?>
			<?php if ( has_nav_menu( 'header-menu' ) ): ?>
			<div class="header-menu-row<?php if ( $language || $search || $cta ) { ?> header-menu-last-child<?php } ?> u-display-pc u-row-flex-grow-1">
				<div class="u-row u-row-item-center u-row-cont-end">
				<?php wp_nav_menu( array ( 'theme_location' => 'header-menu', 'fallback_cb' => '', 'container' => 'nav', 'items_wrap' => '<ul class="header-menu u-row u-row-item-center">%3$s</ul>' ) ); ?>
				</div><!--/.u-row .u-row-item-center-->
			</div><!--/.header-menu-row-->
			<?php endif; ?>
			<?php
				if ( $language || $search || $cta ) {
					get_template_part( 'template-parts/parts/header/header-cta' );
				}
			?>
			</div><!--/.l-header__inner-->
		</div><!--/.l-content-->
		<?php
			if ( $language || $search || $cta ) {
				get_template_part( 'template-parts/parts/header/header-panel' );
			}
		?>
	</div><!--/.l-header-row-->
	<?php
		if ( has_nav_menu( 'header-menu-drop' ) ) {
			get_template_part( 'template-parts/layout/header/header-menu-drop' );
		}
	?>
</header>