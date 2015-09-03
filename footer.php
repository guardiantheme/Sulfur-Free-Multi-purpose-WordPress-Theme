<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sulfur
 */


global $tb_sulfur;
?>


<!-- Start Footer Section -->
<section id="footer-section" class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-heading-2">
                    <h3 class="section-title">
                        <span>Office Address</span>
                    </h3>
                </div>
                
                <div class="footer-address">
                    <ul>
                        <li class="footer-contact"><i class="fa fa-home"></i><?php echo $tb_sulfur['sulfur-footer-address'];?></li>
                        <li class="footer-contact"><i class="fa fa-envelope"></i><a href="http://<?php echo $tb_sulfur['sulfur-footer-email'];?>"><?php echo $tb_sulfur['sulfur-footer-email'];?></a></li>
                        <li class="footer-contact"><i class="fa fa-phone"></i><?php echo $tb_sulfur['sulfur-footer-phone'];?></li>
                        <li class="footer-contact"><i class="fa fa-globe"></i><a href="http://<?php echo $tb_sulfur['sulfur-footer-web'];?>" target="_blank"><?php echo $tb_sulfur['sulfur-footer-web'];?></a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3 -->
            
            
            <div class="col-md-3">
                <?php if(!dynamic_sidebar('gt-sulfur-recentpost')); ?>
            </div><!--/.col-md-3 -->            

            <div class="col-md-3">
                <div class="section-heading-2">
                    <h3 class="section-title">
                        <span>Stay With us</span>
                    </h3>
                </div>
                <div class="subscription">
                    <div class="form-group">
                        <?php if(!dynamic_sidebar('gt-sulfur-staywithus')); ?>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="widget">
                    <div class="section-heading-2">
                    <h3 class="section-title">
                        <span>FLICKR STREAM</span>
                    </h3>
                </div>
                    <div class="flickr_badge">
                        <script type="text/javascript" src="<?php echo $tb_sulfur['tb-sulfur-flickr'];?>"></script>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div><!--/.col-md-3 -->
        </div><!--/.row -->
    </div><!-- /.container -->
</section>
<!-- End Footer Section -->

<!-- Start CCopyright Section -->
<div id="copyright-section" class="copyright-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="copyright">
                    Copyright © 2015. <a href="http://www.guardiantheme.com">Guardiantheme.com</a> All Rights Reserved.
                </div>
            </div>
            
            <div class="col-md-5">
                <div class="copyright-menu pull-right">
                    <ul>
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">Sample Site</a></li>
                        <li><a href="#">getbootstrap.com</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/.row -->
    </div><!-- /.container -->
</div>
<!-- End CCopyright Section -->
        
	


<?php wp_footer(); ?>

</body>
</html>
