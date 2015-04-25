<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "record".
 *
 * @property integer $id
 * @property integer $record_id
 * @property resource $patient_signature
 * @property string $agreed_date
 * @property resource $employee_signature
 * @property string $complaints
 * @property string $professional_fee
 * @property string $frames_price
 * @property string $lenses_price
 * @property string $contacts_price
 * @property string $solutions_price
 * @property string $ancilliary_procedures
 * @property string $others
 * @property integer $insurance_id
 * @property string $senior_citizen
 * @property string $person_w_disability
 * @property string $deposit
 * @property string $balance
 * @property string $diagnostic_result
 * @property string $management
 * @property string $plan_TCB
 * @property string $plan_next_visit
 *
 * @property Evaluation[] $evaluations
 * @property Prescription[] $prescriptions
 * @property Insurance $insurance
 * @property User $id0
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
            [['id', 'patient_signature', 'agreed_date', 'employee_signature', 'diagnostic_result', 'management', 'plan_TCB', 'plan_next_visit'], 'required'],
            [['id', 'insurance_id'], 'integer'],
            [['patient_signature', 'employee_signature', 'complaints', 'diagnostic_result', 'management', 'plan_TCB'], 'string'],
            [['agreed_date', 'plan_next_visit'], 'safe'],
            [['professional_fee', 'frames_price', 'lenses_price', 'contacts_price', 'solutions_price', 'ancilliary_procedures', 'others', 'senior_citizen', 'person_w_disability', 'deposit', 'balance'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'record_id' => 'Record ID',
            'patient_signature' => 'Patient Signature',
            'agreed_date' => 'Agreed Date',
            'employee_signature' => 'Employee Signature',
            'complaints' => 'Complaints',
            'professional_fee' => 'Professional Fee',
            'frames_price' => 'Frames Price',
            'lenses_price' => 'Lenses Price',
            'contacts_price' => 'Contacts Price',
            'solutions_price' => 'Solutions Price',
            'ancilliary_procedures' => 'Ancilliary Procedures',
            'others' => 'Others',
            'insurance_id' => 'Insurance ID',
            'senior_citizen' => 'Senior Citizen',
            'person_w_disability' => 'Person W Disability',
            'deposit' => 'Deposit',
            'balance' => 'Balance',
            'diagnostic_result' => 'Diagnostic Result',
            'management' => 'Management',
            'plan_TCB' => 'Plan  Tcb',
            'plan_next_visit' => 'Plan Next Visit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluations()
    {
        return $this->hasMany(Evaluation::className(), ['record_id' => 'record_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrescriptions()
    {
        return $this->hasMany(Prescription::className(), ['record_id' => 'record_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInsurance()
    {
        return $this->hasOne(Insurance::className(), ['insurance_id' => 'insurance_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
