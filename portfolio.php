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
	Template Name: Portfolio
*/

get_header(); ?>

<?php global $tb_sulfur; ?>

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
						
						<?php $portfolios = $tb_sulfur['tb-portfolio']; ?>
						<?php foreach($portfolios as $portfolio): ?>					

							<li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
	                            <div class="portfolio-item">
	                                <img src="<?php echo $portfolio['image']; ?>" class="img-responsive" alt="" />
	                                <div class="portfolio-caption">
	                                    <h4><?php echo $portfolio['title']; ?></h4>
	                                    <p><?php echo $portfolio['description']; ?></p>
	                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
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

<?php get_footer(); ?>
