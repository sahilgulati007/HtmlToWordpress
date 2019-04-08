<?php
/*
Template Name: Signin
Template Post Type: page
*/
?>
<?php get_header('log'); ?>
<div class="fix-banner">
	<div class="hand-img"><img src="../Images/hand-with-mobile.png" alt="" ></div>
    <div class="banner-patch">Are You Looking For Free Images ?</div>
    <div class="container">
    	<div class="banner-content-box">
    		<div class="banner-img"><img src="../Images/img-2.jpg" ></div>
            <div class="banner-img">
            	<div class="l"><img src="../Images/img-1.jpg" ></div>
	            <div class="r"><img src="../Images/img-3.jpg" ></div>
            </div>
    		<div class="c"></div>
            <div class="banner-img"><img src="../Images/img-2.jpg" ></div>
    	</div>
	</div>
</div>

<div class="container text-center">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/Images/icon-small.png" style="padding-right:10px;"><span>Welcome to </span>Snapmepix</h1>
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) : the_post();
            ?>

            <div class="row m-top" >
                <div class="col-md-3 col-sm-3">
                    <div class="content-img">
                        <?php the_post_thumbnail();?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6" style="text-align: center;">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="content-img">
                        <?php the_post_thumbnail();?>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
    }
    ?>

</div>
<?php get_footer(); ?>