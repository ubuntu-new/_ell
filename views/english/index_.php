<?php
/* @var $this yii\web\View */


    $englishnewtext = \app\models\EnglishCenterText::find()->all();
    $englishnew = \app\models\Englishcenternew::find()->all();
    $lang_id = Yii::$app->request->get('lang_id');


?>
<!-- Briefcase Header -->
<div id="clickMeId" onclick="show('comment'); hide('clickMeId')" class="header-1"
     style="background-image: url('uploads/main/header3.jpg'); ">
    <!-- Page Title -->
    <div class="header-1-title-wrapper">
        <!--            <h1 class="header-1-title uppercase" style="position: absolute;width: 350px;top: 50%;transform: translateY(-50%);text-align: center">-->

    </div>
</div>

<div class="header-23" style="background-image: url('https://dummyimage.com/1400x400/E22140/E22140');  ">
    <!-- Page Title -->
    <div class="header-2-title-wrapper">
        <h1 class="header-1-title uppercase"
            style="position: absolute ;width: 350px;top: 50%; right:250px;transform: translateY(-50%);text-align: left"
            onclick="location.href='<?= \yii\helpers\Url::to(['english/', 'id' => '3']) ?>';">
            English Center
        </h1>
    </div>
</div>
<div class="container">
<!-- ELL ENGLISH CENTRE -->
<div class="row" id="footer">
    <div class="twelve large-12 columns english_center">
        <?php foreach ($englishnewtext as $row){?>
            <?php
            if ($lang_id == 'ka-GE'){
                $title = $row['title_ge'];
                $description = $row['description_ge'];
                $font_family = 'bpg-web-001-caps !important';
            }
            else if ($lang_id == 'en-US'){
                $title = $row['title'];
                $description = $row['description'];
                $font_family = 'nexa !important';
            }
            ?>
        <h1 style="color: #E71F40 !important;font-family: <?= $font_family?>"><?= $title?></h1>
            <?= $description?>
<?php }?>
        <!--            </span>-->
        <!--        <button class="small alert" onclick="myFunction()" id="myBtn">read more</button>-->
    </div>
</div>


<!-- Three Column -->
<div class="row">




    <?php foreach ($englishnew as $row){ ?>
        <?php
        if ($lang_id == 'ka-GE'){
            $proName = $row['name_ge'];
            $proContent = $row['content_ge'];
            $font_family = 'bpg-web-001-caps !important';
        }
        else if ($lang_id == 'en-US'){
            $proName = $row['name'];
            $proContent = $row['content'];
            $font_family = 'nexa !important';
        }
        ?>
        <div class="large-4 four columns provideBox" style="border: 18px solid #ffffff; ">
            <p class="uppercase text-center white bebas"
               style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 100%;">
                <a data-fancybox data-animation-duration="700" style="font-family: <?= $font_family?>"
                   data-src="#animatedModal<?= $row->id ?>" href="javascript:;" class="provideLink">
                    <?=$proName ?>
                </a>
            </p>
        </div>


        <div style="display: none; border-radius: 0px !important; padding: 0px !important;" id="animatedModal<?= $row->id ?>" class="animated-modal modaluriza">
            <div class="large-6 six columns" style="">
                <div style="  padding:  60px;">
                    <h1 style="color: #E71F40 !important;font-family: <?= $font_family?>;"><?=$proName ?></h1>
                    <p><?=$proContent ?></p>
                </div>
            </div>
            <div class="large-6 six columns right englishImage" style="background-color: #E71F40;overflow: hidden">
                <img src="uploads\englishCenter\<?=$row->img?>" class="img-fluid" alt="Responsive image">
            </div>

        </div>
    <?php } ?>
</div>
</div>