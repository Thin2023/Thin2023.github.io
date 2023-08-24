<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fashion Shop Storefront
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php if(get_theme_mod('fashion_shop_storefront_preloader_hide','')){ ?>
	<div class="loader">
		<div class="preloader">
			<div class="diamond">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
<?php } ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fashion-shop-storefront' ); ?></a>
<header id="site-navigation" class="header text-center text-md-left">
	<div class="upperheader">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 align-self-center">
					<?php $fashion_shop_storefront_settings = get_theme_mod( 'fashion_shop_storefront_social_links_settings' ); ?>
					<div class="social-links text-lg-left">
						<?php if ( is_array($fashion_shop_storefront_settings) || is_object($fashion_shop_storefront_settings) ){ ?>
							<?php foreach( $fashion_shop_storefront_settings as $fashion_shop_storefront_setting ) { ?>
								<a href="<?php echo esc_url( $fashion_shop_storefront_setting['link_url'] ); ?>">
									<i class="<?php echo esc_attr( $fashion_shop_storefront_setting['link_text'] ); ?> mr-2"></i>
								</a>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 col-md-4 col-sm-12 align-self-center">
					<?php if ( get_theme_mod('fashion_shop_storefront_header_toptxt') ) : ?>
						<p class="mb-0 adv-text"><?php echo esc_html( get_theme_mod('fashion_shop_storefront_header_toptxt' ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 text-lg-right text-center align-self-center">
					<?php if( get_theme_mod( 'fashion_shop_storefront_currency_switcher') != '') { ?>
						<?php if(class_exists('woocommerce')){ ?>
							<div class="currency-box">
								<?php echo do_shortcode('[woocs show_flags=0 txt_type="desc" style=3]'); ?>
							</div>
						<?php } ?>
					<?php }?>
				</div>
				<?php if( get_theme_mod( 'fashion_shop_storefront_google_translator') != '') { ?>
					<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 border-left py-2 align-self-center">
						<div class="translate-lang">
							<?php echo do_shortcode( '[gtranslate]' );?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="middleheader">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 align-self-center my-2">
					<div class="logo text-center text-md-left mb-3 mb-lg-0">
			    		<div class="logo-image">
			    			<?php the_custom_logo(); ?>
				    	</div>
				    	<div class="logo-content">
							<?php
								if ( get_theme_mod('fashion_shop_storefront_display_header_title', true) == true ) :
									echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
									echo esc_attr(get_bloginfo('name'));
									echo '</a>';
								endif;
								if ( get_theme_mod('fashion_shop_storefront_display_header_text', true) == true ) :
									echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
								endif;
							?>
						</div>
					</div>
			   	</div>
				<div class="col-lg-6 col-md-5 col-sm-12 align-self-center">
					<?php if( get_theme_mod( 'fashion_shop_storefront_disable_search_icon', 'on' ) ){ ?>
						<div class="search-box">
							<?php if(class_exists('woocommerce')){
								get_product_search_form();
							} ?>
						</div>
					<?php } ?>
				</div>
			   	<div class="col-lg-3 col-md-4 col-sm-12 align-self-center text-lg-right border-left py-4">
					<div class=" my-account">
						<?php if(class_exists('woocommerce')){ ?>
							<?php if ( is_user_logged_in() ) { ?>
								<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','fashion-shop-storefront'); ?>"><i class="fas fa-user mr-2"></i></a>
							<?php }
							else { ?>
								<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','fashion-shop-storefront'); ?>"><i class="fas fa-sign-in-alt mr-2"></i></a>
							<?php } ?>
						<?php }?>
					</div>
					<div class=" wish-list">
						<?php if ( get_theme_mod('fashion_shop_storefront_header_wishlist_url') ) : ?>
							<a href="<?php echo esc_url( get_theme_mod('fashion_shop_storefront_header_wishlist_url' ) ); ?>"><i class="fas fa-heart mr-2"></i></a>
						<?php endif; ?>
					</div>
					<div class="cart">
						<?php if ( get_theme_mod('fashion_shop_storefront_cart_box_enable', 'on' ) == true ) : ?>
							<?php if ( class_exists( 'woocommerce' ) ) {?>
								<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','fashion-shop-storefront' ); ?>"><i class="fas fa-shopping-bag "></i><span class="cart-item-box"><?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?><span class="ml-1"><?php echo esc_html('Items','fashion-shop-storefront'); ?></span></span></a>
							<?php }?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="topheader <?php if( get_theme_mod( 'fashion_shop_storefront_sticky_header',false) != '') { ?>sticky-header<?php } else { ?>close-sticky <?php } ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 align-self-center">
					<?php if(class_exists('woocommerce')): ?>
					<div class=" position-relative">
						<button class="product-btn"><i class="fas fa-bars"></i><?php echo esc_html_e('Browse Categories','fashion-shop-storefront'); ?></button>
						<div class="product-cat">
							<?php
							$args = array(
								'orderby'    => 'title',
								'order'      => 'ASC',
								'hide_empty' => 0,
								'parent'  => 0
							);
							$product_categories = get_terms( 'product_cat', $args );
							$count = count($product_categories);
							if ( $count > 0 ){
								foreach ( $product_categories as $product_category ) {
									$product_cat_id   = $product_category->term_id;
									$cat_link = get_category_link( $product_cat_id );
									if ($product_category->category_parent == 0) { ?>
								<li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
								<?php
								}
								echo esc_html( $product_category->name ); ?></a><i class="fas fa-chevron-right"></i></li>
							<?php } } ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
					<?php if(has_nav_menu('main-menu')){ ?>
						<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
							<span aria-hidden="true"><?php esc_html_e( 'Menu', 'fashion-shop-storefront' ); ?></span>
						</button>
						<nav id="main-menu" class="close-panal">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container' => 'false'
								));
							?>
							<button class="close-menu my-2 p-2" type="button">
								<span aria-hidden="true"><i class="fa fa-times"></i></span>
							</button>
						</nav>
					<?php }?>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 align-self-center phone-number text-center text-md-right">
					<?php if ( get_theme_mod('fashion_shop_storefront_header_phone_number') || get_theme_mod('fashion_shop_storefront_header_phone_number_text') ) : ?>
							<span class="phone-text mr-1"><?php echo esc_html( get_theme_mod('fashion_shop_storefront_header_phone_number_text' ) ); ?></span>
							<span class="phone-no"><?php echo esc_html( get_theme_mod('fashion_shop_storefront_header_phone_number' ) ); ?></span>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>