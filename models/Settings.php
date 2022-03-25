<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $title
 * @property string $title_ge
 * @property string $idd
 * @property string $visible
 * @property string|null $value
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge'], 'required'],
            [['visible'], 'string'],
            [['title', 'title_ge'], 'string', 'max' => 255],
            [['idd'], 'string', 'max' => 100],
            [['value'], 'string', 'max' => 10],
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
            'title_ge' => 'Title Ge',
            'visible' => 'Visible',
            'value' => 'Value',
            'idd' => 'idd',
        ];
    }
}
