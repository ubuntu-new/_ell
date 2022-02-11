<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "newstxt".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $visible
 */
class Newstxt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newstxt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge'], 'required'],
            [['description', 'description_ge', 'visible'], 'string'],
            [['title', 'title_ge'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('usfullinks', 'ID'),
            'title' => Yii::t('usfullinks', 'Title'),
            'description' => Yii::t('usfullinks', 'Description'),
            'title_ge' => Yii::t('usfullinks', 'Title Ge'),
            'description_ge' => Yii::t('usfullinks', 'Description Ge'),
            'visible' => Yii::t('usfullinks', 'Visible'),
        ];
    }
}
