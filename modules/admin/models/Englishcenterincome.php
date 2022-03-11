<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "englishcenter".
 *
 * @property int $id
 * @property string $name
 * @property string $bday
 * @property string $phone
 * @property string $email
 * @property string $generalenglish
 * @property string $esol
 * @property string $ielts
 * @property string $toefl
 * @property string $sat
 * @property string $gmat
 * @property string $gre
 * @property string $visible
 */
class Englishcenterincome extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'englishcenter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'bday', 'phone', 'email', 'generalenglish'], 'required'],
            [['visible'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['bday', 'phone', 'email', 'generalenglish', 'esol', 'ielts', 'toefl', 'sat', 'gmat', 'gre','seen'], 'string', 'max' => 100],
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
            'generalenglish' => 'Generalenglish',
            'esol' => 'Esol',
            'ielts' => 'Ielts',
            'toefl' => 'Toefl',
            'sat' => 'Sat',
            'gmat' => 'Gmat',
            'gre' => 'Gre',
            'seen' => 'Seen',
            'visible' => 'Visible',
        ];
    }
}
