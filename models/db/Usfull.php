<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 10/8/2019
 * Time: 21:16
 */

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
class Usfull extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%usfulltxt}}';
    }

}

