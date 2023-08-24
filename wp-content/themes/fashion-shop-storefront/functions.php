<?php
/**
 * Fashion Shop Storefront functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fashion Shop Storefront
 */

/* Enqueue script and styles */

function fashion_shop_storefront_enqueue_google_fonts() {

	require_once get_theme_file_path( 'includes/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'Inter',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' ),
		array(),
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'fashion_shop_storefront_enqueue_google_fonts' );

if (!function_exists('fashion_shop_storefront_enqueue_scripts')) {

	function fashion_shop_storefront_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/assets/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/assets/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style('fashion-shop-storefront-style', get_stylesheet_uri(), array() );

		wp_enqueue_style(
			'fashion-shop-storefront-responsive-css',
			get_template_directory_uri() . '/assets/css/responsive.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'fashion-shop-storefront-navigation',
			get_template_directory_uri() . '/assets/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'fashion-shop-storefront-script',
			get_template_directory_uri() . '/assets/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$css = '';

		if ( get_header_image() ) :

			$css .=  '
				.header-image-box{
					background-image: url('.esc_url(get_header_image()).') !important;
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
					height: 550px;
				    display: flex;
				    align-items: center;
				}';

		endif;

		wp_add_inline_style( 'fashion-shop-storefront-style', $css );

	}

	add_action( 'wp_enqueue_scripts', 'fashion_shop_storefront_enqueue_scripts' );

}

/* Setup theme */

if (!function_exists('fashion_shop_storefront_after_setup_theme')) {

	function fashion_shop_storefront_after_setup_theme() {

		if ( ! isset( $content_width ) ) $content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'fashion-shop-storefront' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'default-image'      => get_parent_theme_file_uri( '/assets/images/default-head-image.png' ),
			'width' => 1920,
			'flex-width' => true,
			'height' => 550,
			'flex-height' => true,
			'header-text' => false,
		));

		register_default_headers( array(
			'default-image' => array(
				'url'           => '%s/assets/images/default-head-image.png',
				'thumbnail_url' => '%s/assets/images/default-head-image.png',
				'description'   => __( 'Default Header Image', 'fashion-shop-storefront' ),
			),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_editor_style( array( '/assets/css/editor-style.css' ) );

		global $pagenow;
		
		// Theme Activation Redirects To Get Started Page
		if (is_admin() && ('themes.php' == $pagenow) && isset($_GET['activated']) && wp_get_theme()->get('TextDomain') === 'fashion-shop-storefront') {
			wp_redirect(admin_url('themes.php?page=fashion_shop_storefront_about'));
		}

	}

	add_action( 'after_setup_theme', 'fashion_shop_storefront_after_setup_theme', 999 );
}

require get_template_directory() .'/includes/tgm/tgm.php';
require get_template_directory() . '/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/includes/go-pro/class-upgrade-pro.php' );

/* Get post comments */

if (!function_exists('fashion_shop_storefront_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function fashion_shop_storefront_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'fashion-shop-storefront');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'fashion-shop-storefront'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_html('%1$s at %2$s', '1: date, 2: time', 'fashion-shop-storefront'), esc_html( get_comment_date() ), esc_html( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'fashion-shop-storefront' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'fashion-shop-storefront'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for fashion_shop_storefront_comment()

if (!function_exists('fashion_shop_storefront_widgets_init')) {

	function fashion_shop_storefront_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','fashion-shop-storefront'),
			'id'   => 'fashion-shop-storefront-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'fashion-shop-storefront'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Page Sidebar','fashion-shop-storefront'),
			'id'   => 'sidebar-2',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'fashion-shop-storefront'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','fashion-shop-storefront'),
			'id'   => 'fashion-shop-storefront-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'fashion-shop-storefront'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));
	}

	add_action( 'widgets_init', 'fashion_shop_storefront_widgets_init' );

}

function fashion_shop_storefront_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo esc_url( home_url() );
		echo '">';
		bloginfo('name');
		echo "</a> >> ";
		if (is_category() || is_single()) {
			the_category(' , ');
			if (is_single()) {
				echo " >> ";
				the_title();
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}

/**
 * logo resizer
 */

function fashion_shop_storefront_logo_resizer() {

    $fashion_shop_storefront_theme_logo_size_css = '';
    $fashion_shop_storefront_logo_resizer = get_theme_mod('fashion_shop_storefront_logo_resizer');

	$fashion_shop_storefront_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($fashion_shop_storefront_logo_resizer).'px !important;
			width: '.esc_attr($fashion_shop_storefront_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'fashion-shop-storefront-style',$fashion_shop_storefront_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'fashion_shop_storefront_logo_resizer' );

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'fashion_shop_storefront_loop_columns', 999);
if (!function_exists('fashion_shop_storefront_loop_columns')) {
	function fashion_shop_storefront_loop_columns() {
		return get_theme_mod( 'fashion_shop_storefront_products_per_row', '3' ); 
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'fashion_shop_storefront_products_per_page' );
function fashion_shop_storefront_products_per_page( $cols ) {
  	return  get_theme_mod( 'fashion_shop_storefront_products_per_page',9);
}

function fashion_shop_storefront_max_title_length( $title ) {
	$max = 20;
	if( strlen( $title ) > $max ) {
		return substr( $title, 0, $max ). " &hellip;";
		} else {
		return $title;
	}
}
add_filter( 'the_title', 'fashion_shop_storefront_max_title_length');

function fashion_shop_storefront_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function fashion_shop_storefront_customize_css() {
	?>
	<?php if ( 'right' == get_theme_mod( 'fashion_shop_storefront_sale_badge_position', 'right' ) ) : ?>
		<style>
		.woocommerce ul.products li.product .onsale {
			left: auto; right: 10px;
		}
		</style>
	<?php elseif ( 'left' == get_theme_mod( 'fashion_shop_storefront_sale_badge_position', 'right' ) ) : ?>
		<style>
		.woocommerce ul.products li.product .onsale{
			left: 10px; right: auto ;
		}
		</style>
	<?php endif; ?>

	<?php
}

add_action( 'wp_head', 'fashion_shop_storefront_customize_css');

define('FASHION_SHOP_STOREFRONT_FREE_THEME_DOC',__('https://www.wpelemento.com/theme-documentation/fashion-shop-storefront/','fashion-shop-storefront'));
define('FASHION_SHOP_STOREFRONT_SUPPORT',__('https://wordpress.org/support/theme/fashion-shop-storefront/','fashion-shop-storefront'));
define('FASHION_SHOP_STOREFRONT_REVIEW',__('https://wordpress.org/support/theme/fashion-shop-storefront/reviews/','fashion-shop-storefront'));
define('FASHION_SHOP_STOREFRONT_BUY_NOW',__('https://www.wpelemento.com/elementor/fashion-shop-wordpress-theme/','fashion-shop-storefront'));
define('FASHION_SHOP_STOREFRONT_LIVE_DEMO',__('https://www.wpelemento.com/demo/fashion-shop-storefront/','fashion-shop-storefront'));
define('FASHION_SHOP_STOREFRONT_PRO_DOC',__('https://www.wpelemento.com/theme-documentation/fashion-shop-storefront-pro/','fashion-shop-storefront'));

/* Implement the About theme page */
require get_template_directory() . '/includes/getstart/getstart.php';

/* Plugin Activation */
require get_template_directory() . '/includes/getstart/plugin-activation.php';

