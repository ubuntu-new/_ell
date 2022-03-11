<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script>window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-131754042-1");</script>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href="demo/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>
<body>
<style>
    .#show{
        display: none !important;
    }
</style>




<?php $this->beginBody() ?>
<div class="js">
    <div id="preloader" style="background-color: #090B0A"></div>


    <div class="wrap">

        <?= $content ?>

    </div>

    <!--<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>-->

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>


    <script>
        $('.navicon').on('click', function (e) {
            e.preventDefault();
            $(this).toggleClass('navicon--active');
            $('.toggle').toggleClass('toggle--active');
        });
    </script>
    <script>
        AOS.init({
            duration: 1200,
        })
    </script>
    <script>
        $(window).load(function(){
            $('#preloader').fadeOut('slow',function(){$(this).remove();});
        });
        $(document).scroll(function () {

            $(function () {
                $('li a').click(function (e) {

                    $('a').removeClass('activeee');
                    $(this).addClass('activeee');
                });
            });
        });


    </script>


    <?php $this->endBody() ?>
</div>
</body >
</html >
<?php $this->endPage() ?>


