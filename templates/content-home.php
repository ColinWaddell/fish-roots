

<?php while (have_posts()) : the_post(); ?>
  <figure class="home-carousel">
    <div class="row">

      <div class="col-sm-12">
        <?php the_content(); ?>
      </div>  

    </div>
  </figure>
<?php endwhile; ?>


