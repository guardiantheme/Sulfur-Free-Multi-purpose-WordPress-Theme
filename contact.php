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
	Template Name: Contact
*/
    global $tb_sulfur;

get_header(); ?>







<!-- Start Contact Us Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                    <h2>Contact With Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if(!dynamic_sidebar('gt-sulfur-contactus')); ?>
            </div>
        </div>
    </div>
    
</section>

<!-- Start Map Section -->
<div class="google-map">
    <div class="default-page">                
                <div id="map" data-position-latitude="<?php echo $tb_sulfur['sulfur-latitude']?>" data-position-longitude="<?php echo $tb_sulfur['sulfur-longitude']?>"></div>  
            </div>
</div>
<!-- End Map Section -->


<?php get_footer(); ?>