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

    <?php if ($lang_id == 'ka-GE'){?>
        <h1>სწავლა საზღვარგარეთ</h1>
        <h2>სარეგისტრაციო ფორმა</h2>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('სახელი და გვარი')  ?>

        <?= $form->field($model, 'bday')->textInput()->label('დაბადების წელი') ?>

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label('ტელეფონი') ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('მეილი') ?>

        <h2>სად გსურთ სწავლა: </h2>

        <?= $form->field($model, 'uk')->checkbox(['label'=> 'დიდი ბრიტანეთი', '0', '1', ]) ?>

        <?= $form->field($model, 'usa')->checkbox(['label'=> 'ამერიკა', '0', '1', ]) ?>

        <?= $form->field($model, 'canada')->checkbox(['label'=> 'კანადა', '0', '1', ]) ?>

        <?= $form->field($model, 'europe')->checkbox(['label'=> 'ევროპა', '0', '1', ]) ?>

        <?= $form->field($model, 'asia')->checkbox(['label'=> 'აზია', '0', '1', ]) ?>

        <h2>რა პროგრამაზე:  </h2>

        <?= $form->field($model, 'schoolpropgrams')->checkbox(['label'=> 'სასკოლო პროგრამები', '0', '1']) ?>

        <?= $form->field($model, 'bachelormasters')->checkbox(['label'=> 'საბაკალავრო, სამაგისტრო', '0', '1']) ?>

        <?= $form->field($model, 'phd')->checkbox(['label'=> 'დოქტორანტურა', '0', '1', ]) ?>

        <?= $form->field($model, 'lsnguageprograms')->checkbox(['label'=> 'უცხო ენის პროგრამები', '0', '1']) ?>

        <?= $form->field($model, 'professionalcourses')->checkbox(['label'=> 'პროფესიუი კურსები', '0', '1']) ?>

        <?= $form->field($model, 'summerschgoolforjuniors')->checkbox(['label'=> 'საზაფხულო სკოლები ბავშვებისთვის', '0', '1']) ?>

        <div class="form-group">

            <?= Html::submitButton('გაგზავნა', ['class' => 'btn small red uppercase']) ?>

        </div>


    <?php } ?>

    <?php if ($lang_id == 'en-US'){ ?>

        <h1>Study Abroad</h1>
        <h2>Registration Form</h2>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true])  ?>

        <?= $form->field($model, 'bday')->textInput() ?>

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <h2>Where do you want to study: </h2>

        <?= $form->field($model, 'uk')->checkbox(['label'=> 'UK', '0', '1', ]) ?>

        <?= $form->field($model, 'usa')->checkbox(['label'=> 'USA', '0', '1', ]) ?>

        <?= $form->field($model, 'canada')->checkbox(['label'=> 'Canada', '0', '1', ]) ?>

        <?= $form->field($model, 'europe')->checkbox(['label'=> 'Europe', '0', '1', ]) ?>

        <?= $form->field($model, 'asia')->checkbox(['label'=> 'Asia', '0', '1', ]) ?>

        <h2>Programme you want to study: </h2>

        <?= $form->field($model, 'schoolpropgrams')->checkbox(['label'=> 'School Programs', '0', '1']) ?>

        <?= $form->field($model, 'bachelormasters')->checkbox(['label'=> 'Bachelor Masters', '0', '1']) ?>

        <?= $form->field($model, 'phd')->checkbox(['label'=> 'PHD', '0', '1', ]) ?>

        <?= $form->field($model, 'lsnguageprograms')->checkbox(['label'=> 'Language Programmes', '0', '1']) ?>

        <?= $form->field($model, 'professionalcourses')->checkbox(['label'=> 'Professional Courses  ', '0', '1']) ?>

        <?= $form->field($model, 'summerschgoolforjuniors')->checkbox(['label'=> 'Summer School For Juniors', '0', '1']) ?>

        <div class="form-group">

            <?= Html::submitButton('Submit', ['class' => 'btn small red uppercase']) ?>

        </div>

    <?php } ?>









    <?php ActiveForm::end(); ?>

</div><!-- form -->
