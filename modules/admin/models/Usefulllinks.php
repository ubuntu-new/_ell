<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "usfullinks".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $position
 * @property string $visible
 */
class Usefulllinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usfullinks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'title', 'title_ge', 'description_ge', 'position'], 'required'],
            [['description', 'description_ge', 'visible'], 'string'],
            [['img', 'title', 'title_ge'], 'string', 'max' => 255],
            [['position'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('contact', 'ID'),
            'img' => Yii::t('contact', 'Img'),
            'title' => Yii::t('contact', 'Title'),
            'description' => Yii::t('contact', 'Description'),
            'title_ge' => Yii::t('contact', 'Title Ge'),
            'description_ge' => Yii::t('contact', 'Description Ge'),
            'position' => Yii::t('contact', 'Position'),
            'visible' => Yii::t('contact', 'Visible'),
        ];
    }
}
