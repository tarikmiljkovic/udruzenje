<?php $args = array(
  'posts_per_page'   => 100,
  'offset'           => 0,
  'cat'         => '',
  'category_name'    => 'firme',
  'orderby'          => 'title',
  'order'            => 'ASC',
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

<?php $the_query = new WP_Query( $args )  ?>

<?php get_header(); ?>



	
	<div class="grid-container">

	<h2><?php single_post_title(); ?> </h2>

	<div class="grid-x grid-padding-x">
		<div class="cell large-8">
		
		<div class="grid-x grid-padding-x">

	    <?php foreach( $posts_array as $post ) : setup_postdata( $post ); //echo $post->post_title; ?>
   		<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
		
		<!-- Card -->
		<a class="cell large-4" href="<?php the_permalink(); ?>"> 
			<div class="card">
			  <img src="<?php echo($featured_img_url); ?>">
			  <div class="card-section">
			    <h6><?php the_title(); ?></h6>
			    <p><?php the_excerpt(); ?></p>
			  </div>
			</div> 
		</a>
		<!-- End Card -->

		
		<?php    wp_reset_postdata(); endforeach; // END OF LOOP ?>

		</div> <!-- End large-4 -->
	</div> <!-- End inner grid-x -->


	
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