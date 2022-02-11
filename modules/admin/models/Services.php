<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "english_center".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $content
 * @property string $name_ge
 * @property string $content_ge
 * @property string $price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property string $date
 */
class services extends \yii\db\ActiveRecord
{

    public $image;
    public $gallery;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'english_center';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'name_ge', 'content_ge', 'date'], 'required'],
            [['category_id'], 'integer'],
            [['content', 'content_ge', 'hit', 'new', 'sale'], 'string'],
            [['name', 'name_ge', 'price', 'keywords', 'description', 'img', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('contact', 'ID'),
            'category_id' => Yii::t('contact', 'Category ID'),
            'name' => Yii::t('contact', 'Name'),
            'content' => Yii::t('contact', 'Content'),
            'name_ge' => Yii::t('contact', 'Name Ge'),
            'content_ge' => Yii::t('contact', 'Content Ge'),
            'price' => Yii::t('contact', 'Price'),
            'keywords' => Yii::t('contact', 'Keywords'),
            'description' => Yii::t('contact', 'Description'),
            'img' => Yii::t('contact', 'Img'),
            'hit' => Yii::t('contact', 'Hit'),
            'new' => Yii::t('contact', 'New'),
            'sale' => Yii::t('contact', 'Sale'),
            'date' => Yii::t('contact', 'Date'),
        ];
    }

    public function upload(){
        if($this->validate()){
            $path = 'img/store/'. $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }
}
