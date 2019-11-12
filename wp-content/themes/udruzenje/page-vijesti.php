<?php $args = array(
  'posts_per_page'   => 10,
  'offset'           => 0,
  'cat'         => '',
  'category_name'    => 'clanci',
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
<?php get_header(); ?>

<?php $posts_array = get_posts( $args ); ?>

<div class="grid-container">

	<h2>Vijesti</h2>

	<div class="grid-x">
	<div class="cell large-8">

    <?php foreach( $posts_array as $post ) : setup_postdata( $post ); //echo $post->post_title; ?>
    <a href="<?php the_permalink() ?>" class="vijesti">
      <h5 class=""><?php the_title(); ?></h5>
      <p><?php the_excerpt(); ?></p>
    </a>
    <?php wp_reset_postdata(); endforeach; // END OF LOOP ?>
		


	</div>
	<div class="cell large-4">
		
		<div class="card">
			<div class="card-divider">
			   Facebook
			</div>
			<div class="card-section">
		    	<?php get_template_part('facebook'); ?>
		 	</div>
		</div> 

	</div>
</div>

</div>

<?php get_footer(); ?>