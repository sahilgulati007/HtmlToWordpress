<?php get_header(); ?>
    <div class="container text-center">
<!--        <h1><img src="--><?php //echo get_template_directory_uri(); ?><!--/Images/icon-small.png" style="padding-right:10px;"><span>Welcome to </span>Snapmepix</h1>-->
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) : the_post();
                ?>
                <h1><?php the_title(); ?></h1>
                <div class="m-top term-text">


                        <?php the_content(); ?>

                </div>
            <?php
            endwhile;
        }
        ?>


    </div><!-- /.blog-main -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>