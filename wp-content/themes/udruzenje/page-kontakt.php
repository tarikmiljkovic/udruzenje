<?php

// Functions to filter user inputs
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}    

// Functions to filter user inputs
function filterTelefon($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_NUMBER_INT);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[0-9\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
} 

function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}
 
// Define variables and initialize with empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $subject = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate user name
    if(empty($_POST["ime"])){
        $nameErr = "Please enter your name.";
    } else{
        $name = filterName($_POST["ime"]);
        if($name == FALSE){
            $nameErr = "Molimo unesite ime.";
        }
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";     
    } else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Molimo unesite E-Mail.";
        }
    }
    
    // Validate message subject
    if(empty($_POST["telefon"])){
        $subject = "";
    } else{
        // $subject = filterString($_POST["subject"]);
        $telefon = $_POST["telefon"];
    }
    
    // Validate user comment
    if(empty($_POST["poruka"])){
        $messageErr = "Molimo unesite poruku.";     
    } else{

    	$poruka = filterString($_POST["poruka"]);
        $message = <<<EOT
		
"$poruka"
Telefon: "$telefon"
EOT;

        
        if($message == FALSE){
            $messageErr = "Molimo unesite poruku.";
        }
    }
    
    // Check input errors before sending email
    if(empty($nameErr) && empty($emailErr) && empty($messageErr)){
        // Recipient email address
        $to = 'tarikmiljkovic@outlook.com';
        
        // Create email headers
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            echo '<div class="callout secondary">
  <h5>This is a secondary callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">Its dangerous to go alone, take this.</a>
</div>';
        } else{
            echo '<p class="error">Vaša poruka nije uspješno poslana. Molimo pokušajte ponovo!</p>';
        }
    }
} ?>

<?php get_header(); ?>

	<div class="grid-container">

	<h2><?php single_post_title(); ?> </h2>

 	<div class="grid-x grid-padding-x">
	<div class="cell large-6">

		
		<form data-abide novalidate method="post" action="<?php the_permalink(); ?>">
	  	
	  	<div data-abide-error class="alert callout" style="display: none;">
		    <p><i class="fi-alert"></i> Molimo, popunite kontakt formu u potpunosti.</p>
	  	</div>

      	<div class="cell small-12">
	      	<label>Ime
	          <input name="ime" type="text" placeholder="ime" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="text">
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

      	<div class="cell small-12">
	      	<label>E-Mail
	          <input name="email" type="text" placeholder="ime" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="text">
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

      	<div class="cell small-12">
	      	<label>Telefon
	          <input name="telefon" type="text" placeholder="ime" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="number">
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>

      	<div class="cell small-12">
	      	<label>Poruka
	      		<textarea name="poruka" id="" cols="30" rows="10"></textarea>
	          <span class="form-error" id="example1Error1">
	            Niste ispravno unijeli navedeno polje.
	          </span>
	      	</label>
	    </div>


			  
			  
			   

<!-- 			   
			  
			      <div class="cell large-6">
			        <label>European Cars, Choose One, it can't be the blank option.
			          <select id="select" required>
			            <option value=""></option>
			            <option value="volvo">Volvo</option>
			            <option value="saab">Saab</option>
			            <option value="mercedes">Mercedes</option>
			            <option value="audi">Audi</option>
			          </select>
			        </label>
			      </div>
			      <fieldset class="cell large-6">
			        <legend>Check these out</legend>
			        <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
			        <input id="checkbox2" type="checkbox" required><label for="checkbox2">Checkbox 2</label>
			        <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
			      </fieldset> -->
			    
			  
<!-- 			      <fieldset class="cell large-6">
			        <legend>Choose Your Favorite - not required, you can leave this one blank.</legend>
			        <input type="radio" name="pockets" value="Red" id="pocketsRed"><label for="pocketsRed">Red</label>
			        <input type="radio" name="pockets" value="Blue" id="pocketsBlue"><label for="pocketsBlue">Blue</label>
			        <input type="radio" name="pockets" value="Yellow" id="pocketsYellow"><label for="pocketsYellow">Yellow</label>
			      </fieldset> -->
<!-- 			      <fieldset class="cell large-6">
			        <legend>Choose Your Favorite, and this is required, so you have to pick one.</legend>
			        <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
			        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue" required><label for="pokemonBlue">Blue</label>
			        <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
			      </fieldset> -->
		
		
			      <fieldset class="cell large-6">
			        <button class="button" type="reset" value="Reset">Briši unose</button>
			        <button name="slanje" class="button" type="submit" value="Submit">Pošalji</button>
			      </fieldset>

	
			 <!--    </div>
			  </div> -->
			</form>

	</div>

	<div class="cell large-6">
		
		<div class="card">
			<div class="card-divider">
			   Lokacija
			</div>
			<div class="card-section mapa">
		    	
		<div class="card-section mapa">
		    	<iframe width="100%" height="450px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJawTrJuevZkcRP9xRA5nAPms&key=AIzaSyCMNdd-CcA4549NmNNBzw1PNaCxUL7QomQ" allowfullscreen></iframe> 
		 	</div>
		 	</div>
		</div> 

	</div>
</div>

</div>

<?php get_footer(); ?>