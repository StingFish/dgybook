/*global $, jQuery, console, alert, prompt, WOW */
$(document).ready(function () {
    'use strict';
    
    // parallax =========================================================================
    $(".parallax").parallax();
    
    // Slider ===========================================================================
    function wowsliderFunc() {
        var sliderLi    = $('.wowslider ul li'),
            ctrlLeft    = $('.wowslider .ctrl .ctrl-content:first-of-type'),
            ctrlRight   = $('.wowslider .ctrl .ctrl-content:last-of-type'),
            arrowLeft   = $('.wowslider .ctrl .ctrl-content:first-of-type .image'),
            arrowRight  = $('.wowslider .ctrl .ctrl-content:last-of-type .image');
        
        function runSlider(selector, image) { // Run Slider
            selector.addClass('wowactive').fadeIn().siblings().removeClass('wowactive').hide();
            new WOW().init();
        }
        
        ctrlLeft.on('click', function () { // Left
            if ($('.wowactive').is(':last-of-type')) {
                runSlider(sliderLi.first());
                arrowLeft.css('background-image', sliderLi.first().next().css('background-image'));
                arrowRight.css('background-image', sliderLi.last().css('background-image'));
            } else {
                runSlider($('.wowactive').next());
                arrowLeft.css('background-image', $('.wowactive').next().css('background-image'));
                arrowRight.css('background-image', $('.wowactive').prev().css('background-image'));
            }
        });
        
        ctrlRight.on('click', function () { // Right
            if ($('.wowactive').is(':first-of-type')) {
                runSlider(sliderLi.last());
                arrowRight.css('background-image', sliderLi.last().prev().css('background-image'));
                arrowLeft.css('background-image', sliderLi.first().css('background-image'));
                
            } else {
                runSlider($('.wowactive').prev());
                arrowRight.css('background-image', $('.wowactive').prev().css('background-image'));
                arrowLeft.css('background-image', $('.wowactive').next().css('background-image'));
            }
        });
        
        $(window).keydown(function (e) { // Keyboard
            if (e.keyCode === 37) {
                if ($(window).scrollTop() === 0) {
                    ctrlLeft.click();
                } else {
                    $('.flipbook-prev').click();
                }
            } else if (e.keyCode === 39) {
                if ($(window).scrollTop() === 0) {
                    ctrlRight.click();
                } else {
                    $('.flipbook-next').click();
                }
            }
        });
        ctrlRight.click();
    }
    wowsliderFunc();
    
    // stylehover When Mouse move ==============================================================
    function moveMouse() {
        var styleHover   = $('.stylehover .help'),
            styleContent = $('.stylehover .parallax-center');
        
        styleHover.hover(function () {
            if (!$($(this).data('content')).is(':visible')) {
                styleContent.hide();
                $($(this).data('content')).show();
                var wowemy = new WOW({
                    boxClass:     'wowemy',
                    animateClass: 'animated',
                    offset:       0,
                    mobile:       true,
                    live:         true
                });
                wowemy.init();
            }
        });
    }
    moveMouse();
    
});


// Em An
// 1/2018