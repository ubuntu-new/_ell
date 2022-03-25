<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partnersw".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string $active
 * @property string $position
 * @property string $title_ge
 * @property string $description_ge
 * @property string $img
 */
class Partnersw extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partnersw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'title_ge', 'description_ge'], 'string'],
//            [['title'], 'required'],
            [['title','title_ge','description_ge','position', 'active'], 'safe'],
//            [['img'], 'string', 'max' => 255],
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
            'active' => 'Active',
            'position' => 'Position',
            'title_ge' => 'Title Ge',
            'description_ge' => 'Description Ge',
            'img' => 'Img',
        ];
    }


}
