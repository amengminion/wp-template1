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
        
        var url = localData.siteUrl + '/wp-json/wp/v2/homepage/';
        var dataQuery = {
            'filter' : {
                'posts_per_page' : 3,
                'category_name' : 'why us'
            }
        }

        $.ajax({
            method: 'GET',
            url: url,
            data: {
                filter : {
                    'posts_per_page' : 1
                }
            },
            dataType: 'json',
            success: function(data){
                var whyUsScript = $('#why-us-template').html();
                var whyUsCompiled = Handlebars.compile(whyUsScript);
                var whyUsTemplate = whyUsCompiled(data);

                whyUsContainer.html(whyUsTemplate);
            }
        });
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

