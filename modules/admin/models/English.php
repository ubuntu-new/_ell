<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "english".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string|null $content
 * @property string $name_ge
 * @property string $content_ge
 * @property string $price
 * @property string|null $keywords
 * @property string|null $description
 * @property string|null $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property string $date
 */
class English extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'english';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'name_ge', 'content_ge', 'date'], 'required'],
            [['category_id'], 'integer'],
            [['content', 'content_ge', 'hit', 'new', 'sale'], 'string'],
            [['name', 'name_ge', 'price', 'keywords', 'description', 'img', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'content' => 'Content',
            'name_ge' => 'Name Ge',
            'content_ge' => 'Content Ge',
            'price' => 'Price',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'img' => 'Img',
            'hit' => 'Hit',
            'new' => 'New',
            'sale' => 'Sale',
            'date' => 'Date',
        ];
    }
}
