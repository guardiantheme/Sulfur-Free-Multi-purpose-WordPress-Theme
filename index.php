<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sulfur
 */
/*
	Template Name: Blog
*/

get_header(); ?>

<!-- Start Blog Page Section -->

<section class="blog-page-section">
    <div class="container">
        <div class="row">
            
            <!-- Start Blog Section -->
            <div class="col-md-8 blog-body">
            
                <!-- Start Blog post -->
                <?php while(have_posts()): the_post(); ?>                
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
                            
                        <p class="post-content"><?php read_more(50); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary readmore">Read more</a>
                    </div>
                    
                <?php endwhile; ?>
                <!-- End Blog Post -->                
                
                
                <!-- Start Pagination -->
                <?php
                    if ( function_exists('gt_sulfur_pagination') ) {
                      gt_sulfur_pagination();
                    }
                ?>
                <!-- End Pagination -->
                
                
            </div>
            <!-- End Blog Section -->
            
<?php get_sidebar(); ?>
            
        </div>
    </div>
</section>

<!-- End Blog Page Section -->	


<?php get_footer(); ?>
