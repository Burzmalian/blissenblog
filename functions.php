<?php
// REGISTER MENUS
add_action('init', 'register_my_menus');
 
function register_my_menus() {
    register_nav_menus( array(
      'main_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu',   
 ));
}

// REGISTER SCRIPTS
    function get_scripts() 
    {   
		// Deregister the included library  
		wp_deregister_script( 'jquery' );  
		  
		// Register the library again from Google's CDN  
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), null, true );		
		wp_register_script( 'prod', get_template_directory_uri() . '/assets/prod/js/prod.min.js', array( 'jquery' ), null, true);
    
    wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'prod' );	
    }  
    add_action( 'wp_enqueue_scripts', 'get_scripts' ); 
	
// REGISTER STYLES
	function get_styles()
	{	
    wp_register_style( 'prod', get_template_directory_uri() .'/assets/prod/css/main.css');
    wp_register_style( 'web-font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,800;');
    
    wp_enqueue_style( 'prod' );
    wp_enqueue_style( 'web-font' );	
	}
	add_action( 'wp_enqueue_scripts', 'get_styles' );

// Remove emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


// Custom thumbnail sizes
add_theme_support( 'post-thumbnails' );
add_image_size( 'b-small', 360 );
add_image_size( 'b-medium', 750 );

function paulund_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
     
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'paulund_remove_default_image_sizes');

// Replace the default ellipsis
function trim_excerpt($text) {
     $text = str_replace('[&hellip;]', '...', $text);
     return $text;
    }
add_filter('get_the_excerpt', 'trim_excerpt');

// Removes the white spaces from wp_title
function af_titledespacer($title) {
	return trim($title);
}

add_filter('wp_title', 'af_titledespacer');


// open graph, twitter card, description
function fb_opengraph() {
    global $post;

  if(is_single()) {
      $author_id=$post->post_author;
      setup_postdata( $post );
      $my_excerpt = get_the_excerpt();
      if(has_post_thumbnail($post->ID)) :
        $img_src = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'b-medium');       
      else :
        $img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
      endif; ?>
  <meta name="description" content="<?php echo $my_excerpt; ?>">
  <meta property="og:title" content="<?php echo the_title(); ?>"/>
  <meta property="og:description" content="<?php echo $my_excerpt; ?>"/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
  <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
  <meta property="og:image" content="<?php echo $img_src; ?>"/>

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?php echo get_bloginfo(); ?>">
  <meta name="twitter:creator" content="<?php the_author_meta( 'nickname', $author_id ); ?>">
  <meta name="twitter:title" content="<?php echo the_title(); ?>">
  <meta name="twitter:description" content="<?php echo $my_excerpt; ?>">
  <meta name="twitter:image" content="<?php echo $img_src; ?>">
 
<?php
    } else {
        return;
    }
}
add_action('wp_head', 'fb_opengraph', 5);
?>