<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Studyabroad */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->title = 'ELL Educational Agency';
$lang_id = Yii::$app->language;
/**
 * If any parameters are not passed, the widget will use settings from the
 * social module wherever possible. For example `appId` and `secret` will
 * be referred from the module settings for the example below.
 */
?>
<?php
$students = \app\models\db\Items::findAll(['item_key' => 'STUDENTS', 'active' => '1']);
$studentsTxt = \app\models\db\Students::findAll(['visible' => '1']);

if ($lang_id == 'ka-GE') {
    foreach ($studentsTxt as $row) {
        $stuTxt = $row['title_ge'];
        $stuTxtdesc = $row['description_ge'];
        $font_family = 'bpg-web-001-caps !important';
    }

}

if ($lang_id == 'en-US') {
    foreach ($studentsTxt as $row) {
        $stuTxt = $row['title'];
        $stuTxtdesc = $row['description'];
        $font_family = 'nexa !important';
    }
}

?>


<div style="position: relative;">
    <div id="clickMeId " onclick="show('comment'); hide('clickMeId')" class="header-1"
         style="background-image: url('uploads/main/header2.jpg'); ">
        <!-- Page Title -->
        <div class="header-1-title-wrapper">
            <!--            <h1 class="header-1-title uppercase" style="position: absolute;width: 350px;top: 50%;transform: translateY(-50%);text-align: center">-->
            <h1 class="header-1-title uppercase bebas"
                style="position: absolute;width: 500px;top: 50%;transform: translateY(-50%);text-align: right; padding-left: 80px;">
                STUDY ABROAD
            </h1>
        </div>
    </div>
    <div class="header-2 " style="background-image: url('uploads/main/header1.jpg');  ">
        <!-- Page Title -->
        <div class="header-2-title-wrapper">
            <h1 class="header-2-title uppercase"
                style="position: absolute ;width: 350px;top: 50%; right:250px;transform: translateY(-50%);text-align: left; font-family: bebaNeunRegularl;"
                onclick="location.href='<?= \yii\helpers\Url::to(['english/', 'id' => '3', 'lang_id' => $lang_id]) ?>';">
                English Center
            </h1>
        </div>
    </div>


    <div class="header-mob-1" style="display: none">
        <div class="header-1-title-wrapper"
             style="background-image: url('uploads/main/header2.jpg');background-size: cover;background-position: center center;background-repeat: no-repeat;height: 250px;">
            <h4 class="uppercase bebas" style="font-family: bebaNeunRegularl;">
                STUDY ABROAD
            </h4>
        </div>
    </div>
    <div class="header-mob-2" style="display: none;">
        <div class="header-1-title-wrapper"
             style="background-image: url('uploads/main/header1.jpg');background-size: cover;background-position: center center;background-repeat: no-repeat;height: 250px;">
            <h4 class="uppercase bebas" style="font-family: bebaNeunRegularl;"
                onclick="location.href='<?= \yii\helpers\Url::to(['english/', 'id' => '3', 'lang_id' => $lang_id]) ?>';">
                English Center
            </h4>
        </div>
    </div>

</div>
<div class="container-fluid">
    <div class="row">
        <div class="large-3 three columns numerebi">
            <h2 class="uppercase text-center numerebiTitle counters" style="font-family: <?= $font_family ?>;">
                Educational Institution
                <p id="lines" data-number="300" class="numerebiText">0</p>
            </h2>
        </div>
        <div class="large-3 three columns numerebi">
            <h2 class="uppercase text-center numerebiTitle counters" style="font-family: <?= $font_family ?>;">Countries
                <p id="countries" data-number="50" class="numerebiText">0</p>
            </h2>
        </div>
        <div class="large-3 three four columns numerebi">
            <h2 class="uppercase text-center numerebiTitle  counters" style="font-family: <?= $font_family ?>;">Students
                <p id="students" data-number="4000" class="numerebiText">0</p>
            </h2>
        </div>
        <div class="large-3 three four columns numerebi">
            <h2 class="uppercase text-center numerebiTitle  counters" style="font-family: <?= $font_family ?>;">YEARS IN
                BUSINESS
                <p id="years" data-number="18" class="numerebiText">0</p>
            </h2>
        </div>
    </div>
</div>


