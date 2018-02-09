<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marinapapagayosuites
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
          <div class="header-container ">
              
              <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Marina Papagayo Suites"></a>
              <div class="header-right flex-container-sb">
                <div class="header-contact">
                  <a href="#" class="btn success"><i class="fa fa-envelope-o"></i><span class="text">Contact Us</span></a>
                </div>
                <div class="header-btn-menu">
                   <button id="btn-menu" class="nav-btn-menu">
                       <i class="fa fa-bars"></i>
                   </button>
                </div>
              </div>
              
          </div>
          
      </header>
      <div class="nav-container">
         <?php
			wp_nav_menu(array(
				'theme_location' => 'header',
				'menu_id' => 'nav-menu',
				'container' => 'nav',
				'container_class' => 'nav-menu',
				'container_id' => '',
				'menu_class' => 'nav-menu-ul',
			));
			?>
        
    </div>


