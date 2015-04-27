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
 * @property Record[] $records
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
            [['instruction_name', 'instruction_description'], 'string', 'max' => 45]
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
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['instruction_id' => 'instruction_id']);
    }
}
