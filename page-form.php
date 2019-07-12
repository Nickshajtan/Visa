<?php
/**
 * Template Name: Form page template
 * Template Post Type: page
 * The template file for any page
 *
 */
get_header(); ?>
<div class="checkout">
    <div class="container">
        <h1 class="title"><?php the_field('formpage-title'); ?></h1>
        <div class="block-form">
            <form action="">
                <p class="title-1"><?php the_field('formpage-subtitle1'); ?></p>
                <div class="block-input">
                    <div class="block">
                        <p><?php the_field('data_in'); ?></p>
                        <input id="calendar-1" class="date" type="text" value="" name="date-1" >
                    </div>
                    <div class="block">
                        <p><?php the_field('data_out'); ?></p>
                        <input id="calendar-2" class="date" type="text" value=""  name="date-2">
                    </div>
                </div>
                <span class="lines"></span>
                <p class="title-1"><?php the_field('formpage-subtitle2'); ?></p>
                <div class="block-input">
                    <p><?php the_field('fpdesc1'); ?></p>
                    <div class="block">
                        <input type="text" placeholder="<?php the_field('personal1'); ?>" name="surname">
                    </div>
                    <div class="block">
                        <input type="text" placeholder="<?php the_field('personal2'); ?>"  name="name">
                    </div>
                    <div class="block mod">
                        <input type="text" placeholder="<?php the_field('personal3'); ?>"  name="patronymic">
                    </div>
                </div>
                <div class="block-input">
                    <div class="block">
                        <p><?php the_field('bdate'); ?></p>
                        <input id="calendar-3" class="date" type="text" value="" name="date-3">
                    </div>
                    <div class="block">
                        <p><?php the_field('passport'); ?></p>
                        <input id="calendar-4" class="date" type="text" value=""  name="date-4">
                    </div>
                </div>
                <span class="lines"></span>
                <p class="title-1"><?php the_field('cdate'); ?></p>
                <div class="block-input">
                    <div class="block">
                        <input type="text" placeholder="<?php the_field('yphone'); ?>" name="phone">
                    </div>
                    <div class="block">
                        <input type="text" placeholder="<?php the_field('ye-mail'); ?>" name="mail-1">
                    </div>
                </div>
                <span class="lines"></span>
                <p class="title-1"><?php the_field('formpage-subtitle4'); ?></p>
                <div class="block-input">
                    <div class="block">
                        <input type="text" placeholder="<?php the_field('fio'); ?>" name="FIO">
                    </div>
                    <div class="block">
                        <input type="text" placeholder="<?php the_field('yEmail'); ?>" name="fast-mail">
                    </div>
                    <div class="block mod">
                        <input type="text" placeholder="<?php the_field('yPhone'); ?>" name="fast-phone">
                    </div>
                </div>
                <span class="lines"></span>
                <div class="block-input">
                    <div class="block-left">
                        <p><?php the_field('passcan'); ?></p>
                        <label class="file-upload">
                            <input type='file' id="upload" />
                            <input type="text" placeholder="<?php the_field('scan-file'); ?>" id="filename">
                            <span><?php the_field('scan-file'); ?></span>
                        </label>
                        <p><a href=""><?php the_field('add_man'); ?></a></p>
                        
                    </div>
                    <div class="block-right">
                        <div class="block-button">
                            <button>
                                <?php the_field('scan-b-2'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>