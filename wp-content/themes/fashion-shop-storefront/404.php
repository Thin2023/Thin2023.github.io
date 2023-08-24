<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fashion Shop Storefront
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <?php if ( get_theme_mod('fashion_shop_storefront_header_page_title' , true)) : ?>
      <h1><?php esc_html_e('404 Error!', 'fashion-shop-storefront'); ?></h1>
    <?php endif; ?>
    <?php if ( get_theme_mod('fashion_shop_storefront_header_breadcrumb' , true)) : ?>
      <div class="crumb-box mt-3">
        <?php fashion_shop_storefront_the_breadcrumb(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div id="content">
	<div class="container">
		<div class="py-5 text-center">
			<p><?php esc_html_e('The page you are looking for may have been moved, deleted, or possibly never existed.', 'fashion-shop-storefront'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>