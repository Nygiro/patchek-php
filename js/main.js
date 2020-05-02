$(function () {
    // Gestion de l'ouverture de la nav
    $('.btn').click(open);
    $('.content').click(open);

    $('.carousel').carousel({
        interval: 2000
    });

    function open() {
        $('.content').toggleClass('content-open');
        $('.wrap').toggleClass('right');
        $('body').toggleClass('overflow');
        $('.bar').toggleClass('animate');
    };

    // Gestion de l'icone son 
    $('.sound').click(function () {
        $(this).toggleClass('sound-mute');
        var vid = document.getElementById("myVideo");
        if (vid.muted) {
            vid.muted = false;
        } else {
            vid.muted = true;
        }
    });
    var myVideo = document.getElementById('myVideo');
    var playButton = document.getElementById('playButton');

    playButton.addEventListener('click', function () {
        if (myVideo.paused) {
            if (myVideo.requestFullscreen) {
                myVideo.requestFullscreen();
            }
            else if (myVideo.msRequestFullscreen) {
                myVideo.msRequestFullscreen();
            }
            else if (myVideo.mozRequestFullScreen) {
                myVideo.mozRequestFullScreen();
            }
            else if (myVideo.webkitRequestFullScreen) {
                myVideo.webkitRequestFullScreen();
            }
            myVideo.play();
        }
        else {
            myVideo.pause();
        }
    }, false);

    $('section.section').css('top', '400%');

    // slider 
    $('a.right').css('padding-left', '0px')



    if (window.matchMedia("(min-width: 572px)").matches) { } else {
        $('section.patch').after('<section class="fakesection"></section><section class="fakesection"></section><section class="fakesection"></section>');
        $('.carousel-inner .item img').css('width', '80%');
        $('.carousel-inner .item img').css('margin', '0 auto');
        $('#myCarousel, .carousel').css('top', '-30px');


    }


    $(".main").onepage_scroll({
        sectionContainer: "section", // sectionContainer accepts any kind of selector in case you don't want to use section
        easing: "ease-out", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
        // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
        animationTime: 1000, // AnimationTime let you define how long each section takes to animate
        pagination: true, // You can either show or hide the pagination. Toggle true for show, false for hide.
        updateURL: false, // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
        beforeMove: function (index) { }, // This option accepts a callback function. The function will be called before the page moves.
        afterMove: function (index) {
            if (index !== 1) {
                var vid = document.getElementById("myVideo");
                vid.pause();
            } else {
                var vid = document.getElementById("myVideo");
                vid.play();
            }


            if (index == 2) {
                $(".agence div.middle h1 span").css({
                    'opacity': '1'
                });
                $('.agence .left-content div.block-center img:first-of-type').css({
                    'opacity': '1',
                    'left': '-16%',
                    'top': '18px'
                });
                $('.agence .left-content div.block-center img:last-of-type').css({
                    'opacity': '1',
                    'top': '-15px'
                })
            }
            if (index == 3) {
                $(".patch div.middle h1 span").css({
                    'opacity': '1'
                });
                $('.patch .left-content div.block-center img:first-of-type').css({
                    'opacity': '1',
                    'left': '-16%',
                    'top': '18px'
                });
                $('.patch .left-content div.block-center img:last-of-type').css({
                    'opacity': '1',
                    'top': '-15px'
                })
            }

            //fleche 
            $('img.fleche').click(function (e) {
                e.preventDefault();
                if (index == 1) {
                    console.log(index);
                    $(".main").moveTo(2);
                } else if (index == 2) {
                    $(".main").moveTo(3);
                    console.log(index);
                } else if (index == 3) {
                    $(".main").moveTo(4);
                    console.log(index);
                } else if (index == 4) {
                    $(".main").moveTo(5);
                    console.log(index);
                }
            })

            $('.tchek').click(function(e) {
                e.preventDefault();
                $(".main").moveTo(5);
            })

            // mediaqueries
            if (window.matchMedia("(min-width: 572px)").matches) { } else {
                if (index == 2) {
                    $('.agence .left-content div.block-center img:first-of-type').css({
                        'opacity': '1',
                        'left': '-43%',
                        'top': '18px'
                    });
                    $('.agence .left-content div.block-center img:last-of-type').css({
                        'opacity': '1',
                        'top': '-15px',
                        'right': '-43%'
                    })
                }
                if (index == 4) {
                    $(".patch div.middle h1 span").css({
                        'opacity': '1'
                    });
                    $('.patch .left-content div.block-center img:first-of-type').css({
                        'opacity': '1',
                        'left': '-43%',
                        'top': '18px'
                    });
                    $('.patch .left-content div.block-center img:last-of-type').css({
                        'opacity': '1',
                        'top': '-15px',
                        'right': '-43%'
                    })
                }
                if (index == 5) {
                    $('#myCarousel').css('height', 'calc(50vh - 37.5px);');
                }

            }
        }, // This option accepts a callback function. The function will be called after the page moves.
        loop: false, // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
        keyboard: true, // You can activate the keyboard controls
        responsiveFallback: false, // You can fallback to normal page scroll by defining the width of the browser in which
        // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
        // the browser's width is less than 600, the fallback will kick in.
        direction: "vertical" // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
    });


    // maps
    var map = new GMaps({
        div: "#map1",
        lat: 46.148274,
        lng: -1.1565159999999999,
        width: '100%',
        height: '100vh',
    });

    map.addMarker({
        lat: 46.148274,
        lng: -1.1565159999999999,
        title: 'Patch.ek',
        infoWindow: {
            content: 'Agence Patch.ek'
        }
    });


    // form
    $('.contact-form').hide();
    $('.btn-contact').click(function (e) {
        e.preventDefault();
        $('ul.num, .btn-contact').fadeOut(function () {
            $('.contact-form').fadeIn();
        });
    });
    $('input[type="submit"]').click(function (e) {
        e.preventDefault();
        $('.contact-form').fadeOut(function () {
            $('ul.num, .btn-contact').fadeIn();
        });
    });

});