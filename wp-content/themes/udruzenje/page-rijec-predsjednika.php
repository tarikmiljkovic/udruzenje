<?php get_header(); ?>

<div class="grid-container">
	<h2><?php single_post_title(); ?> </h2>

	<div class="grid-x grid-padding-x">
		<div class="cell large-8">
		
		<!-- Echo Post Content -->
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();	
            get_template_part( 'content', get_post_format() );
		endwhile; endif;
		?>

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