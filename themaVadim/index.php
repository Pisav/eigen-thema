<!-- De header toevoegen -->
<?php get_header(); ?>
<!-- De wordpress loop -->
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
<article class="bericht">
<div class='container'>
	<a href='<?php the_permalink() ?>'>
        <h2><?php the_title(); ?></h2></a>
<?php the_content();?>
</div>
</article>
<!-- Einde container! -->
    <?php endwhile; ?>
<?php endif; ?>
<!-- einde wordpress loop -->
<!-- De footer toevoegen -->
<?php get_footer(); ?>