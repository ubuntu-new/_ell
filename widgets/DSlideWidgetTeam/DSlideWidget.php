<?php

namespace app\widgets\DSlideWidgetTeam;



use yii\base\Widget;



class DSlideWidget extends Widget

{



    public $items;

    public $title;

    public $image;

    public $description;

    public $font_family;

    public $background = '#1d386b';

    public $radius = 0;

    public $width = 0;



    public $rows = 2;

    public $slidesToShow = 4;

    public $slidesToScroll = 4;

    private $options = '';



    public function init() {

        $this->slidesToScroll = $this->slidesToShow;

        $this->options = $this->getOptionsAsJson();

        parent::init();

    }



    public function run() {

        DSlideWidgetAsset::register($this->getView());

        return $this->render('_slide', [

            'items' => $this->items,

            'title' => $this->title,

            'img' => $this->image,

            'description' => $this->description,

            'font_family' => $this->font_family,

            'background' => $this->background,

            'radius' => $this->radius,

            'options' => $this->options,

            'width' => $this->width

        ]);

    }



    private function getOptionsAsJson() {

        return json_encode([

            'rows' => $this->rows,

            'slidesToShow' => $this->slidesToShow,

            'slidesToScroll' => $this->slidesToScroll

        ]);

    }



}