<!-- STUDENTS -->
<div id="students">
    <div id="studentebi" style="display: block">
        <?= \app\widgets\DSlideWidget\DSlideWidget::widget([
            'items' => $students,
            'title' => $stuTxt,
            //'title' => ($stuTxt) ? $stuTxt[0]['title'] : "",
            'description' => $stuTxtdesc,
            'font_family' => $font_family,
            //'description' => ($studentsTxt[$stuTxtdesc]) ? $studentsTxt[0]['description'] : "",
            'radius' => 50,
            'rows' => 2,
            'slidesToShow' => 4,
            'width' => '90%'
        ]) ?>
    </div>
    <div id="studentebi-mob" style="display: none; padding: 30px 0">
        <div class="row">
            <div class="col-sm-12 stutxt" style=" background-color: #1D386B; padding: 30px;  margin-bottom: 30px ">
                <h1 style="font-family: <?= $font_family ?>; color: #ffffff !important;"><?= $stuTxt ?></h1>
                <p><?= $stuTxtdesc ?></p>
            </div>
            <?php foreach ($students as $item): ?>
                <div class="col-sm-12" style="margin-bottom: 50px">
                    <div class="image-inner text-center">
                        <?= Html::img($item->image, ['style' => 'border-radius:50%; width:70%;margin: 0 auto;']) ?>
                    </div>
                    <h1 style="font-family: <?= $font_family ?>;"><?= $lang_id == 'ka-GE' ? $item->name_ge : $item->name ?></h1>
                    <span><?= $lang_id == 'ka-GE' ? $item->title_ge : $item->title ?></span>
                    <p style="margin-top: 20px"><?= $lang_id == 'ka-GE' ? $item->description_ge : $item->description ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- .STUDENTS -->


<!-- parallax -->
<div style="position: relative;height: 100px;">&nbsp;</div>
<div class="noparallax">
    <img id="image" src="uploads/main/city/1.jpg" style="width:100%; height: 220px;">
</div>
<div style="position: relative;height: 100px;">&nbsp;</div>
<!-- #parallax Ends -->

<!-- PARTNERS -->
<?php
$partners = \app\models\db\Items::findAll(['item_key' => 'PARTNERS', 'active' => '1']);
$partnersTxt = \app\models\db\Partners::findAll(['visible' => '1']);
$lang_id = Yii::$app->language;
if ($lang_id == 'ka-GE') {
    foreach ($partnersTxt as $row) {

        $partTxt = $row['title_ge'];
        $partDesc = $row['description_ge'];
        $font_family = 'bpg-web-001-caps !important';
    }

}
if ($lang_id == 'en-US') {
    foreach ($partnersTxt as $row) {
        $partTxt = $row['title'];
        $partDesc = $row['description'];
        $font_family = 'nexa !important';
    }
}
?>
<div id="partners">
    <div id="studentebi" style="display: block">
        <div class="container-fluid" style="background-color: white">
            <div class="row">
                <?= \app\widgets\DSlidePartnersWidget\DSlideWidget::widget([
                    'items' => $partners,
                    'title' => $partTxt,
                    'description' => $partDesc,
                    'font_family' => $font_family,
                    'background' => '#E22140',
                    'rows' => 5,
                    'slidesToShow' => 4,
                    'width' => '80%'
                ]) ?>
            </div>
        </div>
    </div>
    <div id="studentebi-mob" style="display: none; padding: 30px 0">
        <div class="row">
            <div class="col-sm-12 stutxt" style=" background-color: #E22140; padding: 30px;  margin-bottom: 30px ">
                <h1 style="font-family: <?= $font_family ?>; color: #ffffff !important;"><?= $partTxt ?></h1>
                <p><?= $partDesc ?></p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($partners as $item): ?>
                <div class="col-md-6" style="margin-bottom: 50px">
                    <div class="image-inner text-center">
                        <?= Html::img($item->image, ['style' => 'border-radius:50%; width:70%;margin: 0 auto;']) ?>
                    </div>
                    <!--     <h1 style="font-family: <?/*= $font_family */?>;"><?/*= $lang_id == 'ka-GE' ? $item->name_ge : $item->name */?></h1>
                    <span><?/*= $lang_id == 'ka-GE' ? $item->title_ge : $item->title */?></span>
                    <p style="margin-top: 20px"><?/*= $lang_id == 'ka-GE' ? $item->description_ge : $item->description */?></p>-->
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- .PARTNERS -->

