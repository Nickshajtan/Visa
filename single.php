<?php
/**
 * The template for displaying all single posts and attachments
 *
 */
get_header(); ?>
<main role="main">
   <div class="other">
        <div class="container">
    <?php if ( have_posts() ) : ?>
        <?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <h1 class="title"><?php the_title(); ?></h1>
             <div class="block-text-about">
                 <p><?php the_content(); ?></p>
             </div>
        </article>
       <?php //End the loop
                endwhile; ?>	
    <?php  else : 
        echo "<h2>error 404: Page not found</h2>"; 
    endif; ?>
       </div>
    </div>
</main>    
<?php get_footer(); ?>