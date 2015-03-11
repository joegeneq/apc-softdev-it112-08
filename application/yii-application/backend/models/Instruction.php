<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "instruction".
 *
 * @property integer $instruction_id
 * @property string $instruction_name
 * @property string $instruction_description
 *
 * @property Prescription[] $prescriptions
 */
class Instruction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instruction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instruction_name'], 'required'],
            [['instruction_name', 'instruction_description'], 'string', 'max' => 45],
            [['instruction_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'instruction_id' => 'Instruction ID',
            'instruction_name' => 'Instruction Name',
            'instruction_description' => 'Instruction Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrescriptions()
    {
        return $this->hasMany(Prescription::className(), ['instruction_id' => 'instruction_id']);
    }
}
