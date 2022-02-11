<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

//$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Page -->

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="page">


        <div class="row page-wrapper">
            <!-- Page Title -->
            <div class="page-title-wrapper">
                <h1 class="page-title uppercase">contact</h1>
                <h1 class="page-title-shadow uppercase">contact</h1>
            </div>
        </div>


        <!-- Map -->
        <div class="map"><div class="gmap_canvas"><iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=Heidemann%20Str%20116%2050825%20Cologne&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;}</style></div>
<!--        <div class="map">-->
<!--            <iframe src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=ca&amp;geocode=&amp;q=london&amp;aq=&amp;sll=53.800651,-4.064941&amp;sspn=7.595141,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=Londres,+Regne+Unit&amp;t=m&amp;z=10&amp;ll=51.511214,-0.119824&amp;output=embed"></iframe>-->
<!--        </div>-->
        <div class="row">
            <!-- Form Content -->
            <div class="large-12 twelve columns">
                <!--  Contact Details Widget -->
                <div class="widget contact-widget">
                    <div class="corner"></div>
                    <h5 class="uppercase">General Info</h5>
                    <ul>
                        <li><strong>Address: </strong>Heidemann Str 116 50825 Cologne.</li>
                        <li><strong>Phone: </strong>49-221-3401857</li>
                        <li><strong>Email: </strong>gestaltungsbuero@gmail.com</li>
                        <li style="word-break: break-all;"><strong>Facebook: </strong><a href="https://www.facebook.com/PeterMoennigFoundation/" target="_blank">https://www.facebook.com/PeterMoennigFoundation/</a> </li>
                    </ul>
                </div>

            </div><!-- Form Content Ends -->

        </div>
    </div><!-- Page Ends -->

    <!-- Map -->



</div>
