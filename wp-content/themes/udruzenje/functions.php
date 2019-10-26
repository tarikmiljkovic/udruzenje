<?php
 
// function add_stylesheet_to_head() {
//     echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>";
// }
 
// add_action( 'wp_head', 'add_stylesheet_to_head' );


 add_action('get_header', 'my_filter_head');

  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }


add_theme_support( 'post-thumbnails' ); 


add_filter( 'excerpt_length', function($length) {
    return 20;
} );

function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
 background-image: url("<?php bloginfo('template_directory');  ?>/slike/logo/logo.svg");  //Add your own logo image in this url 

} 
body.login div#login h1{
	height: 150px;
	padding-bottom: 20px;
	display: block;
}

body.login div#login h1 a {
	width: 100%;
	height: 100%;
	background-size: contain;
}

</style>
 <?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );


?>