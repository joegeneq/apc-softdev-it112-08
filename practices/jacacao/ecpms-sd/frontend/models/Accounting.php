<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "accounting".
 *
 * @property integer $record_id
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
 * @property string $total
 * @property string $deposit
 * @property string $balance
 *
 * @property Record $record
 * @property Insurance $insurance
 */
class Accounting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accounting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id'], 'required'],
            [['record_id', 'insurance_id'], 'integer'],
            [['professional_fee', 'frames_price', 'lenses_price', 'contacts_price', 'solutions_price', 'ancilliary_procedures', 'others', 'senior_citizen', 'person_w_disability', 'total', 'deposit', 'balance'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'record_id' => 'Record ID',
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
            'total' => 'Total',
            'deposit' => 'Deposit',
            'balance' => 'Balance',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(Record::className(), ['record_id' => 'record_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInsurance()
    {
        return $this->hasOne(Insurance::className(), ['id' => 'insurance_id']);
    }
}
