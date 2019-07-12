<?php
/**
 * Template Name: Contact page template
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
             <div class="block-contact-main">
            <div class="block-info">
				<?php if( have_rows('num') ) : ?>
				<?php while ( have_rows('num') ) : the_row(); ?>
                <p><img class="contact-phone" src="<?php bloginfo("template_url"); ?>/img/contact-phone.png" alt=""><?php the_sub_field('phone'); ?> <br>
                 </p>
				<?php endwhile; ?>
				<?php endif; ?>
                <p><img class="contact-mail" src="<?php bloginfo("template_url"); ?>/img/contact-mail.png" alt=""><a href="mailto:info@visauae.kz?subject"><?php the_field('email'); ?></a></p>
                <p><img class="contact-adress" src="<?php bloginfo("template_url"); ?>/img/contact-adress.png" alt=""><?php the_field('address'); ?></p>
            </div>
            <div class="block-forma">
				<?php switch( get_language_attributes() ) {
					case 'lang="ru-RU"':
					echo do_shortcode( '[contact-form-7 id="38" title="Обратная связь"]' );
					break;
					case 'lang="en-GB"':
					echo do_shortcode( '[contact-form-7 id="215" title="Обратная связь_en"]' );
					break;
					}
				?>	
            </div>
        </div>
        <div class="cart-contact">
           <?php 
			$google = get_field('google-no-key');
			$location = get_field('googlemap');
			if( !empty($google) ): ?>
					<?php the_field('google-no-key'); ?>
            <?php elseif( !empty($location) ): ?>
            <div class="acf-map">
	            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo                        $location['lng']; ?>"></div>
            </div>
            <?php endif; ?>
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