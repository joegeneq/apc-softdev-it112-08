<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "discount".
 *
 * @property integer $discount_id
 * @property string $discount_name
 * @property string $discount_description
 * @property string $discount_percentage
 */
class Discount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'discount';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['discount_name', 'discount_percentage'], 'required'],
            [['discount_percentage'], 'number'],
            [['discount_name', 'discount_description'], 'string', 'max' => 45],
            [['discount_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'discount_id' => 'Discount ID',
            'discount_name' => 'Discount Name',
            'discount_description' => 'Discount Description',
            'discount_percentage' => 'Discount Percentage',
        ];
    }
}
