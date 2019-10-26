<?php $args = array(
	'post_type' => 'page',
	'name'   => 'dokumenti',
   // 'post_type' => 'attachment'
);
?>

<?php  $posts_array = get_posts( $args ); ?>

<?php // $the_query = new WP_Query( $args )  ?> 

<?php get_header(); ?>

<div class="grid-container">

	<h2><?php single_post_title(); ?> </h2>

	<div class="grid-x grid-padding-x">
		<div class="cell large-8">

			<?php  if ( $posts_array) { 

					foreach ($posts_array as $post) :

						

						$args = array(
							    'post_type'   => 'attachment',
							    // 'numberposts' => -1,
							    'post_status' => 'any',
							    'post_parent' => $post->ID,
							    'exclude'     => get_post_thumbnail_id(),
							);

						$attachments = get_posts( $args );

							if ( $attachments ) {
							    foreach ( $attachments as $attachment ) {
							        // echo apply_filters( 'the_title', $attachment->post_title );
							        $link = wp_get_attachment_url( $attachment->ID );
							        echo '<a class="stavke" href="'. $link .  '">' . '<i class="fas fa-file-pdf"></i>' . $attachment->post_title  . '</a>';
							        
							    }
							}

				    endforeach; 
   					wp_reset_postdata();
   					}


				?>
	
	   
  



          

	</div>
	<div class="cell large-4">
		
		<div class="card">
			<div class="card-divider">
			   Facebook
			</div>
			<div class="card-section">
		    	<!-- <?php get_template_part('facebook'); ?> -->
		 	</div>
		</div> 

	</div>
</div>

</div>

<?php get_footer(); ?>