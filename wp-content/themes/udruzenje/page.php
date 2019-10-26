<?php get_header(); ?>

	<h2><?php single_post_title(); ?> </h2>

	<div class="grid-x grid-padding-x">
		<div class="cell large-8">
		
		<a href="" class="vijesti">
			<h5>VIjest</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iste praesentium eos eius. Magnam, aliquid ipsum tenetur. Perspiciatis cu..</p>
		</a>
		<a href="" class="vijesti">
			<h5>VIjest</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iste praesentium eos eius. Magnam, aliquid ipsum tenetur. Perspiciatis cu..</p>
		</a>

		<a href="" class="vijesti">
			<h5>VIjest</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iste praesentium eos eius. Magnam, aliquid ipsum tenetur. Perspiciatis cu..</p>
		</a>

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

<?php get_footer(); ?>