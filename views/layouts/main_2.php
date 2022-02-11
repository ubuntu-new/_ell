<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\social\FacebookPlugin;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<!-- Briefcase Header -->
<style>
    .navbar-default {
        /*border-bottom: 2px solid #1D386B;*/
        background-color: #1D386B;
        border-radius: 0;
        border-right: none;
        padding: 4px 0;
        z-index: 100;
    }

    .level-1 > ul > li {
        display: inline-block !important;
        border-left: 2px solid #f1f1f1 !important;
        margin-right: -5px !important;
        position: relative !important;
    }

    .level-1 li a {
        font-family:  Nexa !important;
        text-transform: uppercase !important;
        font-weight: normal !important;
        font-size: 14px !important;
        display: block !important;
        color: white !important;
        padding: 16px 30px !important;
        letter-spacing: 1px;
    }

    .bc-nav {
        height: 100px;
        border-top: #1D386B !important;
    }

    .navbar-default {
        border-color: #1D386B !important;
    }

    .bc-nav .logo {
        border-right-color: #1D386B;
    }

    .header-1 {
        background-position: center center;
        background-size: cover;
        height: 100%;
        -webkit-clip-path: polygon(0 0, 60% 0, 35% 100%, 0% 100%);
        clip-path: polygon(0 0, 60% 0, 35% 100%, 0% 100%);
        position: absolute;
        top: 0px;
        width: 100%;
        height: 600px;
        cursor: pointer;
        -webkit-transition: clip-path 1s; /* For Safari 3.1 to 6.0 */
        transition: clip-path 1s;
    }

    /*.header-1:hover {*/
    /*-webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);*/
    /*clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);*/
    /*z-index: 10;*/
    /*}*/

    .header-english {
        background-position: center center;
        background-size: cover;
        width: 100%;
        height: 600px;

    }

    .header-23 {
        background-position: center center;
        background-size: cover;
        height: 100%;
        clip-path: polygon(60% 0%, 100% 0, 100% 100%, 35% 100%);
        position: relative;
        top: 0px;
        width: 100%;
        height: 600px;
        -webkit-transition: clip-path .5s; /* For Safari 3.1 to 6.0 */
        transition: clip-path .5s;
    }
    .header-2 {
        background-position: center center;
        background-size: cover;
        height: 100%;
        clip-path: polygon(60% 0%, 100% 0, 100% 100%, 35% 100%);
        position: relative;
        top: 0px;
        width: 100%;
        height: 600px;
        -webkit-transition: clip-path .5s; /* For Safari 3.1 to 6.0 */
        transition: clip-path .5s;
    }

    .header-2:hover {
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        z-index: 11;
    }



    .white {
        color: white !important;
    }

    .big {
        font-size: 60px !important;
    }

    .MultiCarousel {
        float: left;
        overflow: hidden;
        padding: 10px;
        width: 100%;
        position: relative;
    }

    .MultiCarousel .MultiCarousel-inner {
        transition: 1s ease all;
        float: left;
        margin-left: 9px;
    }

    .MultiCarousel .MultiCarousel-inner .item {
        float: left;
        padding: 16px;
    }

    .MultiCarousel .MultiCarousel-inner .item > div {
        text-align: center;
        padding: 10px;
        margin: 10px;
        background: #f1f1f1;
        color: #666;
    }

    .MultiCarousel .leftLst, .MultiCarousel .rightLst {
        position: absolute;
        border-radius: 50%;
        top: calc(50% - 50px);
    }

    .MultiCarousel .leftLst {
        left: -26px;
        background: transparent;
        border: none;
    }

    .MultiCarousel .rightLst {
        right: -26px;
        background: transparent;
        border: none;
    }

    .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over {
        pointer-events: none;
        background: transparent !important;
        border: none !important;
    }

    .parallax {
        /* The image used */
        background-image: url("uploads/main/paralex.jpg");

        /* Set a specific height */
        height: 220px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .noparallax {
        /* The image used */
        background-image: url("uploads/main/london.jpg");

        /* Set a specific height */
        height: 220px;

        /* Create the parallax scrolling effect */
        background-attachment: scroll;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /*div.center-cropped {*/
        /*width: 161px !important;*/
        /*height: 161px !important;*/
        /*overflow: hidden;*/
    /*}*/

    /*div.center-cropped img {*/
        /*height: 100%;*/
        /*min-width: 100%;*/
        /*left: 50%;*/
        /*position: relative;*/
        /*transform: translateX(-50%);*/
    /*}*/

    #more {
        display: none;
    }

    #more1 {
        display: none;
    }

