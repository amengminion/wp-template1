function onScrollInit(items, container) {
    items.each(function () {        
        var osElement = $(this),
            osAnimationClass = osElement.attr('data-animation'),
            osAnimationDelay = osElement.attr('data-delay');

        osElement.css({
            '-webkit-animation-delay': osAnimationDelay,
            '-moz-animation-delay': osAnimationDelay,
            'animation-delay': osAnimationDelay
        });

        var osTrigger = (container) ? container : osElement;
                
        osTrigger.waypoint(function () {
            osElement.addClass('animated').addClass(osAnimationClass);
        }, {
            triggerOnce: false,
            offset: '70%'
        });
    });
}
