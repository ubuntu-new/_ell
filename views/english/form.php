<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Studyabroad */
/* @var $form ActiveForm */

$session = \Yii::$app->session;
$lang_id = Yii::$app->language = $session->has('lang')?$session->get('lang'): 'ka-GE';
?>
<div class="row container" style="margin-top: 50px;">

    <?php if(Yii::$app->session->hasFlash('success')){?>

        <div class="alert alert-success alert-dismissable">

            <?= Yii::$app->session->getFlash('success')?>

        </div>

    <?php } else if (Yii::$app->session->hasFlash('error')){?>

        <div class="alert alert-danger alert-dismissable">

            <?= Yii::$app->session->getFlash('error')?>

        </div>



    <?php }?>

</div>

<div class="form container">
    <?php $form = ActiveForm::begin(); ?>
    <?php if ($lang_id == 'en-US'){ ?>
        <h2>English Language Centre</h2>
        <h2>Registration Form</h2>
        <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Full Name') ?>
        <?= $form->field($model, 'bday')->textInput()->label('Date of Birth') ?>
        <?= $form->field($model, 'phone')->textInput()->label('Mobile Number') ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('E-mail') ?>
        <h2>Programme you want to study:</h2>
            <?= $form->field($model, 'generalenglish')->checkbox(['label'=> 'General English', '0', '1']) ?>
            <?= $form->field($model, 'esol')->checkbox(['label'=> 'Cambridge ESOL Exams (Cambridge ESOL, KET, PET, FCE, CAE )', '0', '1']) ?>
            <?= $form->field($model, 'ielts')->checkbox(['label'=> 'IELTS', '0', '1']) ?>
            <?= $form->field($model, 'toefl')->checkbox(['label'=> 'TOEFL', '0', '1']) ?>
            <?= $form->field($model, 'sat')->checkbox(['label'=> 'SAT', '0', '1']) ?>
            <?= $form->field($model, 'gmat')->checkbox(['label'=> 'GMAT', '0', '1']) ?>
            <?= $form->field($model, 'gre')->checkbox(['label'=> 'GRE', '0', '1']) ?>
        <div class="form-group"><?= Html::submitButton('Submit', ['class' => 'btn small red uppercase']) ?>
        </div>
    <?php } ?>
    <?php if ($lang_id == 'ka-GE'){?>
        <h2>ინგლისური ენის ცენტრი</h2>
        <h2>სარეგისტრაციო ფორმა</h2>
        <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('სახელი და გვარი') ?>
        <?= $form->field($model, 'bday')->textInput()->label('დაბადების თარიღი') ?>
        <?= $form->field($model, 'phone')->textInput()->label('ტელეფონი') ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('მეილი') ?>
        <h2>რომელ პროგრამაზე გსურთ სწავლა: </h2>
        <p>
            <?= $form->field($model, 'generalenglish')->checkbox(['label'=> 'ზოგადი ინგლისური', '0', '1']) ?>
            <?= $form->field($model, 'esol')->checkbox(['label'=> 'კემბრიჯის საერთაშორისო საგამოცდო პროგრამები (Cambridge ESOL, KET, PET, FCE, CAE)', '0', '1']) ?>
            <?= $form->field($model, 'ielts')->checkbox(['label'=> 'IELTS', '0', '1']) ?>
            <?= $form->field($model, 'toefl')->checkbox(['label'=> 'TOEFL', '0', '1']) ?>
            <?= $form->field($model, 'sat')->checkbox(['label'=> 'SAT', '0', '1']) ?>
            <?= $form->field($model, 'gmat')->checkbox(['label'=> 'GMAT', '0', '1']) ?>
            <?= $form->field($model, 'gre')->checkbox(['label'=> 'GRE', '0', '1']) ?>



        <div class="form-group">

            <?= Html::submitButton('გაგზავნა', ['class' => 'btn small red uppercase']) ?>

        </div>





    <?php }?>




    <?php ActiveForm::end(); ?>

</div><!-- form -->
