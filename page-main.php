<?php
/*
Template Name: main
Template Post Type: page
*/
?>
<?php get_header(); ?>
    <div class="container text-center">
        <h1><span>My Photo</span>Request</h1>
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) : the_post();
                ?>

                <div class="row m-top" >

                    <div class="col-md-12 col-sm-12" style="text-align: center;">

                        <p><?php the_content(); ?></p>
                    </div>

                </div>
            <?php
            endwhile;
        }
        ?>

    </div><!-- /.blog-main -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>