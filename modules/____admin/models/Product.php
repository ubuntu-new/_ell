<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $content
 * @property string $romeli
 * @property string $client
 * @property double $price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property int $quantity
 * @property string $additionalInfo
 * @property string $visible
 * @property string $imgGalerry
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'client', 'imgGalerry'], 'required'],
            [['category_id', 'quantity'], 'integer'],
            [['content', 'hit', 'new', 'sale', 'additionalInfo', 'visible'], 'string'],
            [['price'], 'number'],
            [['name', 'romeli', 'client', 'keywords', 'description', 'img', 'imgGalerry'], 'string', 'max' => 255],
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
            'romeli' => 'Romeli',
            'client' => 'Client',
            'price' => 'Price',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'img' => 'Img',
            'hit' => 'Hit',
            'new' => 'New',
            'sale' => 'Sale',
            'quantity' => 'Quantity',
            'additionalInfo' => 'Additional Info',
            'visible' => 'Visible',
            'imgGalerry' => 'Img Galerry',
        ];
    }
}
