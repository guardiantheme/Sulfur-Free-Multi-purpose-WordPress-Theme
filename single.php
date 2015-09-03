<?php
/**
 * The template for displaying all single posts.
 *
 * @package sulfur
 */
/*
	Template Name: Single Post
*/

get_header(); ?>

	<section class="blog-page-section">
    <div class="container">
        <div class="row">
            
            <!-- Start Blog Section -->
            <div class="col-md-8 blog-body">            
                <!-- Start Blog post -->
                       
                    <div class="blog-post">
                        <div class="post-img">
                            <?php the_post_thumbnail(' ', array(
                                'class' => 'img-responsive' )
                            );?>
                        </div>
                        <div class="posted-time">Posted On <?php the_time('M d Y'); ?></div>
                        <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            
                        <ul class="post-meta">
    						<li><i class="fa fa-user"></i><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
                            <li><i class="fa fa-tags"></i><a href="<?php the_permalink(); ?>"><?php the_tags(); ?></a></li>
    						<li><i class="fa fa-comments"></i><a href="#"><?php comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?></a></li>
    					</ul>
                            
                       <p class="post-content"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                            the_content();
                            endwhile; endif; ?></p>
                    	<?php comments_template(); ?> 
                    </div>
            
                <!-- End Blog Post -->  
            </div>
            <!-- End Blog Section -->
            
<?php get_sidebar(); ?>
            
        </div>
    </div>
</section>

<!-- End Blog Page Section -->	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
