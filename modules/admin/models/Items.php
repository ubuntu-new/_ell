<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $name
 * @property string $image
 * @property string $img
 * @property string $birthdate
 * @property string $item_key
 * @property string $active
 * @property string $position
 * @property string $title_ge
 * @property string $description_ge
 * @property string $name_ge
 */
class Items extends \yii\db\ActiveRecord
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
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge','name', 'name_ge','description','description_ge'], 'string'],
            [['title', 'title_ge','name', 'name_ge'], 'required'],
            [['birthdate','description','description_ge','image'], 'safe'],
            [['name', 'image', 'position', 'name_ge'], 'string', 'max' => 255],
            [['item_key'], 'string', 'max' => 20],
            [['img'], 'file','skipOnEmpty' => true, 'extensions'=>'jpg, png, gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('contact', 'ID'),
            'title' => Yii::t('contact', 'Title'),
            'description' => Yii::t('contact', 'Description'),
            'name' => Yii::t('contact', 'Name'),
            'image' => Yii::t('contact', 'Image'),
            'img' => Yii::t('contact', 'Img (800 X 800)'),
            'birthdate' => Yii::t('contact', 'Birthdate'),
            'item_key' => Yii::t('contact', 'Item Key'),
            'active' => Yii::t('contact', 'Active'),
            'position' => Yii::t('contact', 'Position'),
            'title_ge' => Yii::t('contact', 'Title Ge'),
            'description_ge' => Yii::t('contact', 'Description Ge'),
            'name_ge' => Yii::t('contact', 'Name Ge'),
        ];
    }

    public function upload(){
        if($this->validate()){
            $path = 'uploads/img/'. $this->img->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }
}
