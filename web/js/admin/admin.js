var $uploadDir = null;
var $cvId = null;


$(document).ready(function() {


    var days = $("#product-date");


    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    if (mm > 10) month = mm; else month = "0"+mm;
    if (dd > 10 ) day = dd; else day = "0"+dd;
    var k =yyyy+"-"+mm+"-"+dd;

    days.flatpickr({
        defaultDate: k

    });


    $(".profileImg").on({
        mouseenter: function () {
            $(".imgUploadHover").show("slide", { direction: "down" }, 200);
        },
        mouseleave: function () {
            $(".imgUploadHover").hide("slide", { direction: "down" }, 200);
        }
    });








$("#ragac").click(function(){
    $("#avatarInput").click();

});





    $(".uploadFile").click(function(){
        if ($(this).data("field")) {
            $("#field").val($(this).data("field"))
        } else $("#field").val("");

        $("#dirName").val($(this).data("dir"));
        $("#cvId").val($(this).data("cvedid"));
        $uploadDir = $(this).data("dir");
        $("#file").click();
    });


    $('#uploadForm').submit(function (e) {
        if ($('#file').val() == "") return false;
        if ($('#file').val()) {
            e.preventDefault();
            $('#loader-icon').show();
            $(this).ajaxSubmit({
                target: '#targetLayer',
               /* beforeSubmit: function () {

                    $("#progress-div").fadeIn();
                    $("#progress-bar").width('0%');
                },*/
                /*uploadProgress: function (event, position, total, percentComplete) {
                    $("#progress-bar").width(percentComplete + '%');
                    $("#uploadOverlay").width((100 - percentComplete) + '%');

                    $("#uploadProcents").html(percentComplete + '%')
                },*/
                success: function (img) {
                    var block = $("#field").val();
                    if (block != "") {
                        var fileName = lang.diploma;
                        if ($uploadDir == "letter") fileName = lang.attachment;
                        $("#filename_"+block).val(img);
                        $("#file_"+block).html(fileName).attr("href", phpData.downloadUrl+$uploadDir+"/"+img);

                    } else {
                        var url = "";
                        var field = "";
                        if ($uploadDir == "diplom") {
                            url = phpData.editCvEducationValue;
                            field = "ed_diploma_filename";
                        }
                        else if ($uploadDir == "training") {
                            url = phpData.editCvTrainingValue;
                            field = "tr_diploma_filename"
                        } else if ($uploadDir == "letter") {
                            url = phpData.editCvRecommendValue;
                            field = "rec_letter_filename"
                        }
                        $.ajax({
                            url: url,
                            type: "post",
                            dataType: "text",
                            data: {
                                cv_ed_id: $("#cvId").val(),
                                field_name: field,
                                field_value: img
                            },
                            success: function () {
                                var fileName = lang.diploma;
                                if ($uploadDir == "letter") fileName = lang.attachment;
                                $("#"+$uploadDir+"_"+$("#cvId").val()).html(fileName).attr("href", phpData.downloadUrl+$uploadDir+"/"+img);
                            }
                        });


                    }

                },
                complete: function () {
                  //  $("#progress-div").fadeOut();
                },
                dataType: 'text',
                resetForm: true
            });
            return false;
        }
    });

    });

// $('#exampleSlider').multislider({
//     interval: 4000,
//     slideAll: true,
//     duration: 1500
// });
// $('.exampleSlider').multislider({
//     interval: 4000,
//     slideAll: true,
//     duration: 1500
// });
$('#lines').animateNumber({ number: $("#lines").data("number") },2000);
//$('#lines').animateNumber({ number: $("#lines").data("number") });
$('#countries').animateNumber({ number: $("#countries").data("number") },3000);
$('#students').animateNumber({ number: $("#students").data("number") },4000);
$('#years').animateNumber({ number: $("#years").data("number") },5000);



var imageSources = ["uploads/main/city/1.jpg", "uploads/main/city/2.jpg", "uploads/main/city/3.jpg", "uploads/main/city/4.jpg", "uploads/main/city/5.jpg", "uploads/main/city/6.jpg"]

var index = 0;
setInterval(function(){
    if (index === imageSources.length) {
        index = 0;
    }
    document.getElementById("image").src = imageSources[index];
    index++;
}, 2000);


// $('.owl-carousel').owlCarousel({
//     loop:true,
//     autoplay:true,
//     margin:10,
//     responsiveClass:true,
//     responsive:{
//         0:{
//             items:1,
//             nav:true
//         },
//         600:{
//             items:3,
//             nav:false
//         },
//         1000:{
//             items:5,
//             nav:true,
//             loop:false
//         }
//     }
// })