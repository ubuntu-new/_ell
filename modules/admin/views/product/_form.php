<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;



/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
use dosamigos\tinymce\TinyMce;
Yii::$app->view->registerJsFile('plugins/tinymce/js/tinymce/tinymce.min.js', ['yii\web\JqueryAsset']);
Yii::$app->view->registerJs('tinymce.init({
     selector:"textarea",
     mode : "specific_textareas",
      plugins: [
       "advlist autolink lists link image charmap print preview anchor media",
       "searchreplace visualblocks code fullscreen",
       "insertdatetime media table contextmenu paste jbimages "
   ],
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages media"

})', View::POS_END);
?>

<div class="imgUploadHover">
    <button id="ragac" class="uploadImgText">Click to upload image. Main image size is :  600 X 289 px </button>
</div>
<!-- Loading state -->
<div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
</div>

<div>
    <img id="photo" src="uploads/post/<?=$model->img?>" style="max-width: 450px;">
</div>


<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput([
            'class' => 'flatpickr form-control'
        ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea([])->label(false);?>

<!--    --><?//= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hit')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

<!--    --><?//= $form->field($model, 'new')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

<!--    --><?//= $form->field($model, 'sale')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<div class="crop-avatar">
    <!-- Cropping modal -->3
    <div class="modal fade own-modal" style="width: 100% !important;"  id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="avatar-form" action="<?=\yii\helpers\Url::to(['/admin/product/profilecrop'])?>" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="avatar-body" style="width: 100% !important;">
                            <!-- Crop and preview -->
                            <div class="row" >
                                <div class="col-md-2">
                                    <div class="col-md-12 preview-lg" style="height:60px; font-size:16px;   padding:0"></div>
                                    <div class="avatar-preview preview-lg"></div>
                                    <div class="preview-lg" style="width:220px; height:40px; margin-top:10px; color:#999" ></div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-md-12 preview-lg" style="height:60px; width:300px; font-size:16px; padding:0">Image layout</div>
                                    <div class="avatar-wrapper" style="width:530px; height:360px" id="avatar-wrapper"></div>
                                </div>
                            </div>
                            <div class="row avatar-btns">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-8" style="padding:10px 0 0 20px;">
                                    <div class="btn-group">
                                        <div role="button" class="btn btn-ownButton" style=" margin-right:2px" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</div>
                                        <div role="button" class="btn btn-ownButton" style=" margin-right:2px" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</div>
                                        <div role="button" class="btn btn-ownButton" style=" margin-right:2px" data-method="zoom" data-option="0.1" type="button" title="Zoom In" >Zoom In</div>
                                        <div class="btn btn-ownButton" style=" margin-right:2px" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out" >Zoom Out</div>
                                        <button class="btn btn-ownButton avatar-save" style=" margin-right:2px" type="submit"><span class=""></span><b>Crop and Upload</b></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Upload image and data -->
                            <div class="avatar-upload">
                                <input type="hidden" class="avatar-src" name="avatar_src">
                                <input type="hidden" class="avatar-data" name="avatar_data">
                                <input type="hidden" class ="crop-avatar" value="user_cv" name="crop-avatar">

                                <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.modal -->