</style>
<?php
//NavBar::begin([
//    'brandLabel' => Yii::$app->name,
//    'brandUrl' => Yii::$app->homeUrl,
//    'options' => [
//        'class' => 'navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top',
//    ],
//]);
//echo Nav::widget([
//    'options' => ['class' => 'navbar-nav navbar-right'],
//    'items' => [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//        Yii::$app->user->isGuest ? (
//        ['label' => 'Login', 'url' => ['/site/login']]
//        ) : (
//            '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>'
//        )
//    ],
//]);
//NavBar::end();
//?>
<header class="menu-wrap">
    <div class="bc-nav cf">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo.png" style="width: 120px;">
                        </a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!--                <ul class="nav navbar-nav">-->
                    <!---->
                    <!--                    <li><a href="#">&nbsp;</a></li>-->
                    <!---->
                    <!--                </ul>-->

                    <ul class="nav navbar-nav navbar-left level-1" style="position: relative; top:34px;">
                        <li><a href="index.php#about" >ABOUT US</a></li>
<!--                        <li><a href="--><?//= \yii\helpers\Url::to(['about/index']) ?><!--">STUDY ABROAD</a></li>-->
                        <li><a href="<?= \yii\helpers\Url::to(['english/', 'id' => '3']) ?>">ENGLISH CENTER</a></li>
                        <li><a href="">GALLERY</a></li>
                        <li><a href="">NEWS</a></li>
                        <li><a href="">CONTACTS</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>


    <!-- End briefcase navigation -->
</header>
<?php if (!isset($_GET["id"])): ?>
    <!-- Briefcase Header -->
    <div style="position: relative;">
        <div id="clickMeId " onclick="show('comment'); hide('clickMeId')" class="header-1" style="background-image: url('uploads/main/header2.jpg'); ">
            <!-- Page Title -->
            <div class="header-1-title-wrapper">
                <!--            <h1 class="header-1-title uppercase" style="position: absolute;width: 350px;top: 50%;transform: translateY(-50%);text-align: center">-->
                <h1 class="header-1-title uppercase bebas" style="position: absolute;width: 500px;top: 50%;transform: translateY(-50%);text-align: right; padding-left: 80px;">
                    STUDY ABROAD
                </h1>
            </div>
        </div>

        <div class="header-2 " style="background-image: url('uploads/main/header1.jpg');  ">
            <!-- Page Title -->
            <div class="header-2-title-wrapper">
                <h1 class="header-2-title uppercase" style="position: absolute ;width: 350px;top: 50%; right:250px;transform: translateY(-50%);text-align: left; font-family: bebaNeunRegularl;"
                    onclick="location.href='<?= \yii\helpers\Url::to(['english/', 'id' => '3']) ?>';">
                    English Center
                </h1>
            </div>
        </div>





    </div>
    <div style="position: relative;height: 20px;">&nbsp;</div>
    <div class="row">
        <div class="large-4 four columns" style="background-color: #E22140; height: 150px;">
            <h2 class="uppercase text-center white" style="position: relative; top: 30px; font-family: BebasNeueRegular !important; font-size: 36px !important;">Educational Institution</h2>
            <p class="uppercase text-center white big" style="position: relative; top: 50px; ">
                <span id="lines" data-number="300" style="font-family: BebasNeueRegular !important; font-size: 64px !important;">0</span>
            </p>
        </div>
        <div class="large-4 four columns" style="background-color: #1D386B; height: 150px;">
            <h2 class="uppercase text-center white" style="position: relative; top: 30px; font-family: BebasNeueRegular !important; font-size: 36px !important; ">Countries</h2>

            <p class="uppercase text-center white big" style="position: relative; top:50px;">
                <span id="countries" data-number="50" style="font-family: BebasNeueRegular !important; font-size: 64px !important;">0</span>
            </p>
        </div>
        <div class="large-4 four columns" style="background-color: #0B2C5B; height: 150px;">
            <h2 class="uppercase text-center white" style="position: relative; top: 30px; font-family: BebasNeueRegular !important; font-size: 36px !important; ">Students</h2>

            <p class="uppercase text-center white big" style="position: relative; top: 50px;">
                <span id="students" data-number="4000" style="font-family: BebasNeueRegular !important; font-size: 64px !important;">0</span>
            </p>
        </div>
    </div>
    <div style="position: relative;height: 100px;">&nbsp;</div>
<?php endif;?>


    <!-- #Header Ends -->
    <div class="wrap">
        <div class="container-fluid" style="position: relative;padding-left: 0;
    padding-right: 0;">
            <?= $content ?>
        </div>
    </div>


