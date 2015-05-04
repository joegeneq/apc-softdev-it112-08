<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $city_id
 * @property string $city_name
 * @property integer $city_code
 *
 * @property PatientProfile[] $patientProfiles
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
            [['city_name'], 'required'],
            [['city_code'], 'integer'],
            [['city_name'], 'string', 'max' => 45],
            [['city_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'city_name' => 'City Name',
            'city_code' => 'City Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatientProfiles()
    {
        return $this->hasMany(PatientProfile::className(), ['city_id' => 'city_id']);
    }
}
