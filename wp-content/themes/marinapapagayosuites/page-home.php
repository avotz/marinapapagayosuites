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
                <p class="">Part sophisticated resort, part primitive playground, this private paradise possesses one of the most extraordinary landscapes and biological corridors on the planet. </p>
              </div> 
              
              </div>
            <div class="section suites " id="section1">
               <div class="suites-container flex-container-sb">
                  <div class="suites-text">
                     <h2>Suites</h2>
                     <h3>Design and comfort are perfectly combined here</h3>
                      <?php rewind_posts(); ?>
                      <?php query_posts('post_type=page&page_id=8'); ?>
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                              
                                  <?php the_content(); ?>
                          
              
                          <?php endwhile; ?>
                          <!-- post navigation -->
                      
                      <?php endif; ?>
                  </div>
                  <div class="suites-cate">
                     <div class="suites-cate-container flex-container-sb">
                      
                     <?php
                    $args = array(
                      'post_type' => 'suite',
                        //'order' => 'ASC',
                      'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                      'posts_per_page' => 50,
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
                      <a href="#service-popup-1" class="services-item-link">
                         <div class="services-item-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/activities.jpg');"></div>
                           <h3>Activities and Adventures</h3>
                           <p> As a tropical destination teeming with wildlife and rich Central American culture, Costa Rica is a dream jungle and beach destination. </p>
                           <span class="icon">
                             <i class="fa fa-info"></i>
                           </span>
                        
                      </a>
                    </div>
                    <div class="services-item">
                      <a href="#service-popup-2" class="services-item-link">
                         <div class="services-item-bg"></div>
                           <h3>Tailored Concierge Services</h3>
                           <p>Do you have a special request, let our professional concierges handle them, no details are little no request are too hard to meet.</p>
                           <span class="icon">
                             <i class="fa fa-info"></i>
                           </span>
                        
                      </a>
                    </div>
                    <div class="services-item">
                      <a href="#service-popup-3" class="services-item-link">
                         <div class="services-item-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/hotel-amenities.jpg');"></div>
                           <h3>Hotel Amenities</h3>
                           <p> Marina Papagayo Suites is conveniently located at the Marina Papagayo Centre,  with stunning views of the ocean and nearby forest</p>
                           <span class="icon">
                             <i class="fa fa-info"></i>
                           </span>
                        
                      </a>
                    </div>
                    <!-- <div class="services-item">
                      <a href="#" class="services-item-link">
                         <div class="services-item-bg"></div>
                           <h3>Lorem ipsum dolor</h3>
                           <p> sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.</p>
                           <span class="icon">
                             <i class="fa fa-info"></i>
                           </span>
                        
                      </a>
                    </div> -->
                 </div>
              </div>
               <div id="service-popup-1" class="suite-popup white-popup mfp-hide mfp-with-anim">
                   <?php rewind_posts(); ?>
                      <?php query_posts('post_type=page&page_id=43'); ?>
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                  <h3><?php the_title(); ?></h3>
                                  <?php the_content(); ?>

                                  <!-- <div class="activities-boxes">
                                      <div class="box">
                                          <div class="box-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/activities/golf.jpg" alt="Golf">
                                          </div>
                                          <h3 class="box-title">Golf</h2>
                                          <p>Spectacular golf course designed by Arnold Palmer at Peninsula Papagayo, with the most amazing water view.</p>
                                      </div>
                                      <div class="box">
                                          <div class="box-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/activities/land-tours.jpg" alt="Land Tours">
                                          </div>
                                          <h3 class="box-title">Land tours</h2>
                                          <p>Explore the once in a lifetime tours available in Costa Rica, where you will never forget the experiences.</p>
                                      </div>
                                      <div class="box">
                                          <div class="box-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/activities/fishing.jpg" alt="Fishing and water adventures">
                                          </div>
                                          <h3 class="box-title">Fishing and water adventures</h2>
                                          <p>Around Peninsula Papagayo area the beauty of paradise and the thrill of Big Game Fishing it´s the best.</p>
                                      </div>
                                      <div class="box">
                                          <div class="box-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/activities/golf-car.jpg" alt="Golf Cart Rentals">
                                          </div>
                                          <h3 class="box-title">Golf Cart Rentals</h2>
                                          <p>One of the best most ideal transportation to explore all the gorgeous spots that Peninsula Papagayo offers! </p>
                                      </div>
                                      <div class="box">
                                          <div class="box-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/activities/food.jpg" alt="Food and Drink Experiences">
                                          </div>
                                          <h3 class="box-title">Food and Drink Experiences</h2>
                                          <p>Every occasion will get memorable at any of the fine dining signature restaurants that the Resort and the Hotel´s offer.</p>
                                      </div>
                                      <div class="box">
                                          <div class="box-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/activities/prieta.jpg" alt="Prieta Beach Club">
                                          </div>
                                          <h3 class="box-title">Prieta Beach Club</h2>
                                          <p>Find your place at Prieta Beach Club! Where you can get the perfect setting to enjoy a carefree vacation at its finest! </p>
                                      </div>
                                      <div class="box">
                                           <div class="box-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/activities/tennis.jpg" alt="Tennis Complex">
                                          </div>
                                          <h3 class="box-title">Tennis Complex</h2>
                                          <p>With an enviable dry tropical climate and a lush jungle setting, tennis at Peninsula Papagayo it´s invigorating and memorable.</p>
                                      </div>

                                  </div> -->
                          
              
                          <?php endwhile; ?>
                          <!-- post navigation -->
                      
                      <?php endif; ?>
                    
                  

                </div>
                 <div id="service-popup-2" class="suite-popup white-popup mfp-hide mfp-with-anim">
                   <?php rewind_posts(); ?>
                      <?php query_posts('post_type=page&page_id=45'); ?>
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                   <h3><?php the_title(); ?></h3>
                                  <?php the_content(); ?>
                          
              
                          <?php endwhile; ?>
                          <!-- post navigation -->
                      
                      <?php endif; ?>
                    
                  

                </div>
                 <div id="service-popup-3" class="suite-popup white-popup mfp-hide mfp-with-anim">
                   <?php rewind_posts(); ?>
                      <?php query_posts('post_type=page&page_id=47'); ?>
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                   <h3><?php the_title(); ?></h3>
                                  <?php the_content(); ?>
                          
              
                          <?php endwhile; ?>
                          <!-- post navigation -->
                      
                      <?php endif; ?>
                    
                  

                </div>
                           


            </div>
            <div class="section map" id="section3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.183000030684!2d-85.65684648487552!3d10.642887192412202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f75811b26bc50cf%3A0x72ef2ac27debb760!2sMarina+Papagayo+Suites!5e0!3m2!1ses-419!2scr!4v1527720743477" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            


<?php
get_footer('home');

           