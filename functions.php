<?php
/**
 * Load resources to initialize the html2wp theme functionalities
 *
 * @package html2wp/simple-wp-starter-theme
 */

// The Composer autoload includes
require_once get_stylesheet_directory() . '/html2wp/vendor/autoload.php';

// Theme setup
require_once get_stylesheet_directory() . '/html2wp/setup.php';

// The menu walker
require_once get_stylesheet_directory() . '/html2wp/html2wp-walker-nav-menu.php';

// Extend wp
require_once get_stylesheet_directory() . '/html2wp/extend.php';

// Custom methods
require_once get_stylesheet_directory() . '/html2wp/methods.php';

// Form methods
require_once get_stylesheet_directory() . '/html2wp/forms.php';

/**
 * Note: It is recommended to not add any custom code here if you plan to convert your theme again.
 * Please consider using a child theme instead: http://codex.wordpress.org/Child_Themes
 */

// Register custom javascript
function wptuts_scripts_with_jquery()
{
   
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/readmore.js', array( 'jquery' ) );
 
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_with_jquery' );

// Orders posts by last name (where appropriate)
function posts_orderby_lastname ($orderby_statement) 
{
  $orderby_statement = "RIGHT(post_title, LOCATE(' ', REVERSE(post_title)) - 1) ASC";
    return $orderby_statement;
}

// Display "Menu" option under Appearance in main admin menu
add_theme_support( 'menus' );

// Navigation menu implementation
register_nav_menus( array(
	'primary_menu' => 'Primary Menu',
	'heit_2016_submenu' => 'HEIT 2016 Submenu',
	'heit_2015_submenu' => 'HEIT 2015 Submenu'
) );

// Remove all status messages when posts are created or edited
add_filter( 'post_updated_messages', 'remove_all_messages_so_16015959' );

function remove_all_messages_so_16015959( $messages )
{
    return array();
}

/**
 * Remove the href from empty links `<a href="#">` in the nav menus
 * @param string $menu the current menu HTML
 * @return string the modified menu HTML
 */

/*
function wpse_remove_empty_links( $menu ) {
    return str_replace( '<a href="#">', '<a>', $menu );
}

add_filter( 'wp_nav_menu_items', 'wpse_remove_empty_links' );

*/

/** 
* Replaces the excerpt "more" text by a link.
*/
function new_excerpt_more($more) {
	global $post;
	return '... <br><br><a class="more-link" href="'. get_permalink($post->ID) . '"> Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cherpp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cherpp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'xherpp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'cherpp_widgets_init' );

if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

function wpb_comment_reply_text( $link ) {
$link = str_replace( 'Reply', '<i class="icon-reply"></i>', $link );
return $link;
}
add_filter( 'comment_reply_link', 'wpb_comment_reply_text' );