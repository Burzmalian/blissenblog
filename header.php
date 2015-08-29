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
  <title><?php if(is_single()):wp_title(''); else:  echo "Mandrew's Blissenblog | Andrew Blissenbach | Modern Masculinity";  endif; ?></title>

  <!--Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicon-16x16.png">
  
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
      <div class="socials">
      <a href="https://www.facebook.com/blissenblog" class="icon-facebook" data-grunticon-embed title="Facebook">
          <object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/prod/images/facebook.svg">
            <img style="width:100%;height:auto;" src="<?php echo get_template_directory_uri(); ?>/assets/prod/images/facebook.png" alt="Facebook" />
          </object>
        </a>
      <div>
    </header>
  </div>
  <div class="wrapper"><!-- ends in footer.php -->
<?php if (is_home() ) : ?>
  <?php get_template_part( 'inc/hero-home' ); ?>
<?php endif ?>