<?php

namespace frontend\models;
use backend\models\Sports;
use Yii;

/**
 * This is the model class for table "history_sports".
 *
 * @property integer $sports_id
 * @property integer $patient_id
 * @property string $history_value
 *
 * @property Patient $patient
 * @property Sports $sports
 */
class HistorySports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history_sports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sports_id', 'patient_id'], 'required'],
            [['sports_id', 'patient_id'], 'integer'],
            [['history_value'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sports_id' => 'Sports ID',
            'patient_id' => 'Patient ID',
            'history_value' => 'History Value',
            'patientName' => Yii::t('app', 'Lastname'),
            'sportsName' => Yii::t('app', 'Sports'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSports()
    {
        return $this->hasOne(Sports::className(), ['sports_id' => 'sports_id']);
    }

    public function getPatientName(){
        //return $this->patient->patient_lname;
        return $this->patient->patient_lname;
    }
    public function getSportsName(){
        //return $this->patient->patient_lname;
        return $this->Sports->sports_name;
    }
}
