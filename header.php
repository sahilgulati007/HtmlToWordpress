<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<div class="signin-block">
    <div class="container">
        <?php //wp_login_form(); ?>
        <form name="loginform" id="loginform" action="<?php echo site_url(); ?>/wp-login.php" method="post">
        <span>Sign in to your Account</span>
        <input name="log" id="user_login" type="text" class="m-right" placeholder="Username" />
        <input name="pwd" id="user_pass" type="password" class="m-right" placeholder="Password" />
        <input type="submit" name="wp-submit" id="wp-submit" class="m-right btnsignin" value="Sign in">
<!--        <a href="Main.html" class="m-right btnsignin" >Sign in</a>-->
        <a class="m-right frd-link" href="http://localhost/wordpressfrmhtml/wp-login.php?action=lostpassword">Forgot Password?</a>
        <a class="signin-close"><i class="fa fa-close"></i></a>
    </div>
</div>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="logo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        if (has_custom_logo()) {
                            the_custom_logo();
                        }
                        else{
                            ?><h1 class="blog-title"><?php bloginfo( 'name' ); ?></h1>
                            <?php $description = get_bloginfo( 'description', 'display' ); ?>
                            <?php if($description) { ?><p class="lead blog-description"><?php echo $description ?></p><?php }
                        }
                    }
                    ?>
                </div>
                <ul>
                    <li><i class="fa fa-user"></i><a class="signupclick" style="cursor: pointer" >Sign Up</a></li>
                    <li><i class="fa fa-sign-in"></i><a class="signinclick" style="cursor: pointer" >Sign In</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-xs-12">
                <?php //get_search_form(); ?>
                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
                <div class="search-box"> <input type="text" name="s" id="s" class="search-txt-box" placeholder="<?php the_search_query(); ?>"><button type="submit" id="searchsubmit" value="Search" class="search-btn"><i class="fa fa-search"></i></button></div>
<!--                <div class="search-box"> <input type="text" class="search-txt-box" placeholder="Search"><button type="submit" class="search-btn"><i class="fa fa-search"></i></button></div>-->
                </form>
            </div>
        </div>
    </div>
    <div class="inner-bg"><span></span></div>
</header>

<nav>
    <div class="container">
        <ul>
<!--            <li><a href="index.html" class="active" >index</a></li>-->
<!--            <li><a href="Main.html">main</a></li>-->
<!--            <li><a href="Profile.html" >profile</a></li>-->
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'blog-nav list-inline'  ) ); ?>
        </ul>
    </div>

</nav>
<div class="fix-banner">
    <div class="hand-img"><img src="<?php echo get_template_directory_uri(); ?>/Images/hand-with-mobile.png" alt="" ></div>
    <div class="banner-patch">Are You Looking For Free Images ?</div>
    <div class="container">
        <div class="banner-content-box">
            <div class="banner-img"><img src="<?php echo get_template_directory_uri(); ?>/Images/img-2.jpg" ></div>
            <div class="banner-img">
                <div class="l"><img src="<?php echo get_template_directory_uri(); ?>/Images/img-1.jpg" ></div>
                <div class="r"><img src="<?php echo get_template_directory_uri(); ?>/Images/img-3.jpg" ></div>
            </div>
            <div class="c"></div>
            <div class="banner-img"><img src="<?php echo get_template_directory_uri(); ?>/Images/img-2.jpg" ></div>
        </div>
    </div>
</div>
