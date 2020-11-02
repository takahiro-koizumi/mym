<?php
/**
* Top slider section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$slider_speed = get_theme_mod( 'slider_speed', 4000 );
	$slider_animation = get_theme_mod( 'slider_animation', 'fade' );
	$slider_controls = get_theme_mod( 'slider_controls', '' );
	$slider_pager = get_theme_mod( 'slider_pager', '' );
	$slider_auto = get_theme_mod( 'slider_auto', '' );
	$slider_text_stop = get_theme_mod( 'slider_text_stop', '' );
	if ( !$slider_text_stop ) { $slider_text_toggle = true; } else { $slider_text_toggle = false; }
	$slider_text_animation = get_theme_mod( 'slider_text_animation', 'fade' );
	$slider_text_speed = get_theme_mod( 'slider_text_speed', 4000 );
	$slider_image_responsive = get_theme_mod( 'slider_image_responsive', '' );
	$images_pc = array(
		'slider_image_1' => get_theme_mod( 'slider_image_1',  get_theme_file_uri() . '/lib/images/emanon-header-img.jpg' ),
		'slider_image_2' => get_theme_mod( 'slider_image_2', '' ),
		'slider_image_3' => get_theme_mod( 'slider_image_3', '' ),
		'slider_image_4' => get_theme_mod( 'slider_image_4', '' ),
		'slider_image_5' => get_theme_mod( 'slider_image_5', '' ),
	);
	$slider_image_sp_1 = get_theme_mod( 'slider_image_sp_1', '' );
	$images_sp = array(
		'slider_image_sp_1' => get_theme_mod( 'slider_image_sp_1', '' ),
		'slider_image_sp_2' => get_theme_mod( 'slider_image_sp_2', '' ),
		'slider_image_sp_3' => get_theme_mod( 'slider_image_sp_3', '' ),
		'slider_image_sp_4' => get_theme_mod( 'slider_image_sp_4', '' ),
		'slider_image_sp_5' => get_theme_mod( 'slider_image_sp_5', '' ),
	);
	if ( is_mobile() && $slider_image_sp_1 ) {
		$images = $images_sp;
	} else {
		$images = $images_pc;
	}

	$slider_btn_url = get_theme_mod( 'slider_btn_url', '' );
	$slider_btn_text = get_theme_mod( 'slider_btn_text', '' );

	$setting_background_url = get_theme_mod( 'setting_background_url', '' );

?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--slider-->
<div class="slider">

	<!--slider image-->
	<ul id="bxslider" data-auto="<?php echo esc_attr( $slider_auto ); ?>" data-animation="<?php echo esc_attr( $slider_animation ) ; ?>" data-speed="<?php echo esc_attr( $slider_speed ); ?>" data-pager="<?php echo esc_attr( $slider_pager ); ?>" data-controls="<?php echo esc_attr( $slider_controls) ; ?>">
	<?php
		$c = 1;
		foreach ( $images as $image ):
		$slider_background_url = get_theme_mod( 'slider_background_url_'.$c );
		$slider_title          = get_theme_mod( 'slider_title_'.$c );
		$slider_sub_title      = get_theme_mod( 'slider_sub_title_'.$c );
	?>
	<?php if ( $image ): ?>
		<?php if ( $slider_image_responsive ): ?>
			<li>
			<?php if ( $setting_background_url && $slider_background_url ) { echo '<a href="' . $slider_background_url . '">'; } ?>
				<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_html( $slider_title ); ?>" />
				<?php if ( $slider_title || $slider_sub_title || $slider_btn_url ): ?>
				<div class="slider-message">
					<?php if ( $slider_title || $slider_sub_title ): ?>
					<div class="slider-message-inner">
					<h2 class="slider-title"><?php echo nl2br( esc_html( $slider_title ) ); ?></h2>
					<p class="slider-sub-title"><?php echo nl2br( esc_html( $slider_sub_title ) ); ?></p>
					</div>
					<?php endif; ?>
					<!--cta btn-->
					<?php if ( $slider_btn_url && ! $setting_background_url ): ?>
					<div class="slider-btn">
						<span class="btn btn-sm slider-btn-bg"><a href="<?php echo esc_url( $slider_btn_url ); ?>"><?php echo esc_html( $slider_btn_text ); ?></a></span>
					</div>
					<?php endif; ?>
					<!--end cta btn-->
				</div>
				<?php endif; ?>
			<?php if ( $setting_background_url && $slider_background_url ) { echo '</a>'; } ?>
			</li>
		<?php else: ?>
			<?php if ( $setting_background_url && $slider_background_url ) { echo '<a href="' . $slider_background_url . '">'; } ?>
			<li style="background-image:url(<?php echo esc_url( $image ); ?>);">
			<?php if ( $slider_title || $slider_sub_title || $slider_btn_url ): ?>
			<div class="slider-message">
				<?php if ( $slider_title || $slider_sub_title ): ?>
				<div class="slider-message-inner">
					<h2 class="slider-title"><?php echo nl2br( esc_html( $slider_title ) ); ?></h2>
					<p class="slider-sub-title"><?php echo nl2br( esc_html( $slider_sub_title ) ); ?></p>
				</div>
				<?php endif; ?>
				<!--cta btn-->
				<?php if ( $slider_btn_url && ! $setting_background_url ): ?>
				<div class="slider-btn">
					<span class="btn btn-sm slider-btn-bg"><a href="<?php echo esc_url( $slider_btn_url ); ?>"><?php echo esc_html( $slider_btn_text ); ?></a></span>
				</div>
				<?php endif; ?>
				<!--end cta btn-->
			</div>
			<?php endif; ?>

			</li>
			<?php if ( $setting_background_url && $slider_background_url ) { echo '</a>'; } ?>
		<?php endif; ?>
	<?php endif; ?>
	<?php
		$c++;
		endforeach;
	?>
	</ul>

	<div class="loading-wrapper">
		<div class="loader display-none"></div>
	</div>

</div>
<!--end slider-->
<?php endif; ?>