<?php if (!isset($_GET["id"])): ?>
    <!-- parallax -->
    <div class="noparallax">
        <img id="image" src="uploads/main/london.jpg" style="width:100%; height: 220px;">
    </div>
    <!-- #parallax Ends -->
    <div style="position: relative;height: 100px;">&nbsp;</div>
    <!-- About us -->
    <div class="row" id="about">

        <!-- Three Column -->
        <div class="row">
            <div class="large-4 four columns">
                &nbsp;
            </div>
            <div class="large-4 four columns" style="border-bottom: 4px solid #E22140">
                <h1 class="uppercase text-center">About us</h1>
            </div>
            <div class="large-4 four columns">
                &nbsp;
            </div>
        </div>
             <div class="large-12 twelve columns">
                 <p>&nbsp;</p>
            <p>
                ELL Educational Agency was founded in 2002 in Tbilisi Georgia. Prior to this process a two year
                preparation was carried out which involved signing agreements and receiving certificates of
                representation with Universities , Colleges and Language School in UK, USA and Europe.
            </p>

            <p>
                ELL was the first education agency on Georgian market that time. Nowadays we are regarded as one of the
                most professional agents in Georgia with excellent reputation and references from our clients and
                educational institutions.
            </p>

            <p>
                In 2005 ELL opened English Language Centre which has been operating successfully as General English and
                Cambridge English Preparation centre aimed at students taking Cambridge exams KET, PET, FCE, CAE, IELTS
                or TOEFL and continue to study abroad.
            </p>

            <p>
                In recognition of ELL success Language Centre was granted by Cambridge English Language Assessment body
                as official Cambridge English Preparation Centre.
            </p>
            <span id="dots"></span><span id="more">

            <p>
                ELL is also gold level holder of British Council Bonus Programme Addvantage in preparing students for
                Cambridge Exams.
            </p>
                </p>
                <p>
                    ELL staff members take part in professional trainings and are certified counselors after
                    successfully passing variety of International exams in Educational field.
                </p>

                <!-- Two Column -->
    <div class="row">
        <div class="large-6 six columns">

            <ul> <h5 class="uppercase">ELL agency is official partner agency of:</h5>
                <li>English UK partner Agency.</li>
                <li>ICEF Agency (Germany).</li>
                <li>British Council.</li>
            </ul>
        </div>
        <div class="large-6 six columns">
            <ul><h5>ELL Education Agency participates in annual education forums and meetings such as:</h5>
                <li>Studyworld – London</li>
                <li>Alphe UK - London</li>
                <li>British Boarding School Workshop - UK</li>
                <li>English UK workshops</li>
                <li>ICEF Berlin</li>
                <li>ICEF Higher Education workshops</li>
                <li>UCAS- International Teachers and Advisers Conference London</li>
                <li>British Council International Agent Fairs.</li>
            </ul>
        </div>
    </div>
    </span>
        <button class="small alert" onclick="myFunction()" id="myBtn">read more</button>
        </div>
        <!-- Three Column -->
        <div class="row">
            <div class="large-4 four columns">
                &nbsp;
            </div>
            <div class="large-4 four columns">
                <img src="uploads/main/1.png">
            </div>
            <div class="large-4 four columns">&nbsp;</div>
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
                <h1 class="uppercase text-center">OUR TEAM</h1>
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
    <div class="container-fluid" style="background-color: #1D386B;padding: 20px 0">
        <div class="row">
            <div class="owl-carousel" >
                <div class="photobox photobox_type22">
                    <div class="photobox__previewbox" style="background-image: url('uploads/team/nargiza.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;"></div>
                    <span class="photobox__label" style="width: 85%">
                           <h2>Nargiza<br>Makatsaria</h2>
                           <p class="light">Founder and General Director </p>
                    </span>
                </div>
                <div class="photobox photobox_type22">
                    <div class="photobox__previewbox" style="background-image: url('uploads/team/merab.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;"></div>
                    <span class="photobox__label" style="width: 85%; margin-left:-12px">
                           <h2>Merab Gabuinia</h2>
                           <p class="light">Founder and The chairman of the supervisory board</p>
                    </span>
                </div><div class="photobox photobox_type22">
                    <div class="photobox__previewbox" style="background-image: url('uploads/team/tinatin.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;"></div>
                    <span class="photobox__label" style="width: 85%; margin-left:-12px">
                           <h2>Tinatin Mumladze</h2>
                           <p class="light">Education Manager, English Language Teacher </p>
                    </span>
                </div><div class="photobox photobox_type22">
                    <div class="photobox__previewbox" style="background-image: url('uploads/team/ann.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;"></div>
                    <span class="photobox__label" style="width: 85%; margin-left:-12px">
                           <h2>Ann Chomakhidze</h2>
                           <p class="light">Education Manager, English Language Teacher</p>
                    </span>
                </div><div class="photobox photobox_type22">
                    <div class="photobox__previewbox" style="background-image: url('uploads/team/inga.jpg'); background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;"></div>
                    <span class="photobox__label" style="width: 85%; margin-left:-12px">
                           <h2>Inga Kiknadze</h2>
                           <p class="light">Study  Director of ELL  English Language Centre, English Language Teacher</p>
                    </span>
                </div><div class="photobox photobox_type22">
                    <div class="photobox__previewbox" style="background-image: url('uploads/team/nato.jpg');background-position: center center;background-size: cover;  width: 165px; height:165px;border-radius: 50%; background-repeat: no-repeat;"></div>
                    <span class="photobox__label" style="width: 85%; margin-left:-12px">
                           <h2>Nato Goguadze</h2>
                           <p class="light">Office Manager</p>
                    </span>
                </div>
            </div>

        </div>
    </div>
    <div style="position: relative;height: 100px;">&nbsp;</div>
    <!-- parallax -->
    <div class="parallax"></div>
    <!-- #parallax Ends -->
    <div style="position: relative;height: 100px;">&nbsp;</div>
    <!-- ELL PROVIDES -->
    <div class="row" id="footer">
        <div class="twelve large-12 columns">
            <h1>ELL PROVIDES</h1>
            <p>
            <ul>
                <li>Free counseling regarding studying abroad.</li>
                <li>Assistance in choosing the study programmes at prestigious and highly ranked ELL Partner
                    universities, colleges and summer schools in UK, USA, Europe, Canada, Asia, Australia and New
                    Zealand.
                </li>
                <li>Assistance with university , college or language school admission procedures including: submitting
                    applications, booking the accommodation, purchasing long terms study insurance, arranging airport
                    transfers upon request.
                </li>
                <li>Assistance with completing long term student visa applications, preparing relevant documents to
                    present at consular sections of the Embassy.
                </li>
                <li>Counseling student how to get scholarships and student loans..</li>
                <li>Preparing student for Cambridge ESOL exams - PET, FCE,CAE and also for IELTS, TOEFL at ELL English
                    Language Centre .
                </li>
            </ul>
            </p>
            </span>
            <button class="small def" onclick="myFunction()" id="myBtn1">read more</button>
        </div>
    </div>
