$(document).ready(function(){
    $('body').append('<div id="scroll-up" class="scroll-up"><span class="glyphicon glyphicon-chevron-up"></span></div>');
    
    $('#scroll-up').click(function(){
        $('html, body').stop().animate({ scrollTop: 0 }, 1000, 'linear');
    });
    
    $(window).on('scroll', showScrollUp);
});

function showScrollUp(){
    var screenTop = $(document).scrollTop(); 

    if( screenTop > 300 )
    {
        $('#scroll-up').fadeIn(1000);
    }
    else
    {
        $('#scroll-up').fadeOut(1000);
    }
}