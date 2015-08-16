<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tarif".
 *
 * @property integer $id
 * @property string $price
 * @property string $name
 * @property string $speed
 */
class Tarif extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tarif';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price', 'speed'], 'number'],
            [['name'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Цена',
            'name' => 'Название',
            'speed' => 'Скорость',
        ];
    }
}
