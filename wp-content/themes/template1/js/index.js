$(document).ready(function(){
    $('#home-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        fade: true,
    });
    
    //section "why us" template
    var whyUsContainer = $('#why-us-container');
    if(whyUsContainer)
    {
        var whyUsData = {
            'why-us' : [
                {
                    'icon' : 'fa fa-thumbs-up',
                    'title' : 'Best Service',
                    'content' : '<p>Our Mission is to attract and retain customers by providing Best in Class transportation solutions and fostering a profitable, disciplined culture of safety, service and trust.</p>'
                },
                {
                    'icon' : 'fa fa-users',
                    'title' : 'Reputation',
                    'content' : '<p>Our Mission is to attract and retain customers by providing Best in Class transportation solutions and fostering a profitable, disciplined culture of safety, service and trust.</p>'
                },
                {
                    'icon' : 'fa fa-lock',
                    'title' : 'Safety',
                    'content' : '<p>Our Mission is to attract and retain customers by providing Best in Class transportation solutions and fostering a profitable, disciplined culture of safety, service and trust.</p>'
                },
            ]
        };
        var whyUsScript = $('#why-us-template').html();
        var whyUsCompiled = Handlebars.compile(whyUsScript);
        var whyUsTemplate = whyUsCompiled(whyUsData);

        whyUsContainer.html(whyUsTemplate);
    }
    //end of section "why us" template
    
    //section "services" template
    var servicesContainer = $('#services-container');
    if(servicesContainer)
    {
        var servicesData = {
            'services' : [
                {
                    'imgSrc' : 'img/services-img1.jpg',
                    'title' : 'Services',
                    'permalink' : '#'
                },
                {
                    'imgSrc' : 'img/services-img2.jpg',
                    'title' : 'Services',
                    'permalink' : '#'
                },
                {
                    'imgSrc' : 'img/services-img3.jpg',
                    'title' : 'Services',
                    'permalink' : '#'
                },
                {
                    'imgSrc' : 'img/services-img4.jpg',
                    'title' : 'Services',
                    'permalink' : '#'
                },
                {
                    'imgSrc' : 'img/services-img5.jpg',
                    'title' : 'Services',
                    'permalink' : '#'
                },
                {
                    'imgSrc' : 'img/services-img6.jpg',
                    'title' : 'Services',
                    'permalink' : '#'
                },
            ]
        };
        var servicesScript = $('#services-template').html();
        var servicesCompiled = Handlebars.compile(servicesScript);
        var servicesTemplate = servicesCompiled(servicesData);

        servicesContainer.html(servicesTemplate);
    }
    //end of section "services" template
    
    var wow = new WOW();
    wow.init();
    
});

