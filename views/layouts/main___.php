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
            padding: 20px 0;
        }

        .level-1 > ul > li {
            display: inline-block !important;
            border-left: 2px solid #f1f1f1 !important;
            margin-right: -5px !important;
            position: relative !important;
        }

        .level-1 li a {
            font-family: 'Montserrat', sans-serif !important;
            text-transform: uppercase !important;
            font-weight: bold !important;
            font-size: 12px !important;
            display: block !important;
            color: black !important;
            padding: 16px 30px !important;
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
        .header-1
        {
            background-position: center center;
            background-size: cover;height:100%;
            -webkit-clip-path: polygon(0 0, 60% 0, 35% 100%, 0% 100%);
            clip-path: polygon(0 0, 60% 0, 35% 100%, 0% 100%);
            position: absolute;
            top: 0px;
            width: 100%;
            height: 600px;
            cursor: pointer;
        }
        /*.header-1:hover*/
        /*{*/
            /*-webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);*/
            /*clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);*/
            /*z-index: 10;*/
        /*}*/
        .header-2
        {
            background-position: center center; background-size: cover;height:100%;    clip-path: polygon(60% 0%, 100% 0, 100% 100%, 35% 100%);
            position: relative;
            top: 0px;
            width: 100%;
            height: 600px;
        }
        /*.header-2:hover*/
        /*{*/
            /*-webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);*/
            /*clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);*/
            /*z-index: 11;*/
        /*}*/
        .header-1-title
        {
            font-weight: bold;
            font-size: 120px;
            line-height: 100px;
            position: relative;
            z-index: 1;
            color: white;
        }
        .header-2-title
        {
            font-weight: bold;
            font-size: 120px;
            line-height: 100px;
            position: relative;
            z-index: 1;
            color: #1D386B;
        }

    </style>

    <header class="menu-wrap">
        <div class="bc-nav cf">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
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
                            <a href="index.php"><h1 class="uppercase">PETER MOENNIG FOUNDATION</h1></a>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!--                <ul class="nav navbar-nav">-->
                        <!---->
                        <!--                    <li><a href="#">&nbsp;</a></li>-->
                        <!---->
                        <!--                </ul>-->

                        <ul class="nav navbar-nav  level-1">
                            <li><a href="<?= \yii\helpers\Url::to(['about/index']) ?>">ABOUT US</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['about/index']) ?>">STUDY ABROAD</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['category/view', 'id' => '3']) ?>">ENGLISH CENTER</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['category/view', 'id' => '3']) ?>">GALLERY</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['category/view', 'id' => '2']) ?>">NEWS</a></li>
                            <li><a href="<?= \yii\helpers\Url::to(['site/contact']) ?>">CONTACTS</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>


        <!-- End briefcase navigation -->
    </header>

    <!-- Briefcase Header -->
<div style="position: relative;">
    <div id="clickMeId" onclick="show('comment'); hide('clickMeId')" class="header-1" style="background-image: url('https://dummyimage.com/1400x400/E23157/E23157'); ">
        <!-- Page Title -->
        <div class="header-1-title-wrapper" >
            <h1   class="header-1-title uppercase" style="position: absolute;width: 350px;top: 50%;transform: translateY(-50%);text-align: center">
                STUDY ABROADss
            </h1>
        </div>
    </div>
    <div class="header-2" style="background-image: url('https://dummyimage.com/1400x400/000/000000');  ">
        <!-- Page Title -->
        <div class="header-2-title-wrapper">
            <h1 class="header-1-title uppercase" style="position: absolute ;width: 350px;top: 50%; right:250px;transform: translateY(-50%);text-align: left">
                English Center
            </h1>
        </div>
    </div>
</div>

    <div id="comment" class=" container-fluid" style="position: absolute; top: 100px; height: 600px; width: 100%; background-color: #E23157;display:none;z-index: 10">
        <div class="left-full">
            <h1 class="header-1-title uppercase" style="position: absolute; width: 100%; top: 50%;transform: translateY(-50%);text-align: center">
                STUDY ABROAD
            </h1>
        </div>
    </div>



    <div style="position: relative;height: 50px;">aasdasd</div>
    <!-- #Header Ends -->
    <div class="wrap">
        <div class="container-fluid" style="position: relative;">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
        <!-- Contact  -->

        <div id="bg-contact">

            <div class="row">

                <div class="twelve large-12 columns">
                    <div class="panel" id="contact">
                        <p>WE SUPPORT INTERNATIONAL PROJECTS THAT ARE COMMITED TOWARDS CHANGE AND INNOVATIVE
                            THOUGHTS</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- #Contact Ends -->
    </div>


    <!-- Footer  -->

    <div class="row" id="footer">

        <div class="twelve large-12 columns">

            <div id="footer-info">
                <ul>
                    <li><span>Address:</span>Heidemann Str 116 50825 Cologne</li>
                    <li><span>Phone:</span>49-221-3401857</li>
                    <li><span>Email:</span>gestaltungsbuero@gmail.com</li>
                    <li><span>Facebook:</span>https://www.facebook.com/PeterMoennigFoundation/</li>
                </ul>
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
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>


<script>
    function show (toBlock){
        setDisplay(toBlock, 'block');
    }
    function hide (toNone) {
        setDisplay(toNone, 'none');
    }
    function setDisplay (target, str) {
        document.getElementById(target).style.display = str;
    }
</script>
