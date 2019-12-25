	<?php
	/**
	* @package fire
	*/

	/* theme setup*/
	if (!function_exists('fire_setup')):
		function fire_setup() {
			/** make languages*/
			load_theme_textdomain('fire', get_template_directory().'/languages');
		// Add default posts and comments RSS feed links to head.
			add_theme_support('automatic-feed-links');
		// Content width
			global $content_width;
			if (!isset($content_width)) {
				$content_width = 1170;/* pixels */
			}
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');
		/** add support thumnails*/
		add_theme_support('post-thumbnails');
		add_image_size('fire-large-thumb', 830);
		add_image_size('blog', 320, 280, true);
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'fire'),
			'mobile-menu' => __('Mobile Menu','fire'),
		));
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		));
		/*add support post fomat*/
		add_theme_support('post-formats', array(
			'aside', 'image', 'video', 'quote', 'link',
		));
		/** custom background*/
		add_theme_support('custom-background', apply_filters('fire_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));
		//Gutenberg align-wide support
		add_theme_support('align-wide');

		/* Custom Logo */
		add_theme_support( 'custom-logo', array(
			'header-text' => array( 'site-title', 'site-description' ),
		) );
	}
		endif;// fire_setup
		add_action('after_setup_theme', 'fire_setup');
		/**register widget area*/
		function fire_widgets_init() {
			register_sidebar(array(
				'name'          => __('Sidebar', 'fire'),
				'id'            => 'sidebar-1',
				'description'   => '',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			));

		//Footer widget areas
			$widget_areas = get_theme_mod('footer_widget_areas', '3');
			for ($i = 1; $i <= $widget_areas; $i++) {
				register_sidebar(array(
					'name'          => __('Footer ', 'fire').$i,
					'id'            => 'footer-'.$i,
					'description'   => '',
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'  => '</aside>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
				));
			}
		}
		add_action('widgets_init', 'fire_widgets_init');
		/** script and css*/
		function fire_scripts() {
			wp_enqueue_style('fire-nomalize', get_template_directory_uri().'/css/normalize.min.css', array(), true);
			wp_enqueue_style('fire-foundation', get_template_directory_uri().'/css/foundation.css', array(), true);
			
			
			//////
			wp_enqueue_style('fire-slick-css', get_template_directory_uri().'/slick/slick.css', array(), true);
			wp_enqueue_style('fire-slick-theme', get_template_directory_uri().'/slick/slick-theme.css', array(), true);
			wp_enqueue_script('slick-js', get_template_directory_uri().'/slick/slick.js', array('jquery'),'',true);
			wp_enqueue_script('slick-function-js', get_template_directory_uri().'/js/slick-func.js', array('jquery'),'',true);
			wp_enqueue_script('bootstrapv4-js', get_template_directory_uri().'/bootstrap-4.1.3/dist/js/bootstrap.min.js', array('jquery'),'',true);
			wp_enqueue_style('bootstrapv4-css', get_template_directory_uri().'/bootstrap-4.1.3/dist/css/bootstrap.min.css');
			
			wp_enqueue_script('fire-query', get_template_directory_uri().'/js/jquery.min.js', array('jquery'),'',true);
			wp_enqueue_script('fire-jquery', get_template_directory_uri().'/js/jquery.js', array('jquery'),'',true);

			wp_enqueue_style('fire-fonts', esc_url(fire_google_fonts()), array(), null);
			wp_enqueue_style('fire-style', get_stylesheet_uri(), '', '20180710');
			wp_enqueue_style('fire-font-awesome', get_template_directory_uri().'/fonts/font-awesome.min.css');

			wp_enqueue_script('toogle-js', get_template_directory_uri().'/js/toggle.js', array('jquery'),'10.0.1',true);


			if (is_singular() && comments_open() && get_option('thread_comments')) {
				wp_enqueue_script('comment-reply');
			}
		}
		add_action('wp_enqueue_scripts', 'fire_scripts');
		/**
	 * Fonts
	 */
		if (!function_exists('fire_google_fonts')):
			function fire_google_fonts() {
				$body_font     = get_theme_mod('body_font_name', 'Source+Sans+Pro:400,400italic,600');
				$headings_font = get_theme_mod('headings_font_name', 'Raleway:400,500,600');

				$fonts   = array();
				$fonts[] = esc_attr(str_replace('+', ' ', $body_font));
				$fonts[] = esc_attr(str_replace('+', ' ', $headings_font));

				if ($fonts) {
					$fonts_url = add_query_arg(array(
						'family' => urlencode(implode('|', $fonts))
					), 'https://fonts.googleapis.com/css');
				}

				return $fonts_url;
			}
		endif;
	/**
	 * Enqueue Bootstrap
	 */
	function fire_enqueue_bootstrap() {
		wp_enqueue_style('fire-bootstrap', get_template_directory_uri().'/css/bootstrap/bootstrap.min.css', array(), true);
	}
	add_action('wp_enqueue_scripts', 'fire_enqueue_bootstrap', 9);
	/**
	 * Change the excerpt length
	 */
	function fire_excerpt_length($length) {

		$excerpt = get_theme_mod('exc_lenght', '55');
		return $excerpt;

	}
	add_filter('excerpt_length', 'fire_excerpt_length', 999);
	/**
	 * Blog layout
	 */
	function fire_blog_layout() {
		$layout = get_theme_mod('blog_layout', 'classic-alt');
		return $layout;
	}

	/**
	 * Menu fallback
	 */
	function fire_menu_fallback() {
		if (current_user_can('edit_theme_options')) {
			echo '<a class="menu-fallback" href="'.admin_url('nav-menus.php').'">'.__('Create your menu here', 'fire').'</a>';
		}
	}
/**
 * Polylang compatibility
 */
if (function_exists('pll_register_string')):
	function fire_polylang() {
		for ($i = 1; $i <= 5; $i++) {
			pll_register_string('Slide title '.$i, get_theme_mod('slider_title_'.$i), 'fire');
			pll_register_string('Slide subtitle '.$i, get_theme_mod('slider_subtitle_'.$i), 'fire');
		}
		pll_register_string('Slider button text', get_theme_mod('slider_button_text'), 'fire');
		pll_register_string('Slider button URL', get_theme_mod('slider_button_url'), 'fire');
	}
	add_action('admin_init', 'fire_polylang');
endif;

	/**
	 * Header image overlay
	 */
	function fire_header_overlay() {
		$overlay = get_theme_mod('hide_overlay', 0);
		if (!$overlay) {
			echo '<div class="overlay"></div>';
		}
	}
	/**
	 * Header clone
	 */
	function fire_header_clone() {

		$front_header_type = get_theme_mod('front_header_type', 'slider');
		$site_header_type  = get_theme_mod('site_header_type');

		if (($front_header_type == 'nothing' && is_front_page()) || ($site_header_type == 'nothing' && !is_front_page())) {?>
			<div class="header-clone"></div>

		<?php }
	}
	add_action('fire_before_header', 'fire_header_clone');

	/**
	 * Get image alt
	 */
	function fire_get_image_alt($image) {
		global $wpdb;

		if (empty($image)) {
			return false;
		}

		$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM {$wpdb->posts} WHERE guid='%s';", strtolower($image)));
		$id         = (!empty($attachment))?$attachment[0]:0;

		$alt = get_post_meta($id, '_wp_attachment_image_alt', true);

		return $alt;
	}
	/**
 * Implement the Custom Header feature.
 */
require get_template_directory().'/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory().'/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory().'/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/customizer.php';

/**
 * Page builder support
 */
require get_template_directory().'/inc/page-builder.php';

/**
 * Slider
 */
require get_template_directory().'/inc/slider.php';

/**
 * Styles
 */
require get_template_directory().'/inc/styles.php';

/**
 * Theme info
 */
require get_template_directory().'/inc/theme-info.php';


