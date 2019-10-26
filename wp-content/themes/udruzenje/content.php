<?php // get_header(); ?>

<?php if(is_home()){ ?>
	<a href="<?php the_permalink(); ?>">
	<h3><?php the_title(); ?></h3>
</a>
<?php } ?>


<?php 

if(is_home()){
	the_excerpt();
}else{
	the_content();
}

?>