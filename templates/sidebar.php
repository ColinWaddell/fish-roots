<?php
  if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => '', 'disable_walker' => true));
  endif;
?>

<?php dynamic_sidebar('sidebar-primary'); ?>


<!-- Add Random Testimonial To Sidebar-->

<hr />

<?php
$id = get_cat_ID( 'testimonials' ); 
$args=array(
  'cat' => $id,
  'orderby' => rand,
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 1,
  'caller_get_posts'=> 1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <div class="row testimonials-list">
      <div class="col-sm-12">
          <p><i><?php the_content(); ?></i></p>
          <h4><i>-<?php the_title(); ?></i></h4>
      </div>
    </div>

<?php endwhile; }; ?>
<?php wp_reset_query(); ?>

