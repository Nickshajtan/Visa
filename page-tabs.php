<?php
/**
 * Template Name: Visa types page template
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
             <div class="block-type-visa">     
            <?php if( have_rows('tabs') ) : 
                $count = 0; ?>
                 <ul class="nav nav-tabs">
                <?php while ( have_rows('tabs') ) : the_row(); ?>                         
                    <li>
                         <a data-toggle="tab" href="#menu-<?php echo $count++; ?>">
                             <span class="min-text"><?php the_sub_field('trip-type'); ?></span>
                              <span class="max-text"><?php the_sub_field('trip-time'); ?></span>
                         </a>
                     </li>
                <?php endwhile; ?>     
                </ul>
                <?php else :
                echo '<h2>404 : Page not found </h2>';
                endif; ?>    
                 <div class="tab-content">
                     <?php if( have_rows('tab-content') ) :
                     $count = 0;
                     while ( have_rows('tab-content') ) : the_row(); ?>
                         <div id="menu-<?php echo $count++; ?>" class="tab-pane fade">
                             <p class="text"><?php the_sub_field('tab-text'); ?></p>
                             <div class="row">
                                <?php if( have_rows('tab-content-suffix') ) :
                                while ( have_rows('tab-content-suffix') ) : the_row(); ?>
                                      <div class="col-sm-3">
                                        <div class="block-infos">
                                            <p class="title marg-15"><?php the_sub_field('Title-1'); ?></p>
                                            <div class="colos">
                                                <p class="cen"><?php the_sub_field('Title-2'); ?></p>
                                                <div class="strel">
                                                    <p><?php the_sub_field('Title-3'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?> 
                                <?php else :
                                 echo '<p></p>';
                                 endif; ?>
                             </div> 
                             <div class="block-button">
                                <button>					
				<?php switch( get_language_attributes() ) {
					case 'lang="ru-RU"': ?>
					 <a href="<?php bloginfo('url')?>/form"><?php the_field('buy-visa'); ?></a>
				<?php break;
					case 'lang="en-GB"': ?>
				     <a href="<?php bloginfo('url')?>/form-2"><?php the_field('buy-visa'); ?></a>
				<?php break;
					}
				?>					
                                 </button>
                            </div>
                         </div>
                     <?php 
                        endwhile; ?> 
                     <?php else :
                     echo '<h2>404 : Page not found </h2>';
                     endif; ?>
                 </div>
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
<script>
    $("ul.nav-tabs li:first").addClass("active");
    $(".tab-content .tab-pane:first").addClass("in active");
</script>
<?php get_footer(); ?>