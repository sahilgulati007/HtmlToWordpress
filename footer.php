<?php ?>
<footer>
    <div class="container">
        &copy; Snapmepix.com 2015  All rights are reserved
    </div>
</footer>
<div class="signup-wrapper">
    <div class="signup-block">
        <div class="sign-img">
            <img src="<?php echo get_template_directory_uri(); ?>/Images/signupbg.jpg">
        </div>
        <div class="lblcreate">Create Account</div>
        <div class="field">

<!--            <form id="my-registration-form" method="post" action="--><?php //echo add_query_arg('do', 'register', get_permalink( $post->ID )); ?><!--">-->
<!--            <form method="post" action="--><?php //echo site_url('wp-login.php?action=register', 'login_post') ?><!--" class="wp-user-form">-->
<!--                <input type="text" name="user_login" value="--><?php //echo esc_attr(stripslashes($user_login)); ?><!--" size="20" id="user_login" tabindex="101" placeholder="Username" />-->
<!--                <input type="text" name="user_email" value="--><?php //echo esc_attr(stripslashes($user_email)); ?><!--" size="25" id="user_email" tabindex="102" placeholder="Email" />-->
<!--                <span>Terms &amp; Conditions</span>-->
<!--                <div class="term-condition">-->
<!--                    <input type="checkbox" name="name" value=" ">-->
<!--                    <span>I have read &amp; Agree to the Terms &amp; Conditions</span>-->
<!--                </div>-->
<!--                <div class="login_fields">-->
<!--                    --><?php //do_action('register_form'); ?>
<!--                    <input type="submit" class="createbtn" name="user-submit" value="--><?php //_e('Sign up!'); ?><!--" class="user-submit" tabindex="103" />-->
<!--                    --><?php //$register = $_GET['register']; if($register == true) { echo '<p>Check your email for the password!</p>'; } ?>
<!--                    <input type="hidden" name="redirect_to" value="--><?php //echo esc_attr($_SERVER['REQUEST_URI']); ?><!--?register=true" />-->
<!--                    <input type="hidden" name="user-cookie" value="1" />-->
<!--                </div>-->
<!--            </form>-->
            <input type="text" required name="unm" id="unm" class="" placeholder="Username">
            <input type="email" required name="em"  id="em" class="" placeholder="Email">
            <input type="password" required name="pwd" id="pwd" class="" placeholder="Password">
            <span>Terms &amp; Conditions</span>
            <div class="term-condition">
                <input type="checkbox" name="name" value=" ">
                <span>I have read &amp; Agree to the Terms &amp; Conditions</span>
            </div>
            <a class="createbtn">Create Account</a>

        </div>


    </div>

</div>
<?php wp_footer(); ?>
</body>
</html>