<div style="position: relative;height: 100px;">&nbsp;</div>

<div class="parallax_1"></div>


<!-- ABOUT -->
<?php
$about = \app\models\db\Items::findAll(['item_key' => 'ABOUT', 'active' => '1']);
$aboutTxt = \app\models\db\About::findAll(['visible' => '1']);
if ($lang_id == 'ka-GE') {
    foreach ($aboutTxt as $row) {
        $abotxt = $row['title_ge'];
        $aboDesc = $row['description_ge'];
        $font_family = 'bpg-web-001-caps !important';
    }

}
if ($lang_id == 'en-US') {
    foreach ($aboutTxt as $row) {
        $abotxt = $row['title'];
        $aboDesc = $row['description'];
        $font_family = 'nexa !important';
    }
}
?>

<div id="about">
    <div id="studentebi" style="display: block">
        <div class="container-fluid" style="background-color: white">
            <div class="row">
                <?= \app\widgets\DSlideWidgetAbout\DSlideWidget::widget([
                    'items' => $about,
                    'title' => $abotxt,
                    'description' => $aboDesc,
                    'font_family' => $font_family,
                    //    'description' => ($aboutTxt) ? $aboutTxt[0]['description'] : "",
                    'radius' => 0,
                    'rows' => 1,
                    'slidesToShow' => 1,
                    'background' => '#152B56'
                ]) ?>
            </div>
        </div>
    </div>
    <div id="studentebi-mob" style="display: none; padding: 30px 0">
        <div class="row">
            <div class="col-sm-12 stutxt" style=" background-color: #1D386B; padding: 30px;  margin-bottom: 30px ">
                <h1 style="font-family: <?= $font_family ?>; color: #ffffff !important;"><?= $abotxt ?></h1>
                <p><?= $aboDesc ?></p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($about as $item): ?>
                <div class="col-md-6" style="margin-bottom: 50px">
                    <div class="image-inner text-center">
                        <?= Html::img($item->image) ?>
                    </div>
                    <!--                <h1 style="font-family: <?/*= $font_family */?>;"><?/*= $lang_id == 'ka-GE' ? $item->name_ge : $item->name */?></h1>
                <span><?/*= $lang_id == 'ka-GE' ? $item->title_ge : $item->title */?></span>
                <p style="margin-top: 20px"><?/*= $lang_id == 'ka-GE' ? $item->description_ge : $item->description */?></p>-->
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- .ABOUT -->

<div style="position: relative;height: 100px;">&nbsp;</div>


<!-- TEAM -->
<?php
$team = \app\models\db\Items::findAll(['item_key' => 'TEAM', 'active' => '1']);
$aboutTeam = \app\models\db\Team::findAll(['visible' => '1']);
if ($lang_id == 'ka-GE') {
    foreach ($aboutTeam as $row) {
        $teamtxt = $row['title_ge'];
        $teamDesc = $row['description_ge'];
        $font_family = 'bpg-web-001-caps !important';
    }

}
if ($lang_id == 'en-US') {
    foreach ($aboutTeam as $row) {
        $teamtxt = $row['title'];
        $teamDesc = $row['description'];
        $font_family = 'nexa !important';
    }
}
?>
<div id="team">
    <div id="studentebi" style="display: block">
        <div class="container-fluid" style="background-color: white">
            <div class="row">
                <?= \app\widgets\DSlideWidgetTeam\DSlideWidget::widget([
                    'items' => $team,
                    'title' => $teamtxt,
                    'description' => $teamDesc,
                    'font_family' => $font_family,
                    'radius' => 50,
                    'rows' => 2,
                    'slidesToShow' => 4,
                    'background' => '#E22140',
                    'width' => '80%'
                ]) ?>
            </div>
        </div>
    </div>
    <div id="studentebi-mob" style="display: none; padding: 30px 0">
        <div class="row">
            <div class="col-sm-12 stutxt" style=" background-color: #E22140; padding: 30px;  margin-bottom: 30px ">
                <h1 style="font-family: <?= $font_family ?>; color: #ffffff !important;"><?= $teamtxt ?></h1>
                <p><?= $teamDesc ?></p>
            </div>
        </div>
        <div class="row" style=" background-color: #1D386B; padding: 30px;  margin-bottom: 30px ">
            <?php foreach ($team as $item): ?>
                <div class="col-sm-12" style="margin-bottom: 50px">
                    <div class="image-inner text-center">
                        <?= Html::img($item->image, ['style' => 'border-radius:50%; width:70%;margin: 0 auto;']) ?>
                    </div>
                    <h1 style="font-family: <?= $font_family ?>; color: #FFFFFF;"><?= $lang_id == 'ka-GE' ? $item->name_ge : $item->name ?></h1>
                    <span style="text-align: "><?= $lang_id == 'ka-GE' ? $item->title_ge : $item->title ?></span>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- .TEAM -->


