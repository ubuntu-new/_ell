<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "studyabroad".
 *
 * @property int $id
 * @property string $name
 * @property string $bday
 * @property string $phone
 * @property string $email
 * @property string $uk
 * @property string $usa
 * @property string $canada
 * @property string $europe
 * @property string $asia
 * @property string $schoolpropgrams
 * @property string $bachelormasters
 * @property string $phd
 * @property string $lsnguageprograms
 * @property string $professionalcourses
 * @property string $summerschgoolforjuniors
 * @property string $visible
 * @property string $seen
 */
class Studyabroadincome extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studyabroad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'bday', 'phone', 'email'], 'required'],
            [['seen'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['bday', 'phone', 'email', 'uk', 'usa', 'canada', 'europe', 'asia', 'schoolpropgrams', 'bachelormasters', 'phd', 'lsnguageprograms', 'professionalcourses', 'summerschgoolforjuniors', 'visible'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'bday' => 'Bday',
            'phone' => 'Phone',
            'email' => 'Email',
            'uk' => 'Uk',
            'usa' => 'Usa',
            'canada' => 'Canada',
            'europe' => 'Europe',
            'asia' => 'Asia',
            'schoolpropgrams' => 'Schoolpropgrams',
            'bachelormasters' => 'Bachelormasters',
            'phd' => 'Phd',
            'lsnguageprograms' => 'Lsnguageprograms',
            'professionalcourses' => 'Professionalcourses',
            'summerschgoolforjuniors' => 'Summerschgoolforjuniors',
            'visible' => 'Visible',
            'seen' => 'Seen',
        ];
    }
}
