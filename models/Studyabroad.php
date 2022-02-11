<?php

namespace app\models;
use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "Studyabroad".
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
 */
class Studyabroad extends \yii\db\ActiveRecord
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
            [['uk', 'usa', 'canada', 'europe', 'asia', 'schoolpropgrams', 'bachelormasters', 'phd', 'lsnguageprograms', 'professionalcourses', 'summerschgoolforjuniors', 'visible'], 'safe'],
            [[], 'string'],
            [['name'], 'string', 'max' => 255],
            [['phone', 'email'], 'string', 'max' => 100],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Full Name',
            'bday' => 'Date of Birth',
            'phone' => 'Tel',
            'email' => 'Email',
            'uk' => 'United Kingdome',
            'usa' => 'the USA',
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
        ];
    }
}
