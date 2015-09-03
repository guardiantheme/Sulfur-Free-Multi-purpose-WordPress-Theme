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
	Template Name: Service
*/


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
            
            <?php $services = $tb_sulfur['tb-service']; ?>
            <?php foreach($services as $service): ?>

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

    <!-- Start Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">

           <?php $services_counters = $tb_sulfur['tb-service-counter']; ?>
            <?php foreach ($services_counters as $services_counter): ?>

	            <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInLeft" data-wow-duration="2s" data-		wow-delay="300ms">
	                  <div class="counter-item">
	                    <i class="fa fa-<?php echo $services_counter['icon']; ?>"></i>
	                    <div class="timer" id="item1" data-to="<?php echo $services_counter['title_sulfur']; ?>" data-speed="5000"></div>
	                      <p><?php echo $services_counter['description']; ?></p>
	                    <h3><?php echo $services_counter['url']; ?></h3>
	                  </div>
	           	</div>  

	        <?php endforeach; ?>
                    
            </div>
        </div>
    </section>
    <!-- End Fun Facts Section -->
        
        
        <!-- Start Pricing Section -->
    <section id="pricing-section" class="pricing-section">
        <div class="container">
           <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2><?php echo $tb_sulfur['about-services-pricing-title'];?></h2>
                    </div>
                </div>
            </div>
            <div class="row">

              <?php $services_pricings = $tb_sulfur['tb-service-pricing']; ?>
            <?php foreach ($services_pricings as $services_pricing): ?>
           
                <div class="col-md-4">
                    <div class="pricing">
                        <div class="pricing-header">
                            <i class="fa fa-<?php echo $services_pricing['icon']; ?>"></i>
                        </div>
                        <div class="pricing-body">
                            <h3 class="pricing-title"><?php echo $services_pricing['title_sulfur']; ?></h3>
                            <p><?php echo $services_pricing['description']; ?></p>
                            <a href="#" class="btn btn-primary"><?php echo $services_pricing['url']; ?></a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
          
            </div>
        </div>
    </section>
    <!-- End Pricing Section -->
    
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