let initSlider = function (id) {
    let $slider = $(id + ' .slideshow .slider'),
        maxItems = $('.item', $slider).length,
        dragging = false,
        tracking,
        rightTracking;

    let $sliderRight = $(id + ' .slideshow').clone().addClass('slideshow-right').appendTo($(id + ' .split-slideshow'));

    let rightItems = $('.item', $sliderRight).toArray();
    let reverseItems = rightItems.reverse();
    $('.slider', $sliderRight).html('');
    for (i = 0; i < maxItems; i++) {
        $(reverseItems[i]).appendTo($('.slider', $sliderRight));
    }

    $slider.addClass('slideshow-left');
    $(id + ' .slideshow-left').slick({
        vertical: true,
        verticalSwiping: true,
        arrows: false,
        infinite: true,
        dots: true,
        appendDots: id + ' .split-slideshow-dots',
        speed: 1000,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {

        if (currentSlide > nextSlide && nextSlide == 0 && currentSlide == maxItems - 1) {
            $(id + ' .slideshow-right .slider').slick('slickGoTo', -1);
        } else if (currentSlide < nextSlide && currentSlide == 0 && nextSlide == maxItems - 1) {
            $(id + ' .slideshow-right .slider').slick('slickGoTo', maxItems);
        } else {
            $(id + ' .slideshow-right .slider').slick('slickGoTo', maxItems - 1 - nextSlide);
        }
    }).on("mousewheel", function(event) {
        event.preventDefault();
        if (event.deltaX > 0 || event.deltaY < 0) {
            $(this).slick('slickNext');
        } else if (event.deltaX < 0 || event.deltaY > 0) {
            $(this).slick('slickPrev');
        };
    }).on('mousedown touchstart', function() {
        dragging = true;
        tracking = $(id + ' .slick-track', $slider).css('transform');
        tracking = parseInt(tracking.split(',')[5]);
        rightTracking = $(id + ' .slideshow-right .slick-track').css('transform');
        rightTracking = parseInt(rightTracking.split(',')[5]);
    }).on('mousemove touchmove', function() {
        if (dragging) {
            newTracking = $('.slideshow-left .slick-track').css('transform');
            newTracking = parseInt(newTracking.split(',')[5]);
            diffTracking = newTracking - tracking;
            $(id + ' .slideshow-right .slick-track').css({'transform': 'matrix(1, 0, 0, 1, 0, ' + (rightTracking - diffTracking) + ')'});
        }
    }).on('mouseleave touchend mouseup', function() {
        dragging = false;
    });

    $(id + ' .slideshow-right .slider').slick({
        swipe: false,
        vertical: true,
        arrows: false,
        infinite: true,
        speed: 950,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        initialSlide: maxItems - 1
    });
};

initSlider('#desk7');
initSlider('#desk101');

