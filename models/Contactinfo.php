<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactinfo".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $address
 * @property string $email
 * @property string $mob
 * @property string $facebook
 * @property string $instagramm
 * @property string $twitter
 */
class Contactinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge', 'address', 'email', 'mob', 'facebook', 'instagramm', 'twitter'], 'required'],
            [['description', 'description_ge'], 'string'],
            [['title', 'title_ge', 'address', 'email', 'mob', 'facebook', 'instagramm', 'twitter'], 'string', 'max' => 255],
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
            'title_ge' => Yii::t('contact', 'Title Ge'),
            'description_ge' => Yii::t('contact', 'Description Ge'),
            'address' => Yii::t('contact', 'Address'),
            'email' => Yii::t('contact', 'Email'),
            'mob' => Yii::t('contact', 'Mob'),
            'facebook' => Yii::t('contact', 'Facebook'),
            'instagramm' => Yii::t('contact', 'Instagramm'),
            'twitter' => Yii::t('contact', 'Twitter'),
        ];
    }
}
