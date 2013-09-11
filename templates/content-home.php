

<?php while (have_posts()) : the_post(); ?>
  <figure class="home-carousel">
    <div class="row">

      <div class="col-sm-6">
        <div class="thumbnail">
          <img src="<?php echo site_url('/assets/img/andy.jpg') ?>" alt=""> 
        </div>
      </div>  

      <div class="col-sm-6">
        <?php the_content(); ?>
      </div>  

    </div>
  </figure>
<?php endwhile; ?>