<!-- parallax -->
<div class="parallax"></div>
<!-- #parallax Ends -->

<!-- SERVICES -->
<div id="services">
    <div id="studentebi" style="display: block">
        <div class="container-fluid" style="background-color: white">
            <div class="row">
                <div class="ds-container blue" style="height: 1200px !important;">
                    <div class="large-7 seven columns ds-items-container blue" style="padding: 0 60px; position: relative">
                        <?php
                        if ($lang_id == 'ka-GE') {
                            foreach ($provideTxt as $row) {
                                $provideTitle = $row['title_ge'];
                                $provideDesc = $row['description_ge'];
                                $font_family = 'bpg-web-001-caps !important';
                            }

                        }
                        if ($lang_id == 'en-US') {
                            foreach ($provideTxt as $row) {
                                $provideTitle = $row['title'];
                                $provideDesc = $row['description'];
                                $font_family = 'nexa !important';
                            }
                        }
                        ?>
                        <div style="position: absolute; top: 50%; left: 37%; transform: translate(-50%, -50%);">
                            <h1 class="ds-main-name uppercase text-left"
                                style="font-family: <?= $font_family ?>"><?= $provideTitle; ?></h1>
                            <!--<a href="<? /*=\yii\helpers\Url::to(["site/language", "lang"=>"ka_ge"])*/ ?>">language</a>-->
                            <?= $provideDesc; ?>
                            <div class="large-12 twelve columns"
                                 style="background-color: #E22140; padding: 12px 14px; width: 250px; text-align: center">
                                <a class="provideLink" href="<?= \yii\helpers\Url::to(['category/form']) ?>"
                                   style="font-family: <?= $font_family ?>;color: white; ">
                                    <?= Yii::t('forms', 'Registration Form') ?>
                                </a>
                            </div>
                        </div>
                        <!-- form modal>-->
                        <div style="display: none; border-radius: 0px !important; padding: 0px !important;" id="animatedModalForm"
                             class="animated-modal modaluriza">
                            <div class="large-12 twelve columns">
                                <div style=" position: relative; top: 150px;width: 100%; padding: 0 60px">
                                    <div class="studyabroad-form">

                                        <?php $form = ActiveForm::begin(); ?>
                                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                                        <?= $form->field($model, 'bday')->textInput() ?>
                                        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
                                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                                        <?= $form->field($model, 'uk')->dropDownList(['0', '1',]) ?>
                                        <?= $form->field($model, 'usa')->dropDownList(['0', '1',]) ?>
                                        <?= $form->field($model, 'canada')->dropDownList(['0', '1',]) ?>
                                        <?= $form->field($model, 'europe')->dropDownList(['0', '1',]) ?>
                                        <?= $form->field($model, 'asia')->dropDownList(['0', '1',]) ?>
                                        <?= $form->field($model, 'schoolpropgrams')->dropDownList(['0', '1']) ?>
                                        <?= $form->field($model, 'bachelormasters')->dropDownList(['0', '1']) ?>
                                        <?= $form->field($model, 'phd')->dropDownList(['0', '1',]) ?>
                                        <?= $form->field($model, 'lsnguageprograms')->dropDownList(['0', '1']) ?>
                                        <?= $form->field($model, 'professionalcourses')->dropDownList(['0', '1']) ?>
                                        <?= $form->field($model, 'summerschgoolforjuniors')->dropDownList(['0', '1']) ?>
                                        <div class="form-group">
                                            <?= Html::submitButton('Save', ['class' => 'btn small red uppercase']) ?>
                                        </div>


                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- form modal>-->
                    </div>
                    <div class="large-5 five columns  ds-main-container  hidden-sm" style="padding: 0 60px; position: relative">
                        <div style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 100%;">
                            <div class="row" style="padding-right: 60px;">
                                <?php foreach ($provide as $row): ?>
                                    <?php
                                    if ($lang_id == 'ka-GE') {
                                        $proName = $row['name_ge'];
                                        $proContent = $row['content_ge'];
                                        $font_family = 'bpg-web-001-caps !important';
                                    } else if ($lang_id == 'en-US') {
                                        $proName = $row['name'];
                                        $proContent = $row['content'];
                                        $font_family = 'nexa !important';
                                    }
                                    ?>
                                    <a data-fancybox data-animation-duration="700" style="font-family:<?= $font_family ?>; color: #ffffff !important;"
                                       data-src="#animatedModal<?= $row->id ?>" href="javascript:;" class="provideLink">
                                        <div class="large-6 six columns provideBox">
                                            <p class="uppercase text-center white bebas"
                                               style="">
                                                <?= $proName ?>
                                            </p>
                                        </div>
                                    </a>
                                    <div style="display: none; border-radius: 0px !important; padding: 0px !important;"
                                         id="animatedModal<?= $row->id ?>" class="animated-modal modaluriza">
                                        <div class="large-6 six columns">
                                            <div style=" position: relative; top: 150px;width: 100%; padding: 0 60px">
                                                <h1 style="color: #E71F40 !important;font-family: <?= $font_family ?>;"><?= $proName ?></h1>
                                                <p><?= $proContent ?></p>
                                            </div>
                                        </div>
                                        <div class="large-6 six columns"
                                             style=" height: 100%; background-color: #E71F40; padding-left: 0px !important; padding-right: 0px !important;">
                                            <img src="uploads\provide\<?= $row->img ?>" class="img-fluid" alt="Responsive image">
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="studentebi-mob" style="display: none; padding: 30px 0">
        <div class="row">
            <div class="col-sm-12 stutxt" style=" background-color: #1D386B; padding: 30px;  margin-bottom: 30px ">
                <h1 style="font-family: <?= $font_family ?>; color: #1D386B !important;"><?= $provideTitle ?></h1>
                <p><?= $provideDesc ?></p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($provide as $item): ?>
                <div class="col-sm-12" style="margin-bottom:4px;padding-left:0px;padding-right:0px;">
                    <div class="red-container">
                        <a data-fancybox data-animation-duration="700" style="font-family:<?= $font_family ?>" data-src="#aanimatedModal<?= $item->id ?>" href="javascript:;" class="provideLink">
                            <h1>
                                <?= $lang_id == 'ka-GE' ? $item->name_ge : $item->name ?>
                            </h1>
                        </a>
                    </div>
                </div>
                <div style="display: none; border-radius: 0px !important; padding: 0px !important;"
                     id="aanimatedModal<?= $item->id ?>" class="animated-modal modaluriza">
                    <div class="large-12 twelve columns" style=" height: 100%; padding-left: 0px !important; padding-right: 0px !important;">
                        <div style=" position: relative; top: 30px ;width: 100%; padding: 0 20px">

                            <img src="uploads\provide\<?= $row->img ?>" class="img-fluid" alt="Responsive image">
                            <h1 style="color: #ffffff !important;font-family: <?= $font_family ?>;"><?= $proName ?></h1>
                            <?= $proContent ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- .SERVICES -->
