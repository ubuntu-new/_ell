<?php

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
/**
 * If any parameters are not passed, the widget will use settings from the
 * social module wherever possible. For example `appId` and `secret` will
 * be referred from the module settings for the example below.
 */
?>
<style>
    .row {
        width: 90%;
        margin: 20px auto;
    }
    .card {
        margin: 10px 0;
    }
    .card > .card-content {
        background: red;
        padding: 10px;
        text-align: center;
        font-size: 36px;
        height: 350px;
    }
    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }
</style>

<div class="row carousel slick-initialized slick-slider">
    <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button"
            style="display: inline-block;">Previous
    </button>

        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 01</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 02</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 03</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 04</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 05</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 06</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 07</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 08</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 09</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 10</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 11</div></div>
        <div class="card col-sm-4 col-md-3"><div class="card-content">Card 12</div></div>

    <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button"
            style="display: inline-block;">Next
    </button>
</div>





<script type="text/javascript">

    var slickopts = {
        slidesToShow: 3,
        slidesToScroll: 3,
        rows: 2, // Removes the linear order. Would expect card 5 to be on next row, not stacked in groups.
        responsive: [
            { breakpoint: 992,
                settings: {
                    slidesToShow: 3 } },


            { breakpoint: 776,
                settings: {
                    slidesToShow: 1,
                    rows: 1 // This doesn't appear to work in responsive (Mac/Chrome)
                } }] };



    $('.carousel').slick(slickopts);
    //# sourceURL=pen.js

</script>
<div class="row" id="footer">
    <!-- Three Column -->
    <div class="row">
        <div class="large-4 four columns">
            &nbsp;
        </div>
        <div class="large-4 four columns" style="border-bottom: 4px solid #E22140">
            <h1 class="uppercase text-center">OUR students</h1>
        </div>
        <div class="large-4 four columns">
            &nbsp;
        </div>
    </div>
    <div class="row">
        <div class="large-4 four columns">
            &nbsp;
        </div>
        <div class="large-4 four columns" style="height: 50px;">
            &nbsp;
        </div>
        <div class="large-4 four columns">
            &nbsp;
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #1D386B;padding: 20px 0">
    <div class="row">
        <div class="owl-carousel">
            <div class="photobox photobox_type22">
                <div class="photobox__previewbox"
                     style="background-image: url('uploads/students/EleneJgerenaia.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;">
                    <span class="photobox__label">
                           <h2>Elene Jgerenaia</h2>
                           <p class="light">Student</p>
                    </span>
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div class="photobox__previewbox"
                     style="background-image: url('uploads/students/GiorgiKhatidze.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;">
                    <span class="photobox__label">
                           <h2>Giorgi Khatidze</h2>
                           <p class="light">Student</p>
                    </span>
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div class="photobox__previewbox"
                     style="background-image: url('uploads/students/GiorgiKiladze.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;">
                    <span class="photobox__label">
                           <h2>Giorgi Kiladze</h2>
                           <p class="light">Student</p>
                    </span>
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div class="photobox__previewbox"
                     style="background-image: url('uploads/students/GvantsaGamtkitsulashvili.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;">
                    <span class="photobox__label">
                           <h2>Gvantsa Gamtkitsulashvili</h2>
                           <p class="light">Student</p>
                    </span>
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div class="photobox__previewbox"
                     style="background-image: url('uploads/students/IaGabunia.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;">
                    <span class="photobox__label">
                           <h2>Ia Gabunia</h2>
                           <p class="light">Student</p>
                    </span>
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div class="photobox__previewbox"
                     style="background-image: url('uploads/students/NikaBolkvadze.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;">
                    <span class="photobox__label">
                           <h2>Nika Bolkvadze</h2>
                           <p class="light">Student</p>
                    </span>
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div class="photobox__previewbox"
                     style="background-image: url('uploads/students/NiniSarishvili.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;">
                    <span class="photobox__label">
                           <h2>Nini Sarishvili</h2>
                           <p class="light">Student</p>
                    </span>
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div class="photobox__previewbox"
                     style="background-image: url('uploads/students/TeaGamtkitsulashvili.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;">
                    <span class="photobox__label">
                           <h2>Tea Gamtkitsulashvili</h2>
                           <p class="light">Student</p>
                    </span>
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div class="photobox__previewbox"
                     style="background-image: url('uploads/students/VladimerGabunia.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;">
                    <span class="photobox__label">
                           <h2>Vladimer Gabunia</h2>
                           <p class="light">Student</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="position: relative;height: 100px;">&nbsp;</div>
<div class="row" id="footer">
    <!-- Three Column -->
    <div class="row">
        <div class="large-4 four columns">
            &nbsp;
        </div>
        <div class="large-4 four columns" style="border-bottom: 4px solid #E22140">
            <h1 class="uppercase text-center">OUR PARTNERS</h1>
        </div>
        <div class="large-4 four columns">
            &nbsp;
        </div>
    </div>
    <div class="row">
        <div class="large-4 four columns">
            &nbsp;
        </div>
        <div class="large-4 four columns">
            &nbsp;
        </div>
        <div class="large-4 four columns">
            &nbsp;
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: white">
    <div class="row">
        <div class="owl-carousel" style="padding-top: 30px !important;">
            <div class="photobox photobox_type22">
                <div class=""
                     style="background-image: url('uploads/main/partners/1.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/2.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/3.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/4.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/5.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/6.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/7.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/8.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/9.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/10.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/11.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/12.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/13.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/14.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/15.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/16.jpg'); background-position: center center;background-size: cover;  width: 160px; height:80px;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="photobox photobox_type22">
                <div
                        style="background-image: url('uploads/main/partners/17.jpg'); background-position: center center;background-size: cover;  width: 160px; height:auto;background-repeat: no-repeat;">
                </div>
            </div>
        </div>

    </div>
</div>


<div style="position: relative;height: 100px;">&nbsp;</div>

