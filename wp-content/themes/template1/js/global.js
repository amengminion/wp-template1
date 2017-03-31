$(document).ready(function(){
    $('.on-scroll').on('click', function (e) {
        locate = $(this).attr('href');
        windowTop = $(locate).position().top;
        $('html, body').stop().animate({ scrollTop: windowTop }, 1000, 'linear');
        e.preventDefault();
    });
});

$(window).load(function(){
    $(window).on('scroll', stickyHeader);
});

function stickyHeader(){
    var screenTop = $(document).scrollTop(); 
    var stickyClass = 'active animated bounceInDown';

    if( screenTop > 100 )
    {
        $('#sticky-menu').addClass(stickyClass);
    }
    else
    {
        $('#sticky-menu').removeClass(stickyClass);
    }
}