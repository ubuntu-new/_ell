<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $name_ge
 * @property string $content_ge
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $date
 * @property string $url
 * @property string $visible
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
                [['name', 'name_ge','content', 'content_ge'], 'required'],
                [['content', 'content_ge','hit', 'url', 'visible'], 'string'],
                [['name', 'name_ge', 'keywords', 'description', 'date'], 'string', 'max' => 255],
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
            'name' => Yii::t('contact', 'Name'),
            'content' => Yii::t('contact', 'Content'),
            'name_ge' => Yii::t('contact', 'Name Ge'),
            'content_ge' => Yii::t('contact', 'Content Ge'),
            'keywords' => Yii::t('contact', 'Keywords'),
            'description' => Yii::t('contact', 'Description'),
            'img' => Yii::t('contact', 'Img (600 X 400)'),
            'hit' => Yii::t('contact', 'Hit'),
            'date' => Yii::t('contact', 'Date'),
            'url' => Yii::t('contact', 'Url'),
            'visible' => Yii::t('contact', 'Visible'),
        ];
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function upload(){
        if ($this->validate()) {
            $this->img->saveAs('uploads/news/' . $this->img->baseName . '.' . $this->img->extension);
            //$this->img = null;
            return true;
        } else {
            return false;
        }
    }
}
