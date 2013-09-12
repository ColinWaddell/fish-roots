

<?php while (have_posts()) : the_post(); ?>
  <div class="row">

    <div class="col-sm-4">
      <?php the_post_thumbnail(); ?>  
    </div>  

    <div class="col-sm-8">
      <?php the_content(); ?>
    </div>  

  </div>
<?php endwhile; ?>


