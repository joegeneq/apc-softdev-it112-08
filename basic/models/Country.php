<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property integer $COUNTRY_ID
 * @property string $COUNTRY_CODE
 * @property string $COUNTRY_NAME
 *
 * @property Patient[] $patients
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COUNTRY_CODE', 'COUNTRY_NAME'], 'required'],
            [['COUNTRY_CODE'], 'string', 'max' => 2],
            [['COUNTRY_NAME'], 'string', 'max' => 52]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COUNTRY_ID' => 'Country  ID',
            'COUNTRY_CODE' => 'Country  Code',
            'COUNTRY_NAME' => 'Country  Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['PATIENT_COUNTRY_ID' => 'COUNTRY_ID']);
    }
}
