<?php get_header(); ?>

<?php $args = array(
  'posts_per_page'   => 10,
  'offset'           => 0,
  'cat'         => '',
  'category_name'    => 'vijesti',
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'post',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'author_name'    => '',
  'post_status'      => 'publish',
  'suppress_filters' => true,
  'fields'           => '',
);


?>



<?php $posts_array = get_posts( $args ); ?>

<div class="grid-container">
  


<div class="grid-x">
  <div class="cell large-12">
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php single_post_title();  ?> </h2>
        <i><?php echo get_the_date(); ?></i>
        <p><?php the_content(); ?></p>
   
 
      <?php endwhile; ?>

  </div>
</div>
    

</div>  

<?php get_footer(); ?>