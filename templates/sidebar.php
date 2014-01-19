<?php dynamic_sidebar('sidebar-primary'); ?>


<!-- Add Random Testimonial To Sidebar-->

<h3>Testimonials</h3>

<?php
$id = get_cat_ID( 'testimonials' ); 

$args=array(
  'cat' => $id,
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 5,
  'caller_get_posts'=> 5,
  'post__not_in' => array( get_the_ID() )
);

$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {

  while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <div class="row testimonials-list">
      <div class="col-sm-12">
          <p><i><?php the_excerpt(); ?></i></p>
          <h4><i>-<?php the_title(); ?></i></h4>
          <hr />
      </div>
    </div>

<?php endwhile; }; ?>
<?php wp_reset_query(); ?>

