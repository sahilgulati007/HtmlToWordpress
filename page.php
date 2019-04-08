<?php get_header(); ?>
<!--    <section class="banner-bg">-->
<!--        <img src="--><?php //get_the_post_thumbnail() ?><!--" height="" width="" alt="" title="" />-->
<!--        <div class="container">-->
<!--            <div class="banner-info">-->
<!--                <h4>Professional Services<br/> for Busy professionals.</h4>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="banner-bg">
    <?php the_post_thumbnail() ?>
    </section>
    <h1><?php //the_title(); ?></h1>
    <?php the_content(); ?>

<?php endwhile;  endif;?>

<?php get_footer(); ?>