<?php 
// header toevoegen
get_header();


// de wordpress loop
if(have_posts() ) :
	while (have_posts() ) : the_post(): 
		?>
		<article class="bericht">
			<div class="container">	
				<a href="<?php the_permalink()?>"><h2><?phpthe_title(); ?></h2></a>
				<?php the_content() ?>
			</div> <!-- einde container -->
		</article>
	
<?php endwhile;

else :
	echo '<p>er zijn geen berichten gevonden</p>';
endif;
// einde wordpress loop
// footer toevoegen
get_footer();
 ?>