<?php
add_action( 'after_setup_theme', 'nomansgrace_setup' );
function nomansgrace_setup()
{
load_theme_textdomain( 'nomansgrace', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'nomansgrace' ) , 'mobile-menu' => __( 'Mobile Menu', 'nomansgrace' ) )
);
}



function nmg_assets() {
	wp_enqueue_style( 'tachyons', get_template_directory_uri(). '/css/tachyons.min.css' );
	wp_enqueue_style( 'nmg-custom', get_template_directory_uri(). '/css/nmg-custom.css' );
  wp_enqueue_script( 'google-maps', get_template_directory_uri(). '/js/map.js', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/vendor/jquery.waypoints.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'waypoints-sticky', get_template_directory_uri() . '/js/vendor/sticky.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'tabslet', get_template_directory_uri() . '/js/vendor/jquery.tabslet.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'waypoints-init', get_template_directory_uri() . '/js/waypoints-init.js', array( 'jquery' ), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'nmg_assets' );


add_action( 'comment_form_before', 'nomansgrace_enqueue_comment_reply_script' );
function nomansgrace_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'nomansgrace_title' );
function nomansgrace_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'nomansgrace_filter_wp_title' );
function nomansgrace_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'nomansgrace_widgets_init' );
function nomansgrace_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'nomansgrace' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function nomansgrace_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'nomansgrace_comments_number' );
function nomansgrace_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
