<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sulfur
 */
/*
	Template Name: Home
*/

global $tb_sulfur;


$tb_clients = $tb_sulfur['tb_sulfur_clients'];
$tb_client  = $tb_sulfur['tb_sulfur_client'];
$images = explode(",",$tb_clients);

get_header(); ?>



  <!-- Start Header Section -->
        <div class="banner" style="background-image: url(<?php echo $tb_sulfur['header-bg-image']['url']?>)">
            <div class="overlay">
                <div class="container">                    
                    <div class="intro-text">
                        <h1><?php echo $tb_sulfur['header-title'];?></h1>                        
                        <p><?php echo $tb_sulfur['header-subtitle'];?></p>
                        <a href="<?php echo $tb_sulfur['readmore-link'];?>" class="page-scroll btn btn-primary"><?php echo $tb_sulfur['header-readmore'];?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->

	  
        <!-- Start About Us Section -->
    <section id="about-section" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2><?php echo $tb_sulfur['about-hd-title'];?></h2>
                    </div>                        
                </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                   <div class="about-img">
                        <img src="<?php echo $tb_sulfur['about-us-image']['url']?>" class="img-responsive" alt="About images">
                       
                       <div class="head-text">                       
                            <p><?php echo $tb_sulfur['about-image-text']; ?></p>
                       </div>
                   </div>
               </div>
               <div class="col-md-7">
                   <div class="about-text">
                       <p><?php echo $tb_sulfur['about-text']; ?></p>                       
                   </div>

                   <div class="about-list">
                       <h4>Some important Feature</h4>
                       <ul>
                       <?php $tb_important_features = $tb_sulfur['about-important-feature'];?>

                       <?php foreach ($tb_important_features as $important_feature): ?>
                           <li><i class="fa fa-check-square"></i><?php echo $important_feature; ?></li>                           
                      <?php endforeach;?>
                       </ul>
                       
                       <h4>More Feature</h4>
                       <ul>
                       <?php $tb_more_features = $tb_sulfur['about-more-feature'];?>
                       
                       <?php foreach ($tb_more_features as $more_feature): ?>
                           <li><i class="fa fa-check-square"></i><?php echo $more_feature; ?></li>
                       <?php endforeach; ?>
                       </ul>
                   </div>

               </div>
            </div>
        </div>
    </section>
        
        
        <!-- Start Call to Action Section -->
    <section class="call-to-action" style="background-image: url(<?php echo $tb_sulfur['calltoaction-image']['url']?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow zoomIn" data-wow-duration="2s" data-wow-delay="300ms">
                 <p><?php echo $tb_sulfur['calltoaction-text']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->      
        
        
        
        <!-- Start Team Member Section -->
    <section id="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2><?php echo $tb_sulfur['about-team-title'];?></h2>
                        <p><?php echo $tb_sulfur['about-team-description'];?></p>
                    </div>                        
                </div>
            </div>
            <div class="row">
            <?php $team_item_Show = 0;?>
            <?php $teams = $tb_sulfur['tb-team']; ?>
            <?php foreach($teams as $team): ?>

                <?php if (++$team_item_Show === 5) break; ?>
                               
                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                    <div class="team-member">
                        <img src="<?php echo $team['image'] ?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4><?php echo $team['title'] ?></h4>                            
                            <p><?php echo $team['designation'] ?></p>
                            <ul>
                                <li><a href="<?php echo $team['facebook_link'];?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $team['twitter_link']; ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo $team['linkedin_link'];?>"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="<?php echo $team['pinterest_link'];?>"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="<?php echo $team['dribbble_link']; ?>"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->

            <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Team Member Section -->
        
        
        <!-- Start Portfolio Section -->
        <section id="portfolio" class="portfolio-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                            <h2><?php echo $tb_sulfur['about-portfolio-title'];?></h2>
                            <p><?php echo $tb_sulfur['about-portfolio-description'];?></p>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Start Portfolio items -->
                        <ul id="portfolio-list">

                    <?php $portfolio_Show = 0;?>

                    <?php $portfolios = $tb_sulfur['tb-portfolio']; ?>
                    <?php foreach($portfolios as $portfolio): ?>

                        <?php if (++$portfolio_Show === 7) break; ?>


                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                <div class="portfolio-item">
                                    <img src="<?php echo $portfolio['image']; ?>" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4><?php echo $portfolio['title']; ?></h4>
                                        <p><?php echo $portfolio['description']; ?></p>
                                        <a href="<?php echo $portfolio['url']?>" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>

                            
                        </ul>
                        <!-- End Portfolio items -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->
        
        
        <!-- Start Service Section -->
        <section id="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                            <h2><?php echo $tb_sulfur['about-services-title'];?></h2>
                            <p><?php echo $tb_sulfur['about-services-description'];?></p>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                <?php $service_Show = 0;?>

                <?php $services = $tb_sulfur['tb-service']; ?>
                <?php foreach($services as $service): ?>

                <?php if (++$service_Show === 9) break; ?>

                    <div class="col-md-3">
                        <div class="services-post">
				            <a href="#"><i class="fa fa-<?php echo $service['icon']; ?>"></i></a>
				            <h2><?php echo $service['title_sulfur']; ?></h2>
							<p><?php echo $service['description']; ?></p>
				        </div>
                    </div>

                <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Start Service Section -->
        
        
        
        <!-- Start Testimonial Section -->
        <section id="testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-wrapper">

                        
                    <?php $testimonials = $tb_sulfur['tb-testimonial']; ?>
                    <?php foreach($testimonials as $testimonial): ?>
                        
                        <div class="testimonial-item">
                            <p><?php echo $testimonial['description'];?></p>
                            <img src="<?php echo $testimonial['image'];?>" alt="Testimonial images">
                            <h5><?php echo $testimonial['title'];?></h5>
                            <div class="desgnation"><?php echo $testimonial['designation'];?></div>
                        </div>

                    <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       

        <!-- Start Client Section -->
        <div id="client-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-box">
                            <ul class="client-list">
                           <?php foreach( $images as $index => $code ): ?>
                                
                                <li><a href="<?php echo $tb_client[$index]; ?>"><?php echo wp_get_attachment_image( $code ); ?></a></li>
                            
                            <?php endforeach;?>      
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Client Section -->
        
        
<?php get_footer(); ?>
