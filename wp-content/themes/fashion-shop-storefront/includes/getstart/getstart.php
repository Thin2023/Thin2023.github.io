<?php
//about theme info
add_action( 'admin_menu', 'fashion_shop_storefront_gettingstarted' );
function fashion_shop_storefront_gettingstarted() {
	add_theme_page( esc_html__('Fashion Shop Storefront', 'fashion-shop-storefront'), esc_html__('Fashion Shop Storefront', 'fashion-shop-storefront'), 'edit_theme_options', 'fashion_shop_storefront_about', 'fashion_shop_storefront_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function fashion_shop_storefront_admin_theme_style() {
	wp_enqueue_style('fashion-shop-storefront-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('fashion-shop-storefront-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'fashion_shop_storefront_admin_theme_style');

// Changelog
if ( ! defined( 'FASHION_SHOP_STOREFRONT_CHANGELOG_URL' ) ) {
    define( 'FASHION_SHOP_STOREFRONT_CHANGELOG_URL', get_template_directory() . '/readme.txt' );
}

function fashion_shop_storefront_changelog_screen() {	
	global $wp_filesystem;
	$changelog_file = apply_filters( 'fashion_shop_storefront_changelog_file', FASHION_SHOP_STOREFRONT_CHANGELOG_URL );
	if ( $changelog_file && is_readable( $changelog_file ) ) {
		WP_Filesystem();
		$changelog = $wp_filesystem->get_contents( $changelog_file );
		$changelog_list = fashion_shop_storefront_parse_changelog( $changelog );
		echo wp_kses_post( $changelog_list );
	}
}

function fashion_shop_storefront_parse_changelog( $content ) {
	$content = explode ( '== ', $content );
	$changelog_isolated = '';
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}
	$changelog_array = explode( '= ', $changelog_isolated );
	unset( $changelog_array[0] );
	$changelog = '<div class="changelog">';
	foreach ( $changelog_array as $value) {
		$value = preg_replace( '/\n+/', '</span><span>', $value );
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div><hr>';
		$changelog .= str_replace( '<span></span>', '', $value );
	}
	$changelog .= '</div>';
	return wp_kses_post( $changelog );
}

//guidline for about theme
function fashion_shop_storefront_mostrar_guide() { 
	//custom function about theme customizer
	$fashion_shop_storefront_return = add_query_arg( array()) ;
	$fashion_shop_storefront_theme = wp_get_theme( 'fashion-shop-storefront' );
?>

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Fashion Shop Storefront', 'fashion-shop-storefront' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'fashion-shop-storefront' ); ?>: <?php echo esc_html($fashion_shop_storefront_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">

	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="fashion_shop_storefront_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'fashion-shop-storefront' ); ?></button>
				<button class="tablinks" onclick="fashion_shop_storefront_open_tab(event, 'wpelemento_importer_editor')"><?php esc_html_e( 'Demo Import', 'fashion-shop-storefront' ); ?></button>
				<button class="tablinks" onclick="fashion_shop_storefront_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'fashion-shop-storefront' ); ?></button>
			</div>

			<div id="setup_customizer" class="tabcontent open">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'fashion-shop-storefront'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'fashion-shop-storefront'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'fashion-shop-storefront'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Help Docs', 'fashion-shop-storefront'); ?></h3>
						<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'fashion-shop-storefront'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( FASHION_SHOP_STOREFRONT_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'fashion-shop-storefront'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'fashion-shop-storefront'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'fashion-shop-storefront'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( FASHION_SHOP_STOREFRONT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'fashion-shop-storefront'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'fashion-shop-storefront'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'fashion-shop-storefront'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( FASHION_SHOP_STOREFRONT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'fashion-shop-storefront'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'fashion-shop-storefront' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','fashion-shop-storefront'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','fashion-shop-storefront'); ?></a>
									</div>
								</div>
							
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','fashion-shop-storefront'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','fashion-shop-storefront'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="wpelemento_importer_editor" class="tabcontent">
				<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
					$plugin_ins = Fashion_Shop_Storefront_Plugin_Activation_WPElemento_Importer::get_instance();
					$fashion_shop_storefront_actions = $plugin_ins->recommended_actions;
					?>
					<div class="fashion-shop-storefront-recommended-plugins ">
							<div class="fashion-shop-storefront-action-list">
								<?php if ($fashion_shop_storefront_actions): foreach ($fashion_shop_storefront_actions as $key => $fashion_shop_storefront_actionValue): ?>
										<div class="fashion-shop-storefront-action" id="<?php echo esc_attr($fashion_shop_storefront_actionValue['id']);?>">
											<div class="action-inner plugin-activation-redirect">
												<h3 class="action-title"><?php echo esc_html($fashion_shop_storefront_actionValue['title']); ?></h3>
												<div class="action-desc"><?php echo esc_html($fashion_shop_storefront_actionValue['desc']); ?></div>
												<?php echo wp_kses_post($fashion_shop_storefront_actionValue['link']); ?>
											</div>
										</div>
									<?php endforeach;
								endif; ?>
							</div>
					</div>
				<?php }else{ ?>
					<div class="tab-outer-box">
						<h2><?php esc_html_e( 'Welcome to Elemento Theme!', 'fashion-shop-storefront' ); ?></h2>
						<p><?php esc_html_e( 'For setup the theme, First you need to click on the Begin activating plugins', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '1. Install Kirki Customizer Framework ', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '2. Install WPElemento Importer', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '3. Activate Kirki Customizer Framework ', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '4. Activate WPElemento Importer ', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '>> Then click to Return to the Dashboard', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '>> Click on the start now button', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '>> Click install plugins', 'fashion-shop-storefront' ); ?></p>
						<p><?php esc_html_e( '>> Click import demo button to setup the theme and click visit your site button', 'fashion-shop-storefront' ); ?></p>
					</div>
				<?php } ?>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<?php fashion_shop_storefront_changelog_screen(); ?>
				</div>
			</div>
			
		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'fashion-shop-storefront'); ?></h2>
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
				<h3><?php esc_html_e('Fashion Shop Storefront WordPress Theme', 'fashion-shop-storefront'); ?></h3>
				<div class="iner-sidebar-pro-btn">
					<span class="premium-btn"><a href="<?php echo esc_url( FASHION_SHOP_STOREFRONT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'fashion-shop-storefront'); ?></a>
					</span>
					<span class="demo-btn"><a href="<?php echo esc_url( FASHION_SHOP_STOREFRONT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'fashion-shop-storefront'); ?></a>
					</span>
					<span class="doc-btn"><a href="<?php echo esc_url( FASHION_SHOP_STOREFRONT_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Doc', 'fashion-shop-storefront'); ?></a>
					</span>
				</div>
				<hr>
				<div class="premium-coupon">
					<div class="premium-features">
						<h3><?php esc_html_e('premium Features', 'fashion-shop-storefront'); ?></h3>
						<ul>
							<li><?php esc_html_e( 'Multilingual', 'fashion-shop-storefront' ); ?></li>
							<li><?php esc_html_e( 'Drag and drop features', 'fashion-shop-storefront' ); ?></li>
							<li><?php esc_html_e( 'Zero Coding Required', 'fashion-shop-storefront' ); ?></li>
							<li><?php esc_html_e( 'Mobile Friendly Layout', 'fashion-shop-storefront' ); ?></li>
							<li><?php esc_html_e( 'Responsive Layout', 'fashion-shop-storefront' ); ?></li>
							<li><?php esc_html_e( 'Unique Designs', 'fashion-shop-storefront' ); ?></li>
						</ul>
					</div>
					<div class="coupon-box">
						<h3><?php esc_html_e('Use Coupon Code', 'fashion-shop-storefront'); ?></h3>
						<a class="coupon-btn" href="<?php echo esc_url( FASHION_SHOP_STOREFRONT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('UPGRADE NOW', 'fashion-shop-storefront'); ?></a>
						<div class="coupon-container">
							<h3><?php esc_html_e( 'elemento20', 'fashion-shop-storefront' ); ?></h3>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

<?php } ?>