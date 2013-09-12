<footer>
  <div class="content-info container" role="contentinfo">
    <div class="row">
      <div class="col-lg-4">
        <p>Andrew T Fish BDS MFDS RCS(Edin)<br/>Altrincham Dental Practice,<br />63 Manchester Road,<br />WA14 4RH,<br/><strong>0161 928 2886</strong></p>
        <p><a href="mailto:Contact@AndrewFish.co.uk">Contact@AndrewFish.co.uk</a></p>
      </div>
      <div class="col-lg-8 business-logos">
        <a target="_blank" href="http://www.straumann.co.uk/"><img src="<?php echo home_url('/assets/img/straumann.png'); ?>" alt=""></a>
        <br />
        <a target="_blank" href="http://www.geistlich-surgery.com/home_en.html"><img src="<?php echo home_url('/assets/img/geistlich-surgery.png'); ?>" alt=""></a>
        <br />
        <a target="_blank" href="http://www.geistlich.com/index.cfm?setlan=en"><img src="<?php echo home_url('/assets/img/geistlich-biomaterials.png'); ?>" alt=""></a>
      </div>
    </div>
    

    <hr />

    <div class="row">
      <div class="col-lg-12">
        <?php dynamic_sidebar('sidebar-footer'); ?>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
