 <?php
/**
 * The template for displaying the header
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <?php   if (is_page('16') ||  is_page('194')) : ?>
    <script src='http://maps.googleapis.com/maps/api/js?sensor=false' type='text/javascript'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/map.js" type="text/javascript"></script>
    <?php endif; ?>
</head>    
<body>
    <header>
       <div class="container">
		<div class="top-bar">
			<div class="row">
                <div class="col-sm-3">
					<div class="logo">
                        <?php the_custom_logo();?>
                    </div>
                </div>
                <div class="col-sm-6">
                   <div class="btn-menu" onclick="hide_menu('#menu'); return false;"></div>
                    <?php wp_nav_menu('theme_location=primary&menu_id=menu'); ?>
                </div>
                <div class="col-sm-2">
                    <div class="block-mail">
                       <?php dynamic_sidebar( 'header-area-first' ); ?>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="block-language">
                        <span class="btn-language"></span>
                        <?php dynamic_sidebar( 'header-area-second' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if ( is_home() || is_front_page() ) : ?> 
            <div class="content-bar">
            <div class="row">
                <div class="col-sm-7 col-xs-7">
                    <p class="title"><?php the_field('header-main'); ?></p>
                </div>
                <div class="col-sm-5 col-xs-5">
					<?php 
                	$imag = get_field('im-size');
                	if( !empty($imag) ): ?>
    		<img class="img-title" src="<?php echo $imag['url']; ?>" alt="<?php echo $imag['alt']; ?>" />
             <?php endif; ?>
                </div>
            </div>
            <div class="block-text">
                <p class="title-1"><?php the_field('header-main-title'); ?></p>
                <p><?php the_field('header-main-2'); ?></p>
            </div>
            <div class="block-form">
                <h2 class="title"><?php the_field('get-visa'); ?></h2>
                <form action="">
                   <?php if( have_rows('country') ) : ?>
                    <div class="block">
                        <p><?php the_field('man-2'); ?></p>
                        <select id="select-country">
                           <?php while ( have_rows('country') ) : the_row(); ?>
                            <option value="Узбекистан"><?php the_sub_field('yzbek'); ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                  
                    <div class="block">
                        <p><?php the_field('man-1'); ?></p>
                        <select id="select-citizenship">
                            <?php while ( have_rows('country') ) : the_row(); ?>
                            <option value="Узбекистан"><?php the_sub_field('yzbek'); ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <?php else:
                    print "<p></p>";
                    endif; ?>
                    <div class="block-button">
                        <button>
                            <a href="<?php bloginfo('url'); ?>/visa-type"><?php the_field('buy-visa'); ?></a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <?php endif; ?>
       </div>
    </header>
<script>
    $('.block-language select option[value="ru"]').html("RU");
    $('.block-language select option[value="en"]').html("EN");
    $('.block-language label').css({display:"none"});
</script>