<?php
get_header();

while ( have_posts() ) :
	the_post();

  ?>

  <div class="container">

    <div class="row">
      <div class="col-12">
        <?php the_content();?>
      </div>
    </div>

  </div>

<?php

endwhile;

get_footer();
?>