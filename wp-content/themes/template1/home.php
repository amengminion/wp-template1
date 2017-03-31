<?php

/* Template Name: Home */

$stylesheetUri = get_stylesheet_directory_uri();

?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo $stylesheetUri; ?>/css/index.css" >
	
<section id="home" class="banner">
    <div id="home-slider" class="banner-slider">
        <div class="slider-item">
            <div class="has-image" style="background-image: url(<?php echo $stylesheetUri; ?>/img/slide-1.jpg);"></div>
            <div class="slider-caption">
                <h1 class="">Delivery Unlimited.</h1>
                <p>
                    We help people save time, make their life better, exercising communications, both in business and private life.
                </p>
                <a href="#" class="btn btn-banner">read more</a>
            </div>
        </div>
        <div class="slider-item">
            <div class="has-image" style="background-image: url(<?php echo $stylesheetUri; ?>/img/slide-2.jpg);"></div>
            <div class="slider-caption">
                <h1>A partnership based on trust.</h1>
                <p>
                    We strive to ensure that our services have become a benchmark of quality in the field of the delivery.
                </p>
                <a href="#" class="btn btn-banner">read more</a>
            </div>
        </div>
    </div>
    <div class="contact-form wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
        <h1>Request a Quote</h1>
        <p>Get in touch with us if you have any queries and we will get back to you as soon as possible.</p>
        <div class="form-group clearfix">
            <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="form-group clearfix">
            <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group clearfix">
            <textarea nrows="10" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="form-group clearfix">
            <button id="btnSend" class="btn btn-primary">Send</button>
        </div>
        <div></div>
    </div>
</section>
<section id="why-us" class="main">
    <div class="container wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
        <h1 class="title">Why Us</h1>
        <div id="why-us-container" class="row" ></div>
        <script id="why-us-template" type="text/x-handlebars-template">
            {{#each why-us}}
                <div class="col-md-4">
                    <article>
                        <i class="{{icon}}"></i>
                        <h3>{{title}}</h3>
                        {{{content}}}
                    </article>
                </div>
            {{/each}}
        </script>
    </div>
</section>
<section id="our-mission" class="main has-image" style="background-image: url(<?php echo $stylesheetUri; ?>/img/parallax1.jpg);">
    <div class="container wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
        <h1 class="slogan">Our Mission</h1>
        <p>
            Transitec Transportation Company is committed to providing efficient and reliable services across all its business segments to its valued customers where safety is our top priority. Transitec will commit its resources to safe and environmentally sound operating practices. 
        </p>
        <p>
            That will result in providing our employees with a safe work environment and our customers with the assurance of safe, dependable service. We aim to be recognized among current and prospective shipper clients as a premier provider of logistics and transportation services, to be the leader in the transportation management industry.
        </p>
        <a href="#" class="btn btn-primary">Learn More</a>
    </div>
</section>
<section id="services" class="main">
    <div class="container wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
        <h1 class="title">Our Services</h1>
        <p>
            Welcome to our transportation world. We sincerely hope that each and every user entering our website wil find exactly what he/she is looking for.
        </p>
        <div id="services-container" class="row"></div>
        <script id="services-template" type="text/x-handlebars-template">
            {{#each services}}
                <div class="col-md-4">
                    <figure>
                        <img src="<?php echo $stylesheetUri; ?>/{{imgSrc}}" class="img-responsive">
                        <figcaption>
                            <a href="{{permalink}}">{{title}}</a>
                        </figcaption>
                    </figure>
                </div>
            {{/each}}
        </script>
    </div>
</section>
<section id="testimonial" class="main has-image" style="background-image: url(<?php echo $stylesheetUri; ?>/img/parallax2.jpg);">
    <div class="container wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $stylesheetUri; ?>/img/broker.jpg" alt="">
            </div>
            <div class="col-md-8">
                <article>
                    <h1>Testinonial</h1>
                    <blockquote>
                        <p>
                            The customer service has been second to none! This is highlighted by their dependability, communication and "get it done attitude." Thanks to all the team for your help!
                        </p>
                        <cite>Derek Fisher</cite>
                    </blockquote>
                    <a href="#" class="btn btn-primary">Read More</a>
                </article>
            </div>
        </div>
    </div>
</section>
<section id="googleMap"></section>

<script type="text/javascript" src="<?php echo $stylesheetUri; ?>/assets/handlebars.js/handlebars-v4.0.5.js"></script>
<script type="text/javascript" src="<?php echo $stylesheetUri; ?>/assets/wow/wow.min.js"></script>
<script type="text/javascript" src="<?php echo $stylesheetUri; ?>/assets/slick/slick.js"></script>
<script type="text/javascript" src="<?php echo $stylesheetUri; ?>/js/index.js"></script>
<script type="text/javascript">

    function initialize() {
        var latitude = 14.583969;
        var longtitude = 121.062934;
        var mapProp = {
            // How zoomed in you want the map to start at (always required)
            zoom: 14,

            scrollwheel: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(latitude, longtitude),

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                {"stylers":[{"visibility":"on"},{"saturation":-100},{"gamma":0.54}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#4d4946"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"gamma":0.48}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"gamma":7.18}]}
            ]
        };

        var image = {
            url: '<?php echo $stylesheetUri; ?>/img/icon-google-map.png'
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longtitude),
            map: map,
            icon: image,
            title: 'Global One',
            labelContent: 'Global One'
        });

        // Resize stuff...
        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
    } 

    function loadGoogleMap()
    {			
        $('<script />', {
            type: 'text/javascript',
            src: 'http://maps.googleapis.com/maps/api/js?key=AIzaSyDv1D0F0xKD-VguDPHx4DIRUIyQNp7j8uQ&callback=initialize'
        }).appendTo('body');

        $('#googleMap').show();
    }

    $(window).load(loadGoogleMap());

</script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/584901ae4160416f6d9b366a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script>
    $('#btnSend').click(function(){
        getToken();
        /*
        var data = {
            title : 'test'
        }
        $.ajax({
            method: 'POST',
            url: 'http://weblab.minionsolutions.com/wp-json/wp/v2/pages/',
            data: data,
            dataType: 'json',
            header: 'Authorization' : 'Bearer ' + '',
            success: function(data){
                alert(data.title.rendered);
            },
            error: function(data){
                alert(data.status);
            }
        });
        */
    });

    function getToken(){
        var url = 'http://www.weblab.minionsolutions.com/json-wp' + '/wp/v2/posts';
        var data = {
            title: 'testpost'
        };

        $.ajax({
            method: "POST",
            url: url,
            data: data,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', POST_SUBMITTER.nonce );
            },
            success : function( response ) {
                console.log( response );
                alert( POST_SUBMITTER.success );
            },
            fail : function( response ) {
                console.log( response );
                alert( POST_SUBMITTER.failure );
            }
        });
    }
        
</script>

<?php get_footer(); ?>