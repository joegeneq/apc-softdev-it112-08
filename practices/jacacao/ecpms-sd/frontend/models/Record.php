<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "record".
 *
 * @property integer $record_id
 * @property integer $patient_id
 * @property integer $employee_id
 * @property resource $patient_signature
 * @property string $agreed_date
 * @property resource $employee_signature
 * @property string $complaints
 *
 * @property Accounting $accounting
 * @property Evaluation $evaluation
 * @property Prescription $prescription
 * @property User $patient
 * @property User $employee
 */
class Record extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'employee_id'], 'required'],
            [['patient_id', 'employee_id'], 'integer'],
            [['patient_signature', 'employee_signature', 'complaints'], 'string'],
            [['agreed_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'record_id' => 'Record ID',
            'patient_id' => 'Patient ID',
            'employee_id' => 'Employee ID',
            'patient_signature' => 'Patient Signature',
            'agreed_date' => 'Agreed Date',
            'employee_signature' => 'Employee Signature',
            'complaints' => 'Complaints',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounting()
    {
        return $this->hasOne(Accounting::className(), ['record_id' => 'record_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluation()
    {
        return $this->hasOne(Evaluation::className(), ['record_id' => 'record_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrescription()
    {
        return $this->hasOne(Prescription::className(), ['record_id' => 'record_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(User::className(), ['id' => 'patient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(User::className(), ['id' => 'employee_id']);
    }
}
