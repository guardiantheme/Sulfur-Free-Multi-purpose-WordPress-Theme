<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sulfur
 */
global $tb_sulfur;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">



<?php wp_head(); ?>
</head>

    <body <?php body_class(); ?>>
    
        <header class="clearfix">        
            <!-- Start Top Bar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                    
                                <div class="col-md-6">
                                    <!-- Start Contact Info -->
                                    <ul class="contact-details">
                                        <li><a href="#"><i class="fa fa-phone"></i><?php echo $tb_sulfur['sulfur-header-mobile'];?></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><?php echo $tb_sulfur['sulfur-support-email'];?></a>
                                        </li> 
                                    </ul>
                                    <!-- End Contact Info -->
                                </div><!-- .col-md-6 -->
                                
                                <div class="col-md-6">
                                    <!-- Start Social Links -->
                                    <ul class="social-list">
                                        <li>
                                            <a href="<?php echo $tb_sulfur['suflur-top-rss-link'];?>"><i class="fa fa-rss"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tb_sulfur['suflur-top-fb-link'];?>"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tb_sulfur['suflur-top-twitter-link'];?>"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tb_sulfur['suflur-top-google-plus-link'];?>"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tb_sulfur['suflur-top-youtube-link'];?>"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tb_sulfur['suflur-top-linkedin-link'];?>"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tb_sulfur['suflur-top-flickr-link'];?>"><i class="fa fa-flickr"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tb_sulfur['suflur-top-vimeo-link'];?>"><i class="fa fa-vimeo-square"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tb_sulfur['suflur-top-skype-link'];?>"><i class="fa fa-skype"></i></a>
                                        </li>
                                    </ul>
                                    <!-- End Social Links -->
                                </div><!-- .col-md-6 -->
                            </div>
                                
                                
                        </div>
                    </div>                        

                </div><!-- .row -->
            </div><!-- .container -->
            <!-- End Top Bar -->
        
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <div class="navbar-logo">
                         <?php if ( $tb_sulfur['tb-sulfur-logo-image']['url'] ) : ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo $tb_sulfur['tb-sulfur-logo-image']['url']?>" alt="<?php bloginfo('name'); ?>" /></a>
                            <?php else : ?>
                                <h1 class="sulfur-logo-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>                            
                            <?php endif; ?>  
                        </div>
                    </div>
                    <div class="navbar-collapse collapse">
                        
                        <!-- Start Navigation List -->
                         <?php 
                         if (function_exists('wp_nav_menu')) {
                            wp_nav_menu(array(                            
                                'theme_location' => 'main_menu', 
                                'menu_class'     => 'nav navbar-nav navbar-right'                         
                                
                                    ));
                            } ?>
                       
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header>
        
        
      