<?php $args = array(
	'post_type' => 'attachment',
	'name'   => 'statut',
    'post_type' => 'attachment'
);
?>

<?php  $posts_array = get_posts( $args ); ?>

<?php get_header(); ?>

	<div class="grid-container">

	<h2><?php single_post_title(); ?> </h2>

	<div class="grid-x grid-padding-x">
	<div class="cell large-6">
		
		<form data-abide novalidate>
	  	
	  	<div data-abide-error class="alert callout" style="display: none;">
		    <p><i class="fi-alert"></i> Molimo, popunite kontakt formu u potpunosti.</p>
	  	</div>

      	<div class="cell small-12">
	      	<label>Naziv poslovnog subjekta
	          <input type="text" placeholder="Naziv poslovnog subjekta" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="text">
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

      	<div class="cell small-12">
	      	<label>Sjedište
	          <input type="text" placeholder="Sjedište" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="text">
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

      	<div class="cell small-12">
	      	<label>Ovlaštena osoba
	          <input type="text" placeholder="Ovlaštena osoba" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="text">
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

	          	<div class="cell small-12">
	      	<label>E-Mail
	          <input type="text" placeholder="E-Mail" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="text">
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

	          	<div class="cell small-12">
	      	<label>JIB
	          <input type="text" placeholder="JIB" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="number">
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

	          	<div class="cell small-12">
	      	<label>Kontakt telefon
	          <input type="text" placeholder="Kontakt telefon" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="number">
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

      	<div class="cell small-12">
	      	<label>Poruka
	      		<textarea name="" id="" placeholder="Poruka" cols="30" rows="10"></textarea>
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

	    <fieldset class="fieldset">
		  <legend data-toggle="modal"><a href="#">Statut</a></legend>
		  <input id="checkbox12" type="checkbox"><label for="checkbox12">Prihvatam statut</label>
		</fieldset>
					  
			 
      <fieldset class="cell large-6">
        <button class="button" type="reset" value="Reset">Brisi unose</button>
        <button class="button" type="submit" value="Submit">Posalji</button>
      </fieldset>

		<div class="large reveal" id="modal" data-reveal>
		  <h5>Statut</h5>
		  <object data="https://www.udruzenje.ba/wp-content/uploads/2019/08/statut.pdf" type="application/pdf" width="100%" height="1000px"></object>
		  <button class="close-button" data-close aria-label="Close reveal" type="button">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
						

			</form>

	</div>

	<div class="cell large-6">
		
		<?php  // if ( $posts_array) { 

		// 		foreach ($posts_array as $post) :

		// 			$args = array(
		// 				    'post_type'   => 'attachment',
		// 				    // 'numberposts' => -1,
		// 				    'post_status' => 'any',
		// 				    'post_parent' => $post->ID,
		// 				    'exclude'     => get_post_thumbnail_id(),
		// 				);

		// 			$attachments = get_posts( $args );

		// 				if ( $attachments ) {
		// 				    foreach ( $attachments as $attachment ) {
		// 				        // echo apply_filters( 'the_title', $attachment->post_title );
		// 				        $link = wp_get_attachment_url( $attachment->ID );
		// 				        echo '<a class="stavke" href="'. $link .  '">' . '<i class="fas fa-file-pdf"></i>' . $attachment->post_title  . '</a>';
						        
		// 				    }
		// 				}

		// 	    endforeach; wp_reset_postdata();

		//} ?>

				<!-- Echo Post Content -->
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();	
            get_template_part( 'content', get_post_format() );
			endwhile; endif;
		?>

		<a class="stavke" href="https://www.udruzenje.ba/wp-content/uploads/2019/08/statut.pdf"><i class="fas fa-file-pdf"></i>statut</a>

		

	</div>
</div>

</div>

<?php get_footer(); ?>