jQuery( document ).ready(function() {
    jQuery('.signin-block').css('display','none');
    jQuery('.signup-wrapper').css('display','none');
    jQuery('.fix-banner').css('display','none');
    jQuery('.signinclick').click(function () {

        jQuery('.signin-block').css('display','block');
        jQuery('.fix-banner').css('display','block');
        jQuery('.inner-bg').css('display','none');
    });
    jQuery('.signupclick').click(function () {

        jQuery('.signup-wrapper').css('display','block');
        jQuery('.fix-banner').css('display','block');
        jQuery('.inner-bg').css('display','none');
    });
    jQuery('.signin-close').click(function () {

        jQuery('.signin-block').css('display','none');
        //jQuery('.fix-banner').css('display','none');
        //jQuery('.inner-bg').css('display','none');
    });

    jQuery('.createbtn').click(function () {
        alert(jQuery('#pwd').val());
        var u=jQuery('#unm').val();
        var e=jQuery('#em').val();
        var p=jQuery('#pwd').val();
        var d={
            action: 'add_register',
            unm: u,
            em: e,
            pwd: p
        };
        jQuery.ajax({
            type : "post",
            url : frontend_ajax_object.ajaxurl,
            data: d,
            success: function(response) {
                alert(response);
                alert('registered');
            }
        })

    });
});