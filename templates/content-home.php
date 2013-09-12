

<?php while (have_posts()) : the_post(); ?>
  <figure class="home-carousel">
    <div class="row">

      <div class="col-sm-4">
        <div class="thumbnail">
          <?php the_post_thumbnail(); ?>  
        </div>
      </div>  

      <div class="col-sm-8">
        <?php the_content(); ?>
      </div>  

    </div>
  </figure>
<?php endwhile; ?>


