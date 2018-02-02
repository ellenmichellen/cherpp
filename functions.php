<?php
/**
 * Load resources to initialize the html2wp theme functionalities
 *
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
	'heit_2015_submenu' => 'HEIT 2015 Submenu',
	'heit_2018_submenu' => 'HEIT 2018 Submenu'
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
	return '... <br><br><a class="more-link" href="'. get_permalink($post->ID) . '"> Read More...</a>';
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

// Implements comments
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

// Style comment reply as an icon
function wpb_comment_reply_text( $link ) {
$link = str_replace( 'Reply', '<i class="icon-reply"></i>', $link );
return $link;
}
add_filter( 'comment_reply_link', 'wpb_comment_reply_text' );

// Removes screen reader text for pagination
function sanitize_pagination($content) {
    // Remove h2 tag
    $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);
    return $content;
}
add_action('navigation_markup_template', 'sanitize_pagination');

// Displays author box underneath blog posts
function wpb_author_info_box( $content ) {
 
	global $post;
	 
	// Detect if it is a single post with a post author
	if ( is_single() && isset( $post->post_author ) ) {
	 
		// Get author's display name 
		$display_name = get_the_author_meta( 'display_name', $post->post_author );
	 
	// If display name is not available then use nickname as display name
	if ( empty( $display_name ) )
	$display_name = get_the_author_meta( 'nickname', $post->post_author );
	 
		// Get author's biographical information or description
		$user_description = get_the_author_meta( 'user_description', $post->post_author );
		 
		// Get author's website URL 
		$user_website = get_the_author_meta('url', $post->post_author);
		 
		// Get link to the author archive page
		$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
	  
	if ( ! empty( $display_name ) )

		// If author has a biography, display the bio box...
		if (get_the_author_meta('description')) {
				$author_details = '<div class="panel-title"><p class="author_name">Posted by <a class="blue-color" href="'. $user_posts .'"> ' . $display_name . '</a></p></div>';
	 		}

	if ( ! empty( $user_description ) )
	
		// If author bio is not blank...
		if (get_the_author_meta('description')) {
			// Author avatar and bio
			$author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $user_description ). '</p>';
		}

		// If author bio is not blank...  
			if (get_the_author_meta('description')) {
				// Pass all this info to post content  
				$content = $content . '<footer class="author_bio_section" >' . $author_details . '</footer>';
			}
		}

	return $content;

	}
 
	// Add our function to the post content filter 
	add_action( 'the_content', 'wpb_author_info_box' );
	 
	// Allow HTML in author bio section 
	remove_filter('pre_user_description', 'wp_filter_kses');

/**
 * Plugin Name: T5 Comment author URI to blog author page
 * Description: Changes the comment author URI to the blog’s author archive
 * Version:     2012.07.18
 * Author:      Thomas Scholz
 * Author URI:  http://toscho.de
 * License:     MIT
 * License URI: http://www.opensource.org/licenses/mit-license.php
 */

if ( ! function_exists( 't5_comment_uri_to_author_archive' ) )
{
    add_filter( 'get_comment_author_url', 't5_comment_uri_to_author_archive' );

    function t5_comment_uri_to_author_archive( $uri )
    {
        global $comment;

        // We do not get the real comment with this filter.
        if ( empty ( $comment )
            or ! is_object( $comment )
            or empty ( $comment->comment_author_email )
            or ! $user = get_user_by( 'email', $comment->comment_author_email )
        )
        {
            return $uri;
        }

        return get_author_posts_url( $user->ID );
    }
}

// Set active class to "Blog" in main mavigation menu when on any blog page
/* function add_custom_class($classes=array(), $menu_item=false) {
    if ( !is_page() && 'Blog' == $menu_item->title && 
            !in_array( 'current-menu-item', $classes ) ) {
        $classes[] = 'current-menu-item';        
    }                    
    return $classes;
}
add_filter('nav_menu_css_class', 'add_custom_class', 100, 2); */

//  Mark parent navigation active when on custom post type single page
add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
	
	function add_current_nav_class($classes, $item) {
		
		// Getting the current post details
		global $post;
		
		// Getting the post type of the current post
		$current_post_type = get_post_type_object(get_post_type($post->ID));
		$current_post_type_slug = $current_post_type->rewrite[slug];
			
		// Getting the URL of the menu item
		$menu_slug = strtolower(trim($item->url));
		
		// If the menu item URL contains the current post types slug add the current-menu-item class
		if (strpos($menu_slug,$current_post_type_slug) !== false) {
		
		   $classes[] = 'current-menu-item';
		
		}
		
		// Return the corrected set of classes to be added to the menu item
		return $classes;
	
	}

// Customise logo on WP login page
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/loginlogo.png);
		height:100px;
		width:150px;
		background-size: 150px 100px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;

        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Link logo on login page to site homepage
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


function custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/login-styles.css" />';
}
add_action('login_head', 'custom_login');

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function the_breadcrumb() {
global $post;
if (!is_home()) {
   
        if ( is_category() || is_single() ) {
            the_category(', ');
            if ( is_single() ) {
                echo " / ";
                the_title();
            }
        } elseif ( is_page() && $post->post_parent ) {
            echo '<a href="'. get_permalink($post->post_parent).'">'. apply_filters('the_title', get_the_title($post->post_parent)) .'</a>';
            echo "&nbsp;  / &nbsp;";
            echo the_title();
        } elseif (is_page()) {
            echo '';
            echo the_title();
            echo "";
        }
    }
}

