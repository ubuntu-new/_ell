<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string|null $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $visible
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
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
            [['img'], 'file','skipOnEmpty' => true, 'extensions'=>'jpg, png, gif'],
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
            'img' => Yii::t('contact', 'Img (600 X 400)'),
            'visible' => 'Visible',
        ];
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function upload(){
        if ($this->validate()) {
            $this->img->saveAs('uploads/team/' . $this->img->baseName . '.' . $this->img->extension);
            //$this->img = null;
            return true;
        } else {
            return false;
        }
    }
}
