<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "contactinfo".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $address
 * @property string $email
 * @property string $mob
 * @property string $facebook
 * @property string $instagramm
 * @property string $racxa
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
            [['title', 'address', 'email', 'mob', 'facebook', 'instagramm', 'racxa'], 'required'],
            [['description'], 'string'],
            [['title', 'address', 'email', 'mob', 'facebook', 'instagramm', 'racxa'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'address' => 'Address',
            'email' => 'Email',
            'mob' => 'Mob',
            'facebook' => 'Facebook',
            'instagramm' => 'Instagramm',
            'racxa' => 'Racxa',
        ];
    }
}
