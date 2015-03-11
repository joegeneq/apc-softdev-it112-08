<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "history_family".
 *
 * @property integer $patient_id
 * @property integer $family_disease_id
 * @property integer $relationship_id
 *
 * @property FamilyDisease $familyDisease
 * @property Patient $patient
 * @property Relationship $relationship
 */
class HistoryFamily extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history_family';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'family_disease_id', 'relationship_id'], 'required'],
            [['patient_id', 'family_disease_id', 'relationship_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'family_disease_id' => 'Family Disease ID',
            'relationship_id' => 'Relationship ID',
            //'patientName' => 'Lastname',
            'patientName' => Yii::t('app', 'Lastname'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamilyDisease()
    {
        return $this->hasOne(FamilyDisease::className(), ['family_disease_id' => 'family_disease_id']);
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
    public function getRelationship()
    {
        return $this->hasOne(Relationship::className(), ['relationship_id' => 'relationship_id']);
    }
    public function getPatientName(){
        //return $this->patient->patient_lname;
        return $this->patient->patient_lname;
    }
}
