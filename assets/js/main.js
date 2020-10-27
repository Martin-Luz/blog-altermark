$(document).ready(function() {

    $('.search').click(function(e) {
        e.preventDefault();
        const active = $(this).hasClass('active');
        if (!active) {
            $(this).addClass('active');
            $('.mobile-nav .form-group').fadeIn();
        } else {
            $(this).removeClass('active');
            $('.mobile-nav .form-group').fadeOut();
        }
    });

     function toggleClassSocialMediaIcons() {
        768 > $(window).width() ? $('.box-child').removeClass('social-media-icons') : $('.box-child').addClass('social-media-icons');
    }

    function moveSideBarSocial() {
        var windowMiddlePosition = $(window).scrollTop();
        var fatherTop = $('.box-father').offset().top;
        var fatherHeight = $('.box-father').height();
        var fatherBottom = fatherTop + fatherHeight;
        var childTop = $('.box-child').offset().top;
        var childHeight = $('.box-child').height();
        var childBottom = childTop + childHeight;
        if (fatherTop <= windowMiddlePosition && fatherBottom - childHeight >= windowMiddlePosition) {
            $('.box-child').css('top', windowMiddlePosition - fatherTop + 100);
        } else {
        }
    }
    moveSideBarSocial();
    toggleClassSocialMediaIcons();


    $(window).on({ "resize": toggleClassSocialMediaIcons, "scroll": moveSideBarSocial });


});