<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title><?php if(is_single()):wp_title(''); else:  echo "Mandrew's Blissenblog | Andy Blissenbach | Modern Masculinity";  endif; ?></title>

 <?php include(TEMPLATEPATH . '/inc/grunticon_script.php'); ?>

  <!--Favicons -->
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  
  <?php wp_head(); ?>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div class="head-wrap">
    <header id="nav" class="head col-xs-12">
       <a class="title" href="<?php echo esc_url( home_url( '/' ) ); ?>">Mandrew's Blissenblog</a>
      <nav>
        <?php
          $defaults = array( 
            'theme_location' => 'main_menu',
            'container' => '',
            'menu_class' => 'main-menu',
            'menu_id' => '',
        );
        wp_nav_menu( $defaults );      
        ?>
        <div class="nav-icon">
          <div></div>
        </div>  
      </nav>
      <div class="search"></div>
      <ul class="socials">
        <li><a href="#" class="icon-facebook" data-grunticon-embed title="Facebook">
          Facebook
        </a>
        </li>
        <li><a href="#">Register</a>
        </li>
      </ul>
    </header>
  </div>
  <div class="wrapper"><!-- ends in footer.php -->
<?php if (is_home() ) : ?>
  <?php get_template_part( 'inc/hero-home' ); ?>
<?php endif ?>