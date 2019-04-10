<?php
/*
Template Name: home
Template Post Type: page
*/
?>
<?php get_header('home'); ?>
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

    </div><!-- /.blog-main -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>