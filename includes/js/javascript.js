$(document).ready(function(){

    // FlexSlider Plugin
    $('.flexslider').flexslider({
        animation: "slide",
        directionNav: false
    });


    var windowWidth = $(document).width();

    // Menu Scroll Function
    $(window).scroll(function(){
        if ($(this).scrollTop() > 0) {
            $('nav').addClass('fixed');
        } else {
            $('nav').removeClass('fixed');
        }
    });

    // Set Wrappers Height
    var windowHeight = $(window).height();

    $('#intro').css("height", windowHeight);
    $('#lessons').css("height", windowHeight);
    $('#holiday').css("height", windowHeight);

    $(window).resize(function() {
        windowHeight = $(window).height();

        $('#intro').css("height", windowHeight);
        $('#lessons').css("height", windowHeight);
        $('#holiday').css("height", windowHeight);
    });


    // Scroll Down Function
    var scrollTop       = $(window).scrollTop();
    var elementOffset   = $('#lessons').offset().top;
    var distance        = (elementOffset - scrollTop);

    $('#scroll-down').click(function(){
        $('html, body').animate({ scrollTop: distance }, 600);
        return false
    });

    // Scroll Up Fade In/Out
    $('#scroll-up').hide();

    $(window).scroll(function(){
        if($(this).scrollTop() < 100){
            $('#scroll-up').fadeOut();
        } else {
            $('#scroll-up').fadeIn();
        }
    });
    // Scroll Up Function
    $('#scroll-up').click(function(){
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false
    });

    // Determine If Nav Is Fixed Or Relative
    var menu_fixed = 65;

    $(window).scroll(function(){
        if($(this).scrollTop() > 0){
            menu_fixed = 0;
        } else {
            menu_fixed = 65;
        }
    });

    // Menu Scroll To Element
    $('.nav').find('a[href*=#]').click(function (e) {
        e.preventDefault();

        var target      = $(this).attr('href');
        var navHeight   = $('nav').height();
        var scrollTo    = $(target).offset().top - navHeight - menu_fixed;

        $('html,body').animate({'scrollTop': scrollTo }, 500);

        return false;
    });

    // Banner Menu Function
    $('.banner-button-2').click(function(){

        return false;
    });


    // Tile Flipper Function
    //function tile_flipper(){
    //
    //    var timer;
    //
    //    var ttnt = 7000;        // time to next tile
    //    var ttht = 6000;        // time to hide tile
    //
    //    function flip_tile(){
    //        if(!$('.flip-container').hasClass('active')){
    //            $('.flip-container').first().addClass('active');
    //        }
    //
    //        $('.tile-timer-fill').css('width', 0);                                      // Set the animate back to default
    //        $('.tile-timer-fill').stop().animate({width:windowWidth+'px'}, ttht);              // Start the timer animation
    //
    //        $('.active').find('.flipper').addClass('flip-container-hover');             // Add the flip CSS Transition
    //
    //        setTimeout(function(){
    //            $('.flipper').removeClass('flip-container-hover');                      // Remove the CSS Transition After the timeout is completed
    //        }, ttht);
    //
    //        var next = $('.active').next();                                             // Save the next tile in a variable
    //        $('.flip-container').removeClass('active');                                 // Remove the active class from the tile
    //        next.addClass('active');                                                    // Add the active class to the next tile
    //    }
    //    timer = setInterval(flip_tile, ttnt);                                           // Set the interval timer
    //
    //    $('.flip-container').hover(function(){
    //        clearInterval(timer);                                                       // Clear the interval timer
    //        $('.flipper').removeClass('flip-container-hover');                          // Remove the CSS Transition on hover
    //        $('.tile-timer-fill').css('width', 0);                                      // Stop the timer animation
    //        $(this).find('.flipper').addClass('flip-container-hover');                  // Add the CSS Transition on HOVER ON
    //    }, function(){
    //        $('.flipper').removeClass('flip-container-hover');                          // Remove the CSS Transition on HOVER OUT
    //        timer = setInterval(flip_tile, ttnt);                                       // Set the new interval timer
    //    });
    //}
    //tile_flipper();
});



