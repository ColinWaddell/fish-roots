

<?php while (have_posts()) : the_post(); ?>
  <div class="row">

    <div class="col-xs-4 home-thumbnail">
      <?php the_post_thumbnail(); ?>  
    </div>  

    <div class="col-xs-8">
      <?php the_content(); ?>
    </div>  

  </div>
<?php endwhile; ?>


