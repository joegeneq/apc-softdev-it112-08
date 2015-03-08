<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $city_id
 * @property string $city_code
 * @property string $city_name
 *
 * @property Patient[] $patients
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_code'], 'required'],
            [['city_code', 'city_name'], 'string', 'max' => 45],
            [['city_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'city_code' => 'City Code',
            'city_name' => 'City Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['patient_add_city_id' => 'city_id']);
    }
}
