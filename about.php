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
	Template Name: About Us
*/

global $tb_sulfur;

$tb_clients = $tb_sulfur['tb_sulfur_clients'];
$tb_client  = $tb_sulfur['tb_sulfur_client'];
$images = explode(",",$tb_clients);


get_header(); ?>

<!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->        
      

    <section id="about-section" class="about-section">
        <div class="container">
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
        
        <!-- Start About-section 2 -->
        <section id="about-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                   <div class="about-text">
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus.</p>
                   </div>
                   
                   <div class="skill-shortcode">
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Web Design</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $tb_sulfur['webdesign-skill']; ?>">
                                    <span class="progress-bar-span" ><?php echo $tb_sulfur['webdesign-skill']; ?>%</span>
                                    <span class="sr-only"><?php echo $tb_sulfur['webdesign-skill']; ?>% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>HTML & CSS</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $tb_sulfur['html-css-skill']; ?>">
                                    <span class="progress-bar-span" ><?php echo $tb_sulfur['html-css-skill']; ?>%</span>
                                    <span class="sr-only"><?php echo $tb_sulfur['html-css-skill']; ?>% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Wordpress</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $tb_sulfur['wordpress-skill']; ?>">
                                    <span class="progress-bar-span" ><?php echo $tb_sulfur['wordpress-skill']; ?>%</span>
                                    <span class="sr-only"><?php echo $tb_sulfur['wordpress-skill']; ?>% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Joomla</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $tb_sulfur['joomla-skill']; ?>">
                                    <span class="progress-bar-span" ><?php echo $tb_sulfur['joomla-skill']; ?>%</span>
                                    <span class="sr-only"><?php echo $tb_sulfur['joomla-skill']; ?>% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Extension</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $tb_sulfur['extensions-skill']; ?>">
                                    <span class="progress-bar-span" ><?php echo $tb_sulfur['extensions-skill']; ?>%</span>
                                    <span class="sr-only"><?php echo $tb_sulfur['extensions-skill']; ?>% Complete</span>
                                </div>
                            </div>  
                        </div>
                                                            
                    </div>
                   
               </div>
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                    
                    <!-- Start Accordion Section -->
                    <div class="panel-group" id="accordion">

                        <!-- Start Accordion 1 -->

                                             


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                                        <i class="fa fa-angle-left control-icon"></i> <?php echo $tb_sulfur['acc-hd-txt1'];?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-1" class="panel-collapse collapse in">
                                <div class="panel-body"><?php echo $tb_sulfur['acc-content-txt1'];?></div>
                            </div>
                        </div>
                        <!-- End Accordion 1 -->

                        <!-- Start Accordion 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
                                        <i class="fa fa-angle-left control-icon"></i> <?php echo $tb_sulfur['acc-hd-txt2']; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body"><?php echo $tb_sulfur['acc-content-txt2']; ?></div>
                            </div>
                        </div>
                        <!-- End Accordion 2 -->
                        
                        <!-- Start Accordion 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-3" class="collapsed">
                                        <i class="fa fa-angle-left control-icon"></i> <?php echo $tb_sulfur['acc-hd-txt3']; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body"><?php echo $tb_sulfur['acc-content-txt3']; ?></div>
                            </div>
                        </div>
                        <!-- End Accordion 3 -->

                        <!-- Start Accordion 4 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-4" class="collapsed">
                                        <i class="fa fa-angle-left control-icon"></i> <?php echo $tb_sulfur['acc-hd-txt4']; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-4" class="panel-collapse collapse">
                                <div class="panel-body"><?php echo $tb_sulfur['acc-content-txt4']; ?></div>
                            </div>
                        </div>
                        <!-- End Accordion 4 -->

                        <!-- Start Accordion 5 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-5" class="collapsed">
                                        <i class="fa fa-angle-left control-icon"></i> <?php echo $tb_sulfur['acc-hd-txt5']; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-5" class="panel-collapse collapse">
                                <div class="panel-body"><?php echo $tb_sulfur['acc-content-txt5']; ?></div>
                            </div>
                        </div>
                        <!-- End Accordion 5 -->

                    </div>
                    <!-- End Accordion section -->
                    
                </div><!--/.col-md-6 -->
                </div>
            </div>
        </section>
        <!-- Start About-section 2 -->
        
        
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
                        <h2>Our Team</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
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
                                <li><a href="<?php echo $team['dribbble_link'];?>"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->

            <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Team Member Section -->
        
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