<?php
/**
 * Template Name: Application page template
 * Template Post Type: page
 * The template file for any page
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
             <?php 
                $image = get_field('image');
                if( !empty($image) ): ?>
    <img class="app-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
             <?php endif; ?>
             <p><?php the_content(); ?></p>
             <div class="stat-form">
                 <p class="title-2"><?php the_field('title2'); ?></p>
				 <?php switch( get_language_attributes() ) {
					case 'lang="ru-RU"':
					echo do_shortcode( '[contact-form-7 id="44" title="Статус оформления"]' );
					break;
					case 'lang="en-GB"':
					echo do_shortcode( '[contact-form-7 id="216" title="Статус оформления_en"]' );
					break;
					}
				?>	
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