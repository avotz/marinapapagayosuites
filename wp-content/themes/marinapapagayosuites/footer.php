<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marinapapagayosuites
 */

get_template_part('template-parts/content', 'footer');
?>

<div id="contact-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
         <h2>Contact Us</h2>
         <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form"]'); ?>
              
        
    </div>
	
<?php wp_footer(); ?>

</body>
</html>
