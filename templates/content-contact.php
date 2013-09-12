<div class="row">
  <div class="col-md-8">
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
  <div class="col-md-4">
    <p><strong>Andrew T Fish BDS MFDS RCS(Edin)</strong>
    <br />
    <a href="http://www.altrinchamdentalpractice.co.uk/" target="_blank">Altrincham Dental Practice</a>
    <br />
    63 Manchester Road, Altrincham
    <br />
    Greater Manchester, WA14 4RH  </p></div>
</div>
<hr />
<div class="row">
  <div class="col-md-8">
    <br />
    <?php echo do_shortcode('[vsgmap width="100%" height="425" address="Altrincham Dental Practice, 63 Manchester Road, WA14 4RH, England"]'); ?>
  </div>
  <div class="col-md-4">
    <h4>Contact Me</h4>
    <?php echo do_shortcode('[cscf-contact-form]'); ?>
  </div>
</div>
