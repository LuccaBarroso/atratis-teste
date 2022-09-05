<!DOCTYPE html>
<html style="margin-top: 0px !important;" lang="pt-br" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title(); ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://kit.fontawesome.com/325333b979.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="apple-touch-icon" sizes="57x57"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/apple-icon-57x57.png')?>">
  <link rel="apple-touch-icon" sizes="60x60"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/apple-icon-60x60.png')?>">
  <link rel="apple-touch-icon" sizes="72x72"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/apple-icon-72x72.png')?>">
  <link rel="apple-touch-icon" sizes="76x76"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/apple-icon-76x76.png')?>">
  <link rel="apple-touch-icon" sizes="114x114"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/apple-icon-114x114.png')?>">
  <link rel="apple-touch-icon" sizes="120x120"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/apple-icon-120x120.png')?>">
  <link rel="apple-touch-icon" sizes="144x144"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/apple-icon-144x144.png')?>">
  <link rel="apple-touch-icon" sizes="152x152"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/apple-icon-152x152.png')?>">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/apple-icon-180x180.png')?>">
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/android-icon-192x192.png')?>">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/favicon-32x32.png')?>">
  <link rel="icon" type="image/png" sizes="96x96"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/favicon-96x96.png')?>">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo site_url('wp-content/themes/lucca/assets/images/favicon/favicon-16x16.png')?>">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


  <nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
      <?php
      $argumentos = array( 'post_type' => 'page', 'page_id' => 31 );
            
      $query = new WP_Query( $argumentos );
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
          ?>
      <a class="logo" href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_field("logo_principal");?>" class="py-3" alt="logo-hublife">
      </a>
      <?php  
        }
      }
      wp_reset_postdata();
      ?>



      <button class="burguer-menu navbar-toggler order-3" type="button" data-bs-toggle="collapse"
        data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="burguer-menu-icon navbar-toggler-icon color-gray outline-none"><svg
            xmlns="http://www.w3.org/2000/svg" fill="#4b555c" viewBox="0 0 448 512">
            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
            <path
              d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" />
          </svg></span>
      </button>

      <button class="btn btn-sm call-to-action bold ms-auto order-2 bg-pink text-white px-4 py-2 grow-hover"
        type="button" href="<?php echo get_page_link(58); ?>">
        Solicite um orçamento
      </button>

      <div class="collapse navbar-collapse bold justify-content-end order-4 h-100" id="topNavbar">
        <?php
          wp_nav_menu(array(
              'theme_location' => 'principal',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul id="%1$s" class="navbar-nav navbar-items me-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
              'depth' => 2,
              'walker' => new bootstrap_5_wp_nav_menu_walker()
          ));
          ?>
      </div>
    </div>
  </nav>

  <div id="home"></div>