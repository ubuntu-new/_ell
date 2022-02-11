$(document).ready(function() {
    // console.log("fdfd");
    $('.ds-items-about').slick({
        //rows: 2,
        infinite: true,
        //slidesToShow: 4,
        //slidesToScroll: 4,
        arrows: false,
        dots: true,
        dotsClass: 'ds-dots-about',
        customPaging: function(slider, i) {
            return '';
        }
    });

    $(".ds-item-about").on("click", function() {
        changeDsDataAbout($(this));
    });

    /*if ($(".ds-item")) {
        changeDsData($(".ds-item").first());
    }*/
});

function changeDsDataAbout($element) {
    if ($element.length) {
        var $container = $element.closest(".ds-items-container-about").next(".ds-main-container-about");
        var name = $element.data("name");
        var title = $element.data("title");
        var desc = $element.data("desc");
        var imageSrc = $element.find("img").prop("src");

        setDsImageAbout($container.find(".ds-main-img-about"), imageSrc, name);
        setDsDataAbout($container.find(".ds-main-name-about"), name);
        setDsDataAbout($container.find(".ds-main-title-about"), title);
        setDsDataAbout($container.find(".ds-main-desc-about"), desc);
    }
}

function setDsDataAbout(element, text) {
    $(element).text(text);
}

function setDsImageAbout(image, src, alt) {
    $(image).attr({"src": src, "alt": alt}).css("display", "block");
}