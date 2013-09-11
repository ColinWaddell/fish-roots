<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="jumbo">
    <div class="container">
      <div class="row hidden-sm hidden-xs">
        <div class="col-sm-12 pull-right home-contact">
          <p>Altrincham Dental Practice, 63 Manchester Road, WA14 4RH - 0161 928 2886</p>
        </div>
      </div>

      <div class="row hidden-sm hidden-xs">
        <div class="col-xs-4 bubble">
          <img src="<?php echo home_url('/assets/img/bubble1.jpg'); ?>" alt="">
        </div>

        <div class="col-xs-4 bubble">
          <img src="<?php echo home_url('/assets/img/bubble2.jpg'); ?>" alt="">
        </div>

        <div class="col-xs-4 bubble">
          <img src="<?php echo home_url('/assets/img/bubble3.jpg'); ?>" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="document-body">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="main <?php echo roots_main_class(); ?>" role="main">
          <?php include roots_template_path(); ?>
        </div><!-- /.main -->
        <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </div>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
