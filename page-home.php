<?php
/**
 * Template Name: Home page template
 * Template Post Type: page
 * The template file for any page
 *
 */
get_header(); ?>
<main role="main">
    <?php if ( have_posts() ) : ?>
        <?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="pasport">
		<div class="container">
			<p class="title"><?php the_field('header-1'); ?></p>
			<p class="title-2"><?php the_field('header-2'); ?></p>
			<p class="text-img"><img src="<?php bloginfo('template_url'); ?>/img/galka.png" alt=""><span><?php the_field('header-3'); ?></span></p>
			<div class="block-button">
				<button>
					<a href="<?php bloginfo('url'); ?>/visa-type"><?php the_field('buy-visa'); ?></a>
				</button>
			</div>
		</div>
	</div>
         <div class="wrapper-type-visa">
		    <div class="container">
                <div class="block-title-btn">
                    <div class="block-left">
                        <p class="title-2"><?php the_field('more-visa'); ?></p>
                    </div>
                    <div class="block-right">
					<div class="block-button">
						<button>
							<a href="<?php bloginfo('url'); ?>/visa-type" ><?php the_field('visa-type'); ?></a>
						</button>
					</div>
				</div>
         </div>
         <div class="row">
             <?php if( have_rows('vises') ) : ?>
                       <?php $count=0; ?>
                       <?php while ( have_rows('vises') ) : the_row(); ?> 
             <div class="col-sm-4">
					<div class="block-baners">
						<div class="block-top">
							<p class="name"><?php the_sub_field('text-name'); ?></p>
							<p class="deis"><?php the_sub_field('text-time'); ?></p>
						</div>
						<div class="block-bottom">
							<p class="cenaas"><?php the_sub_field('text-price'); ?></p>
						</div>
					</div>
				</div>
                <?php  $count++; ?>
                <?php endwhile; ?>
                <?php else:
                    print "<p></p>";
                endif; ?>
         </div>
		<div class="row">
				 <?php if( have_rows('visa-top') ) : ?>
                       <?php $count=0; ?>
                       <?php while ( have_rows('visa-top') ) : the_row(); ?>
			<div class="block-baners-lines">
				<div class="block-left">
					<p class="name"><?php the_sub_field('long-visa'); ?></p>
					<p class="deis"><?php the_sub_field('howlongvisa'); ?></p>
				</div>
				<div class="block-right">
					<p class="cenaas"><?php the_sub_field('cost-visa-price'); ?></p>
				</div>
			</div>
			<?php  $count++; ?>
                <?php endwhile; ?>
                <?php else:
                    print "<p></p>";
                endif; ?>
		</div>
				</div>		
        </div>
     </div>
          <div class="cause">
		    <div class="container">
               <p class="title"><?php the_field('reasons'); ?></p>
                <div class="row">
                   <?php if( have_rows('reason-sx') ) : ?>
                       <?php $count=0; ?>
                       <?php while ( have_rows('reason-sx') ) : the_row(); ?> 
                           <div class="col-md-4 col-sm-6">
                                <div class="block-causes">
                                    <p><?php the_sub_field('icon-text'); ?></p>
                                    <img class="img-cause-1" src="<?php the_sub_field('icon', 61); ?>" title="" alt="">
                                </div>
                            </div>
                            <?php  $count++; ?>
                       <?php endwhile; ?>
                   <?php else:
                    print "<p></p>";
                    endif; ?>
                </div>
            </div>
          </div>
           <div class="step">
		       <div class="container">
                   <p class="title"><?php the_field('smtitle'); ?></p>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="block-step step-1">
                                    <p class="num">1</p>
                                    <p class="text"><?php the_field('step-1'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="block-step step-2">
                                    <p class="num">2</p>
                                    <p class="text"><?php the_field('step-2'); ?></p>
                                </div>
				            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="block-step step-3">
                                    <p class="num">3</p>
                                    <p class="text"><?php the_field('step-3'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="block-button">
                            <button>
                                <a href="<?php bloginfo('url'); ?>/visa-type"><?php the_field('onlain'); ?></a>
                            </button>
                   </div>
               </div>
            </div>
            <div class="authenticity">
                <div class="container">
                   <img src="<?php bloginfo("template_url"); ?>/img/bg-authenticity-mobile.png" alt="" class="authenticity-img">
                    <div class="block-authenticity">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>
       <?php //End the loop
                endwhile; ?>	
    <?php  else : 
        echo "<h2>error 404: Page not found</h2>"; 
    endif; ?>
</main>    
<?php get_footer(); ?>