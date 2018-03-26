<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marinapapagayosuites
 */

get_header(); ?>

	<div class="main">

          <div id="fullpage">
            <div class="section active banner" id="section0">
              <div class="inner">
                  <h1 class="animated fadeIn">Marina Papagayo Suites</h1>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>
              </div> 
              
              </div>
            <div class="section suites " id="section1">
               <div class="suites-container flex-container-sb">
                  <div class="suites-text">
                     <h2>Suites</h2>
                     <h3>Design and comfort are perfectly combined here</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat.</p>
                  </div>
                  <div class="suites-cate">
                     <div class="suites-cate-container flex-container-sb">
                      
                     <?php
                    $args = array(
                      'post_type' => 'suite',
                        //'order' => 'ASC',
                      'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                      'posts_per_page' => 6,
                      /*'tax_query' => array(
                        /*array(
                          'taxonomy' => 'view',
                          'field' => 'slug',
                          //'terms' => array('garden'),
                          //'operator' => 'NOT IN',
                        )
                     )*/


                    );


                    $items = new WP_Query($args);
                    // Pagination fix
                    $temp_query = $wp_query;
                    $wp_query = null;
                    $wp_query = $items;
                    $index = 0;
                    if ($items->have_posts()) {
                      while ($items->have_posts()) {
                        $items->the_post();

                        ?>

                            <div class="suites-cate-item <?php /*echo ($post->ID == 33) ? 'large' : '' */?>">
                            <a href="#suite-popup-<?php echo $post->ID; ?>" class="suites-cate-item-link suites-popup-link">
                              <?php if (has_post_thumbnail()) :

                                $id = get_post_thumbnail_id($post->ID);
                              $thumb_url = wp_get_attachment_image_src($id, 'home-item', true);
                              $large_url = wp_get_attachment_image_src($id, 'home-item-large', true);
                              ?>
                                        
                                       
                                  <div class="suites-cate-item-bg" style="background-image: url('<?php echo ($post->ID == 33) ? $large_url[0] : $thumb_url[0] ?>')"></div>
                                        
                                            
                              <?php endif; ?>
                             
                              <div class="suites-cate-item-border">
                                <div class="suites-cate-item-border-left"></div>
                                <div class="suites-cate-item-border-right"></div>
                                <div class="suites-cate-item-content">
                                  <h3 class="suites-cate-item-title"><?php the_title(); ?></h3>
                                  <p class="suites-cate-item-description"><?php the_excerpt(); ?></p>
                                </div>
                              </div>
                            </a>
                            <div id="suite-popup-<?php echo $post->ID; ?>" class="suite-popup white-popup mfp-hide mfp-with-anim">
                                <h3 class="popup-title"><?php the_title(); ?></h3>
                                <div class="popup-thumbnail">
                                  <?php the_post_thumbnail('home-item-large'); ?>
                                </div><!-- .post-thumbnail -->
                                <?php the_content() ?>
                                  
                                

                              </div>
                           


                        </div>
                           

                        
                        
                        <?php

                        $index++;
                      }
                    }

                    ?>


                      
                     </div>
                  </div>

               </div>
            </div>
            <div class="section services" id="section2">
              <div class="inner">
                 <div class="services-container flex-container-sb">
                    <div class="services-item">
                      <a href="#" class="services-item-link">
                         <div class="services-item-bg"></div>
                           <h3>Adventures and tours</h3>
                           <p> sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.</p>
                           <span class="icon">
                             <i class="fa fa-info"></i>
                           </span>
                        
                      </a>
                    </div>
                    <div class="services-item">
                      <a href="#" class="services-item-link">
                         <div class="services-item-bg"></div>
                           <h3>Concierge</h3>
                           <p> sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.</p>
                           <span class="icon">
                             <i class="fa fa-info"></i>
                           </span>
                        
                      </a>
                    </div>
                    <div class="services-item">
                      <a href="#" class="services-item-link">
                         <div class="services-item-bg"></div>
                           <h3>Amenities</h3>
                           <p> sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.</p>
                           <span class="icon">
                             <i class="fa fa-info"></i>
                           </span>
                        
                      </a>
                    </div>
                    <div class="services-item">
                      <a href="#" class="services-item-link">
                         <div class="services-item-bg"></div>
                           <h3>Lorem ipsum dolor</h3>
                           <p> sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.</p>
                           <span class="icon">
                             <i class="fa fa-info"></i>
                           </span>
                        
                      </a>
                    </div>
                 </div>
              </div>
            </div>
            <div class="section map" id="section3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15684.919025455205!2d-85.4281962!3d10.639251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x756af3ebd14361a2!2sAvotz+Web+Works!5e0!3m2!1ses-419!2s!4v1442615525574" width="600" height="250" frameborder="0" style="border:0" allowfullscreen="" scrolling="no"></iframe>
            </div>
            
<?php

get_footer('home');

           