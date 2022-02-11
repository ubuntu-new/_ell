<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "english_center".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $content
 * @property string $name_ge
 * @property string $content_ge
 * @property string $price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property string $date
 */
class Englishcenternew extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'english_center';
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
            'id' => Yii::t('usfullinks', 'ID'),
            'category_id' => Yii::t('usfullinks', 'Category ID'),
            'name' => Yii::t('usfullinks', 'Name'),
            'content' => Yii::t('usfullinks', 'Content'),
            'name_ge' => Yii::t('usfullinks', 'Name Ge'),
            'content_ge' => Yii::t('usfullinks', 'Content Ge'),
            'price' => Yii::t('usfullinks', 'Price'),
            'keywords' => Yii::t('usfullinks', 'Keywords'),
            'description' => Yii::t('usfullinks', 'Description'),
            'img' => Yii::t('usfullinks', 'Img'),
            'hit' => Yii::t('usfullinks', 'Hit'),
            'new' => Yii::t('usfullinks', 'New'),
            'sale' => Yii::t('usfullinks', 'Sale'),
            'date' => Yii::t('usfullinks', 'Date'),
        ];
    }
}
