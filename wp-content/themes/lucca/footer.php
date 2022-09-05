<?php

$argumentos = array( 'post_type' => 'page', 'page_id' => 31 );
$query = new WP_Query( $argumentos );

if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();

    $endereco_linha_1 = get_field("endereco_linha_1");
    $endereco_linha_2 = get_field("endereco_linha_2");
    $telefone = get_field("Telefone");
    $link_facebook = get_field("link_facebook");
    $link_instagram = get_field("link_instagram");
    $link_linkedin = get_field("link_linkedin");
    $logo_branca = get_field("logo_branca");
    $logo_atratis = get_field("logo_atratis");
  }
}
wp_reset_postdata();
?>

<section class="bg-gray w-100" id="contato">
  <div class="container">
    <div class="w-100">
      <div class="row gy-5 pb-4 pt-5 bottom-line">
        <div class="col-lg">
          <p class="text-white "><?php echo $endereco_linha_1?></p>
          <p class="text-white "><?php echo $endereco_linha_2?></p>
        </div>
        <div class="col-md-1 d-none d-lg-block">
        </div>
        <div class="col-lg">
          <p class="text-white ">Contato</p>
          <p class="text-white "><?php echo $telefone ?></p>
        </div>
        <div class="col-md-3 d-none d-lg-block">
        </div>
        <div class="col-lg">
          <div class="d-flex justify-content-lg-end justify-content-center align-items-right h-100">
            <a href="<?php echo $link_facebook?>" class="align-self-center grow-hover px-2"><svg
                xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 50 50" width="18px" height="18px">
                <path
                  d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z" />
              </svg></a>
            <a href="<?php echo $link_instagram?>" class="align-self-center grow-hover px-2"><svg
                xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 26 26" width="18px" height="18px">
                <path
                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
              </svg></a>
            <a href="<?php echo $link_linkedin?>" class="align-self-center grow-hover px-2"><svg
                xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 30 30" width="18px" height="18px">
                <path
                  d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z" />
              </svg></a>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100">
      <div class="row gy-5 pb-4 pt-4">
        <div class="col">
          <a href="#home">
            <img alt="Logo Hublife" src="<?php echo $logo_branca?>">
          </a>
        </div>
        <div class="col d-flex justify-content-end">
          <a href="http://www.atratis.com.br" class="grow-hover">
            <img alt="Atratis Logo" src="<?php echo $logo_atratis?>">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
  integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function() {
  $('#destaque').owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    autoHeight: true
  });
});
</script>

<?php wp_footer(); ?>

</body>

</html>