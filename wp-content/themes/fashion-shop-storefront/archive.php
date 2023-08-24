<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fashion Shop Storefront
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
  <?php if ( get_theme_mod('fashion_shop_storefront_header_page_title' , true)) : ?>
      <?php the_archive_title('<h1 class="mb-0">', '</h1>') ?> <?php the_archive_description(); ?>
  <?php endif; ?>
  <?php if ( get_theme_mod('fashion_shop_storefront_header_breadcrumb' , true)) : ?>
    <div class="crumb-box mt-3">
      <?php fashion_shop_storefront_the_breadcrumb(); ?>
    </div>
  <?php endif; ?>
  </div>
</div>

<div id="content" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div class="row">
          <?php
            if ( have_posts() ) :

              while ( have_posts() ) :

                the_post();
                get_template_part( 'template-parts/content' );

              endwhile;

            else:

              esc_html_e( 'Sorry, no post found on this archive.', 'fashion-shop-storefront' );

            endif;

            get_template_part( 'template-parts/pagination' );
          ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>