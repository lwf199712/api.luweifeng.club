<?php declare(strict_types=1);


use yii\db\ActiveRecord;

/**
 * This is the model class for table "fa_luweifeng".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property int $created_at
 * @property string $remark
 */
class InsertModel extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return '{{%luweifeng}}';
    }
}
