<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property integer $material_id
 * @property string $material_name
 * @property string $material_description
 *
 * @property Prescription[] $prescriptions
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_name'], 'required'],
            [['material_name', 'material_description'], 'string', 'max' => 45],
            [['material_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'material_id' => 'Material ID',
            'material_name' => 'Material Name',
            'material_description' => 'Material Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrescriptions()
    {
        return $this->hasMany(Prescription::className(), ['material_id' => 'material_id']);
    }
}
