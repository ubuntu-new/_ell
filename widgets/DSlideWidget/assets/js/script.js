$(document).ready(function() {
    $('.ds-items').slick({
        //rows: 2,
        infinite: true,
        //slidesToShow: 4,
        //slidesToScroll: 4,
        arrows: false,
        dots: true,
        dotsClass: 'ds-dots',
        customPaging: function(slider, i) {
            return '';
        }
    });

    $(".ds-item").on("click", function() {
        changeDsData($(this));
    });

    /*if ($(".ds-item")) {
        changeDsData($(".ds-item").first());
    }*/
});

function changeDsData($element) {
    if ($element.length) {
        var $container = $element.closest(".ds-items-container").prev(".ds-main-container");
        var name = $element.data("name");
        var title = $element.data("title");
        var desc = $element.data("desc");
        var imageSrc = $element.find("img").prop("src");

        setDsImage($container.find(".ds-main-img"), imageSrc, name);
        setDsData($container.find(".ds-main-name"), name);
        setDsData($container.find(".ds-main-title"), title);
        setDsData($container.find(".ds-main-desc"), desc);
    }
}

function setDsData(element, text) {
    $(element).html(text);
}

function setDsImage(image, src, alt) {
    $(image).attr({"src": src, "alt": alt}).css("display", "block");
}