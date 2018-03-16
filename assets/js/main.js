(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        //countdown-timer
        var datex = document.getElementById("StartDate").value;
        //var datex = "2018/2/21";
        $('#clock').countdown(datex, function (event) {
           var $this = $(this).html(event.strftime('<span class="countdown-wrap"><span class="single-count-down-item">%D  </br><span>день</span></span><span class="single-count-down-item">%H  </br><span>часы</span></span><span class="single-count-down-item">%M  </br><span>мин</span></span><span class="single-count-down-item">%S  </br><span>сек</span></span></span>'));
        });




        $(".menu-trigger").on("click",function(){
            $(".off-canvas-menu,.off-canvas-overlay").removeClass("active");
            $(".off-canvas-menu,.off-canvas-overlay").addClass("active");
        });

        $(".menu-close").on("click",function(){
            $(".off-canvas-menu,.off-canvas-overlay").removeClass("active");
        });

        $(".off-canvas-overlay").on("click",function(){
            $(".off-canvas-menu,.off-canvas-overlay,.main-search").removeClass("active");
        });

        /*owl carousel active*/
        $(".main-testi-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            lazyLoad: true,
            dots: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            navText: ["<i class='icofont icofont-thin-left'></i>", "<i class='icofont icofont-thin-right'></i>"],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 1,
                    nav: false
                },
                992: {
                    items: 1,
                    nav: false
                },
                1200: {
                    items: 2,
                    nav: true
                }
            }
        });

        /*owl carousel active*/
        $(".full-width-carousel-main").owlCarousel({
            margin: 0,
            loop: true,
            autoplay: true,
            lazyLoad: true,
            dots: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            navText: ["<i class='icofont icofont-thin-left'></i>", "<i class='icofont icofont-thin-right'></i>"],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 2,
                    nav: false
                },
                768: {
                    items: 3,
                    nav: false
                },
                992: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 6,
                    nav: true
                }
            }
        });

        

        //countdown-timer
        // $('#clock').countdown('2018/2/2', function (event) {
        //     $(this).html(event.strftime('<span class="countdown-wrap"><span class="single-count-down-item">%D  </br><span>день</span></span><span class="single-count-down-item">%H  </br><span>часы</span></span><span class="single-count-down-item">%M  </br><span>мин</span></span><span class="single-count-down-item">%S  </br><span>сек</span></span></span>'));
        // });


        /* BROWSER WINDOW DETECTION */
        var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        

        var sliderWidth = 0;

        if (1600 < w && w < 2000) {
            sliderWidth = 1000;
        }else if (1200 < w && w < 1600) {
            sliderWidth = 800;
        }else if (767 < w && w < 992) {
            sliderWidth = 450;
        }

        //range slider
        $('.single-slider').jRange({
            from: 30000.0,
            to: 50000.0,
            step: 2.0,
            scale: [30000.0, 32000.0, 34000.0, 36000.0, 38000.0, 40000.0, 42000.0, 44000.0, 46000.0, 48000.0, 50000.0],
            format: '%s',
            width: sliderWidth,
            showLabels: true,
            snap: true
        });
        $('.single-slider-2').jRange({
            from: 1.0,
            to: 11.0,
            step: 1.0,
            scale: [1, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 11.0],
            format: '%s',
            width: sliderWidth,
            showLabels: true,
            snap: true
        });

        
        $(".slider-calculation-submit").on("click",function(){
            

            if (w > 767) {
                var valueOfX = $('.single-slider').val();
                var valueOfY = $('.single-slider-2').val();
            }else {
               var valueOfX = $('#course-cost').val();
                var valueOfY = $('#number-of-student').val();

                // alert(valueOfX);
            }

            

            

            

            var valueOfB = valueOfX * valueOfY;
            /* var valueOfB = 100; */
            var valueOfA = 0;
            var valueOfC = 0;
            var valueOfBAfterdeduction = 0;
            

            if(!$('input:checkbox[name=twenty_percent]').is(':checked') && !$('input:checkbox[name=ten_percent]').is(':checked')){
                valueOfBAfterdeduction = valueOfB;
            }else if($('input:checkbox[name=twenty_percent]').is(':checked') && $('input:checkbox[name=ten_percent]').is(':checked')){
                valueOfBAfterdeduction = valueOfB - (valueOfB * 0.3);
            }else if($('input:checkbox[name=twenty_percent]').is(':checked')){
                valueOfBAfterdeduction = valueOfB - (valueOfB * 0.2);
            }else{
                valueOfBAfterdeduction = valueOfB - (valueOfB * 0.1);
            }

            valueOfA = (150000 / valueOfBAfterdeduction) * 30;
            $('.value-of-A').text( valueOfA.toFixed() );

            $('.value-of-B').text( valueOfBAfterdeduction.toFixed(2) );

            valueOfC = 12 * valueOfBAfterdeduction;
            $('.value-of-C').text( valueOfC.toFixed(2) );


            /* GOOGLE MAP INTEGRATION - FEB 22 */
            var latitude = parseFloat($(".googleMap").attr("latitude"));
            var longitude = parseFloat($(".googleMap").attr("longitude"));
            var mapProp = {
                center: new google.maps.LatLng(latitude, longitude),
                zoom: 10,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var image = 'http://www.google.com/mapfiles/marker.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: latitude,
                    lng: longitude
                },
                map: map,
                icon: image
            });


        });
        




    });


    jQuery(window).load(function () {


    });


}(jQuery));