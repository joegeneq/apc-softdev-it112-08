<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "solutions".
 *
 * @property integer $id
 * @property string $solutions_name
 * @property string $solutions_description
 *
 * @property Prescription[] $prescriptions
 */
class Solutions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solutions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['solutions_name'], 'required'],
            [['solutions_name', 'solutions_description'], 'string', 'max' => 45],
            [['solutions_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'solutions_name' => 'Solutions Name',
            'solutions_description' => 'Solutions Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrescriptions()
    {
        return $this->hasMany(Prescription::className(), ['solutions_id' => 'id']);
    }
}
