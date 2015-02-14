<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $CITY_ID
 * @property integer $CITY_ZIP_CODE
 * @property string $CITY_NAME
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
            [['CITY_ZIP_CODE', 'CITY_NAME'], 'required'],
            [['CITY_ZIP_CODE'], 'integer'],
            [['CITY_NAME'], 'string', 'max' => 52]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CITY_ID' => 'City  ID',
            'CITY_ZIP_CODE' => 'City  Zip  Code',
            'CITY_NAME' => 'City  Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['PATIENT_CITY' => 'CITY_ID']);
    }
}
