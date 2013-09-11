<div class="row">
  <div class="col-lg-12">
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</div>

<div class="row">
  <div class="col-lg-8">
    <br />
    <?php echo do_shortcode('[vsgmap width="100%" height="425" address="Altrincham Dental Practice, 63 Manchester Road, WA14 4RH, England"]'); ?>
  </div>
  <div class="col-lg-4">
    <?php echo do_shortcode('[cscf-contact-form]'); ?>
  </div>
</div>
