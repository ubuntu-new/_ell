$(document).ready(function() {
    $('.ds-items-partner').slick({
        //rows: 2,
        infinite: true,
        //slidesToShow: 4,
        //slidesToScroll: 4,
        arrows: false,
        dots: true,
        dotsClass: 'ds-dots-partner',
        customPaging: function(slider, i) {
            return '';
        }
    });
});