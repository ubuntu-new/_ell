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


$share_img = "http://ell.ge/images/ell-study-abroad-fb-share.jpg";
$url = "http://ell.ge/";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<!--  SOCIAL -->
<meta property="og:url"                content="<?=$url?>" />
<meta property="og:type"               content="ELL Educational Agency" />
<meta property="og:title"              content="ELL Educational Agency" />
<meta property="og:description"        content="ELL Educational Agency was founded in 2002 in Tbilisi, Georgia. Prior to this process a two year preparation was carried out, which involved signing agreements and receiving certificates of representation with Universities, Colleges and Language Schools in UK, USA and Europe." />
<meta property="og:image"              content="<?=$share_img?>" />
<?php
$session = \Yii::$app->session;

$lang_id = Yii::$app->language = $session->has('lang')? $session->get('lang'): 'ka-GE';

if (isset($_REQUEST['lang_id'])){
    $lang_id = $_REQUEST['lang_id'];
}

    $contact = \app\models\Contactinfo::find()->all();
    $usfulLinks = \app\models\Usfullinks::findAll(['visible' => '1']);
    foreach ($contact as $row){

        if ($lang_id == 'ka-GE'){

            $usfultxtTitle = $row['title_ge'];
            $usfultxtDesc = $row['description_ge'];


        }
        if ($lang_id == 'en-US'){

            $usfultxtTitle = $row['title'];
            $usfultxtDesc = $row['description'];

        }


//if (isset($_REQUEST['lang_id'])){
//    $lang_id = $_REQUEST['lang_id'];
//}
//debug($lang);
//debug($lang_id);
?>
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
    .parallax_1 {
         /* The image used */
         background-image: url("uploads/main/6.jpg");

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

<?php
$lang_id = Yii::$app->language;
if ($lang_id == 'ka-GE'){
    $font_family = 'bpg-web-001-caps !important';
}
if ($lang_id == 'en-US'){
    $font_family = 'nexa !important';
}
?>

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
                        <a href="index.php" class="mobiluriza" >
                            <img class="mobiluriza" src="../images/logo.png" style="width: 120px;display: none">
                        </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="stylyza">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="logo">
                            <a href="https://ell.ge">
                                <img class="desktopiza" src="<?= Yii::getAlias('@web')?>/images/logo.png" style="width: 120px;">
                            </a>
                        </div>
                        <ul class="nav navbar-nav navbar-left level-1" style="position: relative; top:34px;">
                            <li><a href="https://ell.ge/#about" style="font-family: <?=$font_family?>"><?= Yii::t('menu', 'ABOUT US')?></a></li>
                            <li><a href="https://ell.ge/#students" style="font-family: <?=$font_family?>"><?= Yii::t('menu', 'STUDENTS')?></a></li>
                            <li><a href="https://ell.ge/#partners" style="font-family: <?=$font_family?>"><?= Yii::t('menu', 'PARTNERS')?></a></li>
                            <li><a href="https://ell.ge/#team" style="font-family: <?=$font_family?>"><?= Yii::t('menu', 'OUR TEAM')?></a></li>
                            <li><a href="https://ell.ge/#services" style="font-family: <?=$font_family?>"><?= Yii::t('menu', 'OUR SERVICES')?></a></li>
                            <li><a href="https://ell.ge/#news" style="font-family: <?=$font_family?>"><?= Yii::t('menu', 'NEWS')?></a></li>
                            <li><a href="https://ell.ge/#bg-contact"style="font-family: <?=$font_family?>"><?= Yii::t('menu', 'Contact')?></a></li>
                            <li><a class="flag-icon-ge flag-icon-squared flagebi" href="<?= \yii\helpers\Url::to(['site/language', 'lang' => 'ka-GE', 'lang_id' => 'ka-GE']) ?>"></a></li>
                            <li><a class="flag-icon-gb flag-icon-squared flagebi" href="<?= \yii\helpers\Url::to(['site/language', 'lang' => 'en-US', 'lang_id' => 'en-US']) ?>"></a></li>
                        </ul>
                        <div class="socaliza">
                            <a href="<?= $row['facebook']?>" style="pointer-events: unset;" target="_blank"><i class="icon icon-facebook"></i></a>
                            <a href="<?= $row['twitter']?>" target="_blank"><i class="icon icon-twitter"></i></a>
                            <a href="<?= $row['instagramm']?>" target="_blank"><i class="icon icon-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>


    <!-- End briefcase navigation -->
</header>
    <!-- #Header Ends -->
    <div class="wrap">
        <div class="container-fluid" style="position: relative;padding-left: 0;
    padding-right: 0;">
            <?= $content ?>
        </div>
    </div>
<div class="container-fluid" style="width: 100% !important;  padding-left: 0; padding-right:0;">
        <div class="row" id="bg-contact" style=" min-width: 100% !important;">
            <div class="twelve large-12 columns text-center">
                <div id="footer-info" style="margin-bottom: 30px;">
                    <ul>
                        <li><?= $row['address']?></li>
                        <li><?= $row['email']?></li>
                        <li><?= $row['mob']?></li>
                    </ul>
                </div>
                <!--            --><?php //echo FacebookPlugin::widget(['appId' => '249695945477658', 'type' => FacebookPlugin::LIKE, 'settings' => ['size' => 'small']]); ?>

            </div>
        </div>
    <?php }?>
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

