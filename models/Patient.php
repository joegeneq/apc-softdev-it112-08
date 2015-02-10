<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $PATIENT_ID
 * @property string $PATIENT_NAME_LAST
 * @property string $PATIENT_NAME_FIRST
 * @property string $PATIENT_NAME_MIDDLE
 * @property string $PATIENT_BDAY
 * @property string $PATIENT_SEX
 * @property string $PATIENT_HOME
 * @property integer $PATIENT_CITY
 * @property integer $PATIENT_COUNTRY_ID
 * @property string $PATIENT_OCCUPATION
 * @property string $PATIENT_COMPANY_NAME
 * @property integer $PATIENT_COMPANY_NUMBER
 * @property integer $PATIENT_SPORTS
 * @property string $PATIENT_EMAIL1
 * @property string $PATIENT_EMAIL2
 * @property string $PATIENT_FACEBOOK
 * @property integer $PATIENT_LANDLINE
 * @property integer $PATIENT_CELL
 * @property string $PATIENT_ALLERGIES
 * @property string $PATIENT_MEDICATIONS
 * @property string $PATIENT_INJURIES_SURGERIES_HOSPITALIZATION
 * @property integer $PATIENT_HISTORY_PERSONAL_ID
 * @property integer $PATIENT_HISTORY_FAMILY_ID
 * @property integer $PATIENT_PERSONAL_EXPERIENCE
 * @property string $PATIENT_REFERRED_BY
 * @property integer $PATIENT_HEALTH_CARD
 * @property string $PATIENT_REGISTRATION
 *
 * @property City $pATIENTCITY
 * @property Country $pATIENTCOUNTRY
 * @property Sports $pATIENTSPORTS
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PATIENT_NAME_LAST', 'PATIENT_NAME_FIRST', 'PATIENT_BDAY', 'PATIENT_SEX', 'PATIENT_HOME', 'PATIENT_CITY', 'PATIENT_COUNTRY_ID', 'PATIENT_OCCUPATION', 'PATIENT_COMPANY_NAME', 'PATIENT_COMPANY_NUMBER', 'PATIENT_SPORTS', 'PATIENT_EMAIL1', 'PATIENT_HISTORY_PERSONAL_ID', 'PATIENT_HISTORY_FAMILY_ID', 'PATIENT_PERSONAL_EXPERIENCE', 'PATIENT_REGISTRATION'], 'required'],
            [['PATIENT_BDAY', 'PATIENT_REGISTRATION'], 'safe'],
            [['PATIENT_CITY', 'PATIENT_COUNTRY_ID', 'PATIENT_COMPANY_NUMBER', 'PATIENT_SPORTS', 'PATIENT_LANDLINE', 'PATIENT_CELL', 'PATIENT_HISTORY_PERSONAL_ID', 'PATIENT_HISTORY_FAMILY_ID', 'PATIENT_PERSONAL_EXPERIENCE', 'PATIENT_HEALTH_CARD'], 'integer'],
            [['PATIENT_NAME_LAST', 'PATIENT_NAME_MIDDLE', 'PATIENT_OCCUPATION', 'PATIENT_COMPANY_NAME', 'PATIENT_EMAIL1', 'PATIENT_EMAIL2', 'PATIENT_FACEBOOK'], 'string', 'max' => 52],
            [['PATIENT_NAME_FIRST', 'PATIENT_HOME', 'PATIENT_REFERRED_BY'], 'string', 'max' => 102],
            [['PATIENT_SEX'], 'string', 'max' => 1],
            [['PATIENT_ALLERGIES', 'PATIENT_MEDICATIONS'], 'string', 'max' => 300],
            [['PATIENT_INJURIES_SURGERIES_HOSPITALIZATION'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PATIENT_ID' => 'Patient  ID',
            'PATIENT_NAME_LAST' => 'Patient  Name  Last',
            'PATIENT_NAME_FIRST' => 'Patient  Name  First',
            'PATIENT_NAME_MIDDLE' => 'Patient  Name  Middle',
            'PATIENT_BDAY' => 'Patient  Bday',
            'PATIENT_SEX' => 'Patient  Sex',
            'PATIENT_HOME' => 'Patient  Home',
            'PATIENT_CITY' => 'Patient  City',
            'PATIENT_COUNTRY_ID' => 'Patient  Country  ID',
            'PATIENT_OCCUPATION' => 'Patient  Occupation',
            'PATIENT_COMPANY_NAME' => 'Patient  Company  Name',
            'PATIENT_COMPANY_NUMBER' => 'Patient  Company  Number',
            'PATIENT_SPORTS' => 'Patient  Sports',
            'PATIENT_EMAIL1' => 'Patient  Email1',
            'PATIENT_EMAIL2' => 'Patient  Email2',
            'PATIENT_FACEBOOK' => 'Patient  Facebook',
            'PATIENT_LANDLINE' => 'Patient  Landline',
            'PATIENT_CELL' => 'Patient  Cell',
            'PATIENT_ALLERGIES' => 'Patient  Allergies',
            'PATIENT_MEDICATIONS' => 'Patient  Medications',
            'PATIENT_INJURIES_SURGERIES_HOSPITALIZATION' => 'Patient  Injuries  Surgeries  Hospitalization',
            'PATIENT_HISTORY_PERSONAL_ID' => 'Patient  History  Personal  ID',
            'PATIENT_HISTORY_FAMILY_ID' => 'Patient  History  Family  ID',
            'PATIENT_PERSONAL_EXPERIENCE' => 'Patient  Personal  Experience',
            'PATIENT_REFERRED_BY' => 'Patient  Referred  By',
            'PATIENT_HEALTH_CARD' => 'Patient  Health  Card',
            'PATIENT_REGISTRATION' => 'Patient  Registration',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPATIENTCITY()
    {
        return $this->hasOne(City::className(), ['CITY_ID' => 'PATIENT_CITY']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPATIENTCOUNTRY()
    {
        return $this->hasOne(Country::className(), ['COUNTRY_ID' => 'PATIENT_COUNTRY_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPATIENTSPORTS()
    {
        return $this->hasOne(Sports::className(), ['SPORTS_ID' => 'PATIENT_SPORTS']);
    }
}
