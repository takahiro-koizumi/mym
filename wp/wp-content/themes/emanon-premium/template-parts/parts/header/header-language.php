<?php
/**
 * Header language
 *
 * @since 1.0.0
 * @package Emanon Premium
 */
if( is_ssl() ) {
	$host = "https://";
} else {
	$host = "http://";
}
$root = str_replace( home_url('/'), "", $host.$_SERVER["HTTP_HOST"] );
$slug = get_emanon_current_slug();
?>

<ul class="language-panel">
	<?php for( $c=1; $c<6; $c++ ) {
		$locale = get_theme_mod( 'language_locale_'.$c );
		$directory = get_theme_mod( 'site_directory_'.$c , 'sub_directory' );
		$name = get_theme_mod( 'language_name_'.$c );
		if ( 'not_set' != $locale && 'sub_directory' === $directory ) {
			$url = $root .'/'. $locale .'/'. $slug;
		} elseif ( 'directory' === $directory ) {
			$url = $root .'/'. $slug;
		}
	?>
	<?php if ('not_set' != $locale && $name && $url ): ?>
	<li class="language-panel__item"><a href="<?php echo esc_url( $url ); ?>" aria-label="<?php echo esc_html( $name ); ?>ページ"><?php echo esc_html( $name ); ?></a></li>
	<?php endif; ?>
	<?php } ?>
	<?php
		$locale_6 = get_theme_mod( 'language_locale_6' );
		$directory_6 = get_theme_mod( 'site_directory_6', 'sub_directory' );
		$name_6 = get_theme_mod( 'language_name_6' );
		if ( $locale && 'sub_directory' === $directory_6 ) {
			$url_6 = $root .'/'. $locale_6 .'/'. $slug;
		} elseif ( 'directory' === $directory_6 ) {
			$url_6 = $root .'/'. $slug;
		}
	?>
	<?php if ( $locale_6 && $name_6 && $url_6 ): ?>
	<li class="language-panel__item"><a href="<?php echo esc_url( $url_6 ); ?>" aria-label="<?php echo esc_html( $name_6 ); ?>ページ"><?php echo esc_html( $name_6 ); ?></a></li>
	<?php endif; ?>
</ul><!--/.header-language-->