<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "insurance".
 *
 * @property integer $id
 * @property string $insurance_name
 * @property string $insurance_description
 * @property string $insurance_percentage
 *
 * @property Accounting[] $accountings
 */
class Insurance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'insurance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['insurance_name', 'insurance_percentage'], 'required'],
            [['insurance_percentage'], 'number'],
            [['insurance_name', 'insurance_description'], 'string', 'max' => 45],
            [['insurance_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'insurance_name' => 'Insurance Name',
            'insurance_description' => 'Insurance Description',
            'insurance_percentage' => 'Insurance Percentage',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountings()
    {
        return $this->hasMany(Accounting::className(), ['insurance_id' => 'id']);
    }
}
