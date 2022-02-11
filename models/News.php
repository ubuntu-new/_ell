<?php

namespace app\models;

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
            [['name', 'name_ge', 'content_ge', 'date', 'url'], 'required'],
            [['content', 'content_ge', 'hit', 'url', 'visible'], 'string'],
            [['name', 'name_ge', 'keywords', 'description', 'img', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('usfullinks', 'ID'),
            'name' => Yii::t('usfullinks', 'Name'),
            'content' => Yii::t('usfullinks', 'Content'),
            'name_ge' => Yii::t('usfullinks', 'Name Ge'),
            'content_ge' => Yii::t('usfullinks', 'Content Ge'),
            'keywords' => Yii::t('usfullinks', 'Keywords'),
            'description' => Yii::t('usfullinks', 'Description'),
            'img' => Yii::t('usfullinks', 'Img'),
            'hit' => Yii::t('usfullinks', 'Hit'),
            'date' => Yii::t('usfullinks', 'Date'),
            'url' => Yii::t('usfullinks', 'Url'),
            'visible' => Yii::t('usfullinks', 'Visible'),
        ];
    }
}
