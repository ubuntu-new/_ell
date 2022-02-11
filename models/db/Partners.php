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
 * @property mixed $birthdate
 */
class Partners extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%partners}}';
    }

}