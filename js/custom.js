jQuery( document ).ready(function() {
    jQuery('.signin-block').css('display','none');
    jQuery('.signup-wrapper').css('display','none');
    jQuery('.fix-banner').css('display','none');
    jQuery('.signinclick').click(function () {

        jQuery('.signin-block').css('display','block');
        jQuery('.fix-banner').css('display','block');
    });
    jQuery('.signupclick').click(function () {

        jQuery('.signup-wrapper').css('display','block');
        jQuery('.fix-banner').css('display','block');
    });
    jQuery('.signin-close').click(function () {

        jQuery('.signin-block').css('display','none');
        jQuery('.fix-banner').css('display','none');
    });
});