<?php endif;?>
    <!-- #About us -->
    <div style="position: relative;height: 100px;">&nbsp;</div>

<!-- Contact  -->
<!-- Footer  -->
<div class="container-fluid" style="width: 100% !important;  padding-left: 0; padding-right:0">
    <div class="row" id="bg-contact" style="height: 250px; min-width: 100% !important;">
        <div class="twelve large-12 columns">
            <div id="footer-info">
<!--                <ul>-->
<!--                    <li><span>Address:</span>Heidemann Str 116 50825 Cologne</li>-->
<!--                    <li><span>Phone:</span>49-221-3401857</li>-->
<!--                    <li><span>Email:</span>gestaltungsbuero@gmail.com</li>-->
<!--                    <li><span>Facebook:</span>https://www.facebook.com/PeterMoennigFoundation/</li>-->
<!--                </ul>-->
            </div>
            <?php echo FacebookPlugin::widget(['appId' => '249695945477658', 'type' => FacebookPlugin::LIKE, 'settings' => ['size' => 'small']]); ?>
            <!--        <div id="social-links">-->
            <!--            <ul>-->
            <!--                <li class="social dribble"><a href="#"></a></li>-->
            <!--                <li class="social facebook"><a href="#"></a></li>-->
            <!--                <li class="social twitter"><a href="#"></a></li>-->
            <!--                <li class="social google"><a href="#"></a></li>-->
            <!--                <li class="social flickr"><a href="#"></a></li>-->
            <!--            </ul>-->
            <!--        </div>-->

        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


<script>
    function show(toBlock) {
        setDisplay(toBlock, 'block');
    }
    function hide(toNone) {
        setDisplay(toNone, 'none');
    }
    function setDisplay(target, str) {
        document.getElementById(target).style.display = str;
    }
</script>


<script>
    $(document).ready(function () {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();


        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                }
                else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers});
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            }
            else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
</script>


<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }


        var dots1 = document.getElementById("dots1");
        var moreText1 = document.getElementById("more1");
        var btnText1 = document.getElementById("myBtn1");

        if (dots1.style.display === "none") {
            dots1.style.display = "inline";
            btnText1.innerHTML = "Read more";
            moreText1.style.display = "none";
        } else {
            dots1.style.display = "none";
            btnText1.innerHTML = "Read less";
            moreText1.style.display = "inline";
        }
    }
</script>

