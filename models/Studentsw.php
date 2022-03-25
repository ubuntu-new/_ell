<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentsw".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string $name
 * @property string $birthdate
 * @property string $item_key
 * @property string $active
 * @property string $position
 * @property string $title_ge
 * @property string $description_ge
 * @property string $name_ge
 * @property string|null $img
 */
class Studentsw extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentsw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'active', 'title_ge', 'description_ge','name'], 'string'],
//            [['name', 'title','title_ge','description', 'description_ge', 'name_ge'], 'required'],
            [['birthdate','item_key','position', 'title','title_ge','description', 'description_ge', 'name_ge'], 'safe'],
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
            'name' => 'Name',
            'birthdate' => 'Birthdate',
            'item_key' => 'Item Key',
            'active' => 'Active',
            'position' => 'Position',
            'title_ge' => 'Title Ge',
            'description_ge' => 'Description Ge',
            'name_ge' => 'Name Ge',
            'img' => 'Img',
        ];
    }

}
