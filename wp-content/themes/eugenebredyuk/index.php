<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>        
      <p><?php the_permalink(); ?></p>        
	
	<?php endwhile; else : ?>
	
	  <p><?php _e( 'Sorry, no results found.', 'treehouse-portfolio' ); ?></p>
	
	<?php endif; ?>
    
    </div>
  </div>
</section>

<?php get_footer(); ?>