<!--<div style="position: relative;height: 100px;">&nbsp;</div>-->
<!-- parallax -->
<div class="parallax"></div>
<!-- #parallax Ends -->
<!--<div style="position: relative;height: 100px;">&nbsp;</div>-->
<!-- UsfulLinks-->
<!-- USFULI -->
<div id="usful">
    <div id="studentebi" style="display: block">
        <div class="container-fluid" style="background-color: white">
            <div class="row">
                <div class="ds-container blue" style="" id="services">
                     <div class="row" style="padding: 100px;">
                            <div class="col-sm-12">
                                <?php
                                $usfultxt = \app\models\db\Usfull::findAll(['visible' => '1']);
                                $usfulLinks = \app\models\Usfullinks::findAll(['visible' => '1']);
                                if ($lang_id == 'ka-GE') {
                                    foreach ($usfultxt as $row) {
                                        $usfultxtTitle = $row['title_ge'];
                                        $usfultxtTitle = $row['title_ge'];
                                        $usfultxtDesc = $row['description_ge'];
                                    }

                                }
                                if ($lang_id == 'en-US') {
                                    foreach ($usfultxt as $row) {
                                        $usfultxtTitle = $row['title'];
                                        $usfultxtDesc = $row['description'];
                                    }
                                }
                                ?>
                                <h1 class="ds-main-name uppercase text-left"
                                    style="font-family: <?= $font_family ?>"><?= $usfultxtTitle; ?></h1>
                            </div>
                            <div class="col-sm-12">
                            <div class="row">
                                <?php foreach ($usfulLinks as $row): ?>
                                    <?php
                                    if ($lang_id == 'ka-GE') {
                                        $usfultxtTitle = $row['title'];
                                        $usfultxtDesc = $row['description_ge'];
                                        $font_family = 'bpg-web-001-caps !important';
                                    } else if ($lang_id == 'en-US') {
                                        $usfultxtTitle = $row['title'];
                                        $usfultxtDesc = $row['description'];
                                        $font_family = 'nexa !important';
                                    }
                                    ?>
                                    <a data-fancybox data-animation-duration="700" style="font-family: Nexa"
                                       data-src="#animatedModals<?= $row->id ?>" href="javascript:;" class="provideLink ">
                                        <div class="col-md-2 col-sm-12   usfullbox  align-middle"
                                             style="background-color: #1D386B; border: 18px solid #1D386B; ">
                                            <?php $path = '@web/images/flag/' . $row['img'] ?>
                                            <div class="row">
                                                <div class="col-md-6"><?= Html::img($path, ['alt' => 'pic not found', 'class' => 'shadow p-3 mb-5 bg-white ', 'style' => 'width:64px; float:left; padding-left:10px;']); ?></div>
                                                <div class="col-md-6"
                                                     style="position: relative; top: 10px"> <?= $usfultxtTitle ?></div>
                                            </div>


                                        </div>
                                    </a>
                                    <div style="display: none; border-radius: 0px !important; padding: 0px !important; overflow: auto"
                                         id="animatedModals<?= $row->id ?>" class="animated-modal modaluriza">
                                        <div class=" col-sm-12" style="border-right: 100px solid #E71F40">
                                            <div style="width: 80%;  padding: 0 60px; float: left;">
                                                <h1 style="color: #E71F40 !important;font-family: <?= $font_family ?> "><?= $usfultxtTitle ?></h1>
                                                <h5 style="color: #E71F40 !important;"><?= $usfultxtDesc ?></h5>
                                            </div>
                                        </div>


                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="studentebi-mob" style="display: none; padding: 30px 0">
        <?php
        $usfultxt = \app\models\db\Usfull::findAll(['visible' => '1']);
        $usfulLinks = \app\models\Usfullinks::findAll(['visible' => '1']);
        if ($lang_id == 'ka-GE') {
            foreach ($usfultxt as $row) {
                $usfultxtTitle = $row['title_ge'];
                $usfultxtDesc = $row['description_ge'];
            }

        }
        if ($lang_id == 'en-US') {
            foreach ($usfultxt as $row) {
                $usfultxtTitle = $row['title'];
                $usfultxtDesc = $row['description'];
            }
        }
        ?>
        <div class="row">
            <div class="col-sm-12 stutxt" style=" background-color: #1D386B; padding: 30px;  margin-bottom: 30px ">
                <h1 style="font-family: <?= $font_family ?>; color: #FFFFFF !important;"><?= $usfultxtTitle ?></h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($usfulLinks as $usfull): ?>
                <?php
                if ($lang_id == 'ka-GE') {
                    $usfultxtTitle = $usfull['title'];
                    $usfultxtDesc = $usfull['description_ge'];
                    $font_family = 'bpg-web-001-caps !important';
                } else if ($lang_id == 'en-US') {
                    $usfultxtTitle = $usfull['title'];
                    $usfultxtDesc = $usfull['description'];
                    $font_family = 'nexa !important';
                }
                ?>
                <div class="col-sm-12" style="margin-bottom:4px;padding-left:0px;padding-right:0px;">
                    <div class="red-container">
                        <a data-fancybox data-animation-duration="700" style="font-family:<?= $font_family ?>" data-src="#usenimatedModal<?= $usfull->id ?>" href="javascript:;" class="provideLink">
                                <?php $path = '@web/images/flag/' . $usfull['img'] ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <?= Html::img($path, ['alt' => 'pic not found',  'style' => 'width:64px; float:left; padding-left:10px;']); ?>
                                        <h1><?= $usfultxtTitle ?></h1>
                                    </div>
                                </div>
                        </a>
                    </div>
                </div>
                <div style="display: none; border-radius: 0px !important; padding: 0px !important;" id="usenimatedModal<?= $usfull->id ?>" class="animated-modal modaluriza">
                    <div class="large-12 twelve columns" style=" height: 100%; padding-left: 0px !important; padding-right: 0px !important;">
                        <div style="position: relative; top: 30px ;width: 100%; padding: 0 20px">
                            <h1 style="color: #1D386B !important;font-family: <?= $font_family ?>;"><?= $usfultxtTitle ?></h1>
                            <?= htmlspecialchars($usfultxtDesc) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- .USFULI -->

<?php
$news = \app\models\News::find()->where(['visible' => '1'])->limit('6')->orderBy(['id' => SORT_DESC])->all();
$newstxt = \app\models\Newstxt::findAll(['visible' => '1']);
foreach ($newstxt as $row)
{
if ($lang_id == 'ka-GE') {

    $newsTitle = $row['title_ge'];
    $newsDesc = $row['description_ge'];
}


if ($lang_id == 'en-US') {
    foreach ($newstxt as $row)

        $newsTitle = $row['title'];
    $newsDesc = $row['description'];
}

?>


<div class="container-fluid  " id="news">
    <div class="row" style="padding: 100px;">
        <div class="large-12 twelve columns">
            <h1 class="ds-main-name uppercase text-left" style="color:#1D386B  !important; font-family: <?= $font_family ?>">
                <a href="web/news_full/">
                <?= $newsTitle; ?>
                </a>
            </h1>
        </div>
    </div>

    <?php } ?>
    <div class="container">
        <div class="row">
            <?php foreach ($news as $row) { ?>
                <?php
                $postId = $row['id'];

                if ($lang_id == 'ka-GE') {
                    $newsTitle = $row['name_ge'];
                    $newsDesc = $row['content_ge'];
                    $font_family = 'bpg-web-001-caps !important';
                    $path = '@web/uploads/news/' . $row['img'];
                } else if ($lang_id == 'en-US') {
                    $newsTitle = $row['name'];
                    $newsDesc = $row['content_ge'];
                    $font_family = 'nexa !important';
                    $path = '@web/uploads/news/'.$row['img'];
                }
                ?>
                <div class="large-4 four columns">
                    <a data-fancybox data-animation-duration="700" style="font-family:<?= $font_family ?>" data-src="#newsModal<?= $postId ?>" href="javascript:;" class="provideLink">
                    <div class="thumbnail">

                        <?= Html::img($path, ['alt' => $newsTitle,  'style' => '']); ?>

                        <div class="caption">
                            <h3><?= $newsTitle ?></h3>
                            <p><?= $newsDesc ?></p>
                            <p><?= $row['date'] ?></p>
                        </div>
                    </div>
                    </a>
                </div>
                <div style="display: none; border-radius: 0px !important; padding: 0px !important;" id="newsModal<?= $postId ?>" class="animated-modal modaluriza">
                    <div class="large-12 twelve columns" style=" height: 100%; padding-left: 0px !important; padding-right: 0px !important;">

                        <div style="position: relative; top: 30px ;width: 100%; padding: 0 20px">
                            <h1 style="color: #1D386B !important;font-family: <?= $font_family ?>;"><?= $newsTitle ?></h1>
                            <?= Html::img($path, ['alt' => $newsTitle,  'class' => 'img-fluid', 'style' => 'max-width:600px; tex-align:center; padding:20px ']); ?>
                            <p><?= htmlspecialchars($newsDesc) ?></p>
                            <p><?= $row['date'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<div style="display: none;" id="registerModal" class="animated-modal modaluriza">
    <h2>Register Form</h2>
    <p>sdg swdgesrtygherty erty a</p>
</div>
<style>

</style>