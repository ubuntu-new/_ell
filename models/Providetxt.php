<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;


/**
 * This is the model class for table "english".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $content
 * @property string $price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 * @property string $date
 */
class Providetxt extends ActiveRecord
{

    public static function tableName(){
        return 'provide';
    }

}
