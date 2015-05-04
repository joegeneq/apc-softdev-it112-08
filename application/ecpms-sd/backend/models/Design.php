<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "design".
 *
 * @property integer $id
 * @property string $design_name
 * @property string $design_description
 *
 * @property Prescription[] $prescriptions
 */
class Design extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'design';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['design_name'], 'required'],
            [['design_name', 'design_description'], 'string', 'max' => 45],
            [['design_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'design_name' => 'Design Name',
            'design_description' => 'Design Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrescriptions()
    {
        return $this->hasMany(Prescription::className(), ['design_id' => 'id']);
    }
}
