<?php 
  get_header();
?>

<div class="owl-carousel owl-theme" id="destaque">
  <?php 
  $argumentos = array(
    'post_type' => 'banner',
    'tax_query' => array(
      array(
          'taxonomy' => 'posicao',
          'field'    => 'slug',
          'terms'    => 'destaque',
      ),
    ),
    );
            	
  $query = new WP_Query( $argumentos );
  
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post();

        ?>
  <div class="item">
    <div class="carousel-item active position-relative w-100">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>"
        class="w-100 img-fluid img-zoom d-none d-sm-block d-md-block" alt="">
      <img src="<?php echo get_field('banner_mobile');?>" class="w-100 img-fluid img-zoom  d-block d-sm-none d-md-none"
        alt="">
      <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col d-flex flex-column justify-content-center">
              <h2 class="h2 lighter-bold text-white">
                <?php echo get_the_title(); ?>
              </h2>
              <p class="py-3 text-white"><?php echo get_the_content(); ?></p>
              <button href="<?php echo get_the_permalink();?>"
                class="btn carousel-btn call-to-action bold bg-pink text-white px-4 py-2 grow-hover mt-2">
                Saiba mais
              </button>
            </div>
            <div class="col  d-none d-lg-block"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
      }
    }
    wp_reset_postdata();
  ?>
</div>

<div class="container">
  <section class="flex justify-content-center w-100 center py-5" id="servicos">
    <h3 class="color-gray text-center bold h4">Confira nossos serviços</h2>
      <p class="color-gray text-center h6">Garanta o melhor serviço de advocacia</p>


      <div class="row  g-2 ">

        <?php 
            $argumentos = array( 'post_type' => 'servicos',
             );
            	
            $query = new WP_Query( $argumentos );

            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                  $query->the_post();
        
                  ?>

        <div class="col-md pt-5">
          <div class="service flex justify-content-center align-items-center align-middle">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>"
              class="rounded-circle mx-auto d-block mb-4" alt="">
            <h5 class="text-center bold color-pink mb-2 h5"><?php echo get_the_title(); ?> </h5>
            <p class="text-center mb-2 w-75 mx-auto"><?php echo get_the_excerpt(); ?></p>
            <a href="<?php echo get_permalink(); ?>"
              class="saiba-mais hover-pink color-gray grow-hover mx-auto d-block text-center">Saiba Mais</a>
          </div>
        </div>

        <?php
              }
            } else {
                // no posts found
            }
            wp_reset_postdata();
          ?>
      </div>
  </section>

  <section class="flex justify-content-center w-100 center mt-5 pt-5 pb-5" id="sobre">
    <?php
        $argumentos = array( 'post_type' => 'page', 'page_id' => 31 );
            	
        $query = new WP_Query( $argumentos );
        if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                  $query->the_post();
        
                  ?>
    <div class="row my-4 p-2">
      <div class="col-lg order-2 order-lg-1 pink-marks">
        <h3 class="h3 color-gray h2 bold"><?php echo get_field('titulo_chamada_1'); ?></h3>
        <?php 
              echo get_field("descricao_da_chamada_1");
            ?>
        <?php
              if(get_field('link_saiba_mais_chamada_1')) {
            ?>
        <button href="<?php get_field('link_saiba_mais_chamada_1') ?>"
          class="btn btn-sm call-to-action bold d-block ms-auto order-2 bg-pink text-white px-4 py-2 grow-hover mt-4"
          type="button">
          Saiba Mais
        </button>
        <?php
              }
            ?>
      </div>
      <div class="col-lg order-1 order-lg-2 ">
        <img src="<?php echo get_field("imagem_da_chamada_1");?>"
          class="col-img-limiter rounded-img img-fluid float-right mb-4" alt="">
      </div>
    </div>

    <div class="row my-4 p-2">
      <div class="col-md">
        <img src="<?php echo get_field("imagem_da_chamada_2");?>" class="col-img-limiter rounded-img img-fluid mb-4"
          alt="">

      </div>
      <div class="col-md pink-marks">
        <h4 class="h3 color-gray h2 bold"><?php echo get_field('titulo_chamada_2'); ?></h3>
          <?php 
              echo get_field("descricao_da_chamada_2");
            ?>
          <?php
              if(get_field('link_saiba_mais_chamada_2')) {
            ?>
          <button href="<?php get_field('link_saiba_mais_chamada_2') ?>"
            class="btn btn-sm call-to-action bold d-block order-2 bg-pink text-white px-4 py-2 grow-hover mt-4"
            type="button">
            Saiba Mais
          </button>
          <?php
              }
            ?>
      </div>
    </div>
    <?php

              }
            } else {
                // no posts found
            }
            wp_reset_postdata();
          ?>
  </section>
</div>

<?php

  $argumentos = array( 'post_type' => 'page', 'page_id' => 31 );
  $query = new WP_Query( $argumentos );

  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post();
      $titulo_video = get_field("titulo_video");
      $descricao_video = get_field("descricao_video");
      $iframe_do_video = get_field("iframe_do_video");
      $google_maps = get_field("google_maps");
    }
  }
  wp_reset_postdata();
?>

<section id="Video" class="mt-4">
  <div class="position-relative w-100">
    <img src="<?php echo site_url('wp-content/themes/lucca/assets/images/background.png')?>"
      class="w-100 background-video " alt="">
    <div
      class="position-absolute top-0 start-0 w-100 h-100 flex-column d-flex justify-content-center align-items-center">
      <h2 class="h2 text-center bold text-white">
        <?php echo  $titulo_video ?>
        </h3>
        <div class="teste text-center text-white">
          <?php echo $descricao_video ?>
        </div>
        <div class="video-frame pt-5">
          <?php echo $iframe_do_video ?>
        </div>
    </div>
    <div class="position-absolute " id="simbolo-video">
      <img src="<?php echo site_url('wp-content/themes/lucca/assets/images/simbolo.png')?>" width="150px" alt="">
    </div>
  </div>
</section>

<div class="container">
  <section id="blog" class="mt-5 pt-5">
    <h3 class="h3 text-center pb-5 extra-bold"> Blog</h3>
    <div class="row gy-5">
      <?php

        $argumentos = array( "cat" => 5 );
        $query = new WP_Query( $argumentos );


        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            
            ?>
      <div class="col-md">
        <div class="border-bottom border-4 h-100 mb-3 pb-2">
          <img class="img-fluid rounded pb-2 w-100" src="<?php echo get_the_post_thumbnail_url()?>" alt="">
          <h4 class="h6 bold color-pink py-2"><?php echo get_the_title(); ?></h4>
          <p class="pb-2"><?php echo get_the_excerpt(); ?></p>
          <a href="<?php echo get_the_permalink();?>" class="color-gray hover-pink hover-underline
                    text-decoration-none light-bold h6 grow-hover">Saiba
            mais</a>
        </div>
      </div>


      <?php
        }
      }
      wp_reset_postdata();
    ?>
    </div>
    <div class="text-center">
      <button href="<?php echo get_category_link(5); ?>"
        class="btn btn-sm call-to-action bold order-2 bg-pink text text-white px-5 py-2 grow-hover my-4"
        type="button">Ver todos</button>
    </div>
  </section>
</div>

<section class="pt-5" id="map">
  <?php echo $google_maps ?>
</section>

<?php
  get_footer();
?>