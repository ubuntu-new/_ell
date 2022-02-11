<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 5/31/2019
 * Time: 7:48 PM
 */

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord
{
     public static function tableName(){
         return 'product';
     }

    public function getCategory(){
        return $this -> hasOne(Category::className(), ['id' => 'category_id']);
    }
}