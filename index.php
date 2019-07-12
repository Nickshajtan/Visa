<?php
/**
 * The main template file
 *
 */
get_header(); ?>
<main role="main">
    <?php if ( have_posts() ) : ?>
        <?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <h2><?php the_title(); ?></h2>
             <p><?php the_content(); ?></p>
        </article>
       <?php //End the loop
                endwhile; ?>	
    <?php  else : 
        echo "<h2>error 404: Page not found</h2>"; 
    endif; ?>
</main>    
<?php get_footer(); ?>