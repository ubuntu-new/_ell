<?php
namespace app\models\db;

use yii\db\ActiveRecord;

/**
 * Activity model
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $name
 * @property string $image
 * @property string $img
 * @property mixed $birthdate
 */
class Items extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%items}}';
    }

}

