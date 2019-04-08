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
            <input type="text" class="" placeholder="Username">
            <input type="text" class="" placeholder="Email">
            <input type="text" class="" placeholder="Password">
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