<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "provide".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $visible
 */
class Provide extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provide';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge', 'description'], 'required'],
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
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'title_ge' => 'Title Ge',
            'description_ge' => 'Description Ge',
            'visible' => 'Visible',
        ];
    }
}
