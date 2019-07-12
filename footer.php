 <?php
/**
 * The template for displaying the footer
 *
 */
?>
        <footer>
            <div class="container">
                <div class="pull-left">
                    <p><?php dynamic_sidebar( 'footer-area-first' ); ?></p>
                </div>
                <div class="pull-right">
                    <p><?php dynamic_sidebar( 'footer-area-second' ); ?><img src="<?php bloginfo("template_url"); ?>/img/footer-logo.png" alt=""> Jnetwork</p>
                </div>
            </div>
        </footer>
<?php   if (is_page('270') ||  is_page('237')) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/daterangepicker/daterangepicker.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/daterangepicker/moment.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/daterangepicker/daterangepicker.js"></script>
<script>
	$(function(){
    $('#calendar-1').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'DD.MM.YYYY'
        }
    });
    $('#calendar-2').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'DD.MM.YYYY'
        }
    });
    $('#calendar-3').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'DD.MM.YYYY'
        }
    });
    $('#calendar-4').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'DD.MM.YYYY'
        }
    });
});

</script>
<?php endif; ?>
        <?php wp_footer(); ?>
    </body>
</html>