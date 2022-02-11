<?php

namespace app\models;

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
class Usfullinks extends \yii\db\ActiveRecord
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
            'id' => Yii::t('usfullinks', 'ID'),
            'img' => Yii::t('usfullinks', 'Img'),
            'title' => Yii::t('usfullinks', 'Title'),
            'description' => Yii::t('usfullinks', 'Description'),
            'title_ge' => Yii::t('usfullinks', 'Title Ge'),
            'description_ge' => Yii::t('usfullinks', 'Description Ge'),
            'position' => Yii::t('usfullinks', 'Position'),
            'visible' => Yii::t('usfullinks', 'Visible'),
        ];
    }
}
