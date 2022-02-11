<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 5/31/2019
 * Time: 7:48 PM
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
     public static function tableName(){
         return 'category';
     }

    public function getProducts(){
        return $this -> hasMany(Product::className(), ['category_id' => 'id']);
    }
}