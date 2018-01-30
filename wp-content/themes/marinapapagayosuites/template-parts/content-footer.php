<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marinapapagayosuites
 */

?>
 <footer class="section footer fp-auto-height">
    <div class="inner">
        <div class="footer-container flex-container-sb">
            <div class="footer-item">
                <h3>Marina Papagayo Suites</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
            </div>
            <div class="footer-item footer-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id' => 'footer-menu',
                    'container' => 'nav',
                    'container_class' => 'footer-menu',
                    'container_id' => '',
                    'menu_class' => 'footer-menu-ul',
                ));
                ?>
            </div>
            <div class="footer-item footer-contact">
                <h3>(506) 2665-8746 – (407) 557-8717</h3>
                <p>reservations@marinapapagayosuites.com</p>
                <div class="footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="inner  flex-container-sb">
            <div class="copy">
            &copy; 2018 Marina Papagayo Suites
            </div>
            <div class="avotz">
            <a href="#"><i class="icon-avotz"></i> Avotz Web Works</a>
            </div>
        </div>
    </div>
    </footer>