<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $patient_id
 * @property string $patient_lname
 * @property string $patient_fname
 * @property string $patient_mname
 * @property string $patient_birthday
 * @property string $patient_sex
 * @property string $patient_facebook
 * @property string $patient_landline
 * @property string $patient_cel1
 * @property string $patient_cel2
 * @property string $patient_company
 * @property string $patient_add_work
 * @property string $patient_contact_work
 * @property integer $user_id
 * @property string $patient_add_street
 * @property string $patient_add_town_subd_vill
 * @property string $patient_add_number
 * @property integer $patient_add_city_id
 * @property string $patientl_allergies
 * @property string $patient_medications
 * @property string $patient_treatments
 * @property string $patient_pregnant
 * @property string $patient_glasses
 * @property integer $patient_glasses_age
 * @property string $patient_contact_lens
 * @property integer $patient_contact_lens_age
 * @property integer $contact_lens_id
 *
 * @property HistoryFamily[] $historyFamilies
 * @property FamilyDisease[] $familyDiseases
 * @property HistorySports[] $historySports
 * @property Sports[] $sports
 * @property User $user
 * @property City $patientAddCity
 * @property ContactLens $contactLens
 * @property Record[] $records
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
            [['patient_lname', 'patient_fname', 'patient_birthday', 'patient_sex', 'patient_cel1', 'user_id', 'patient_add_street', 'patient_add_town_subd_vill', 'patient_add_number', 'patient_add_city_id', 'patientl_allergies', 'patient_medications', 'patient_treatments', 'patient_pregnant', 'patient_glasses', 'patient_contact_lens', 'contact_lens_id'], 'required'],
            [['patient_birthday'], 'safe'],
            [['user_id', 'patient_add_city_id', 'patient_glasses_age', 'patient_contact_lens_age', 'contact_lens_id'], 'integer'],
            [['patientl_allergies', 'patient_medications', 'patient_treatments'], 'string'],
            [['patient_lname', 'patient_fname', 'patient_mname', 'patient_facebook', 'patient_landline', 'patient_cel1', 'patient_cel2', 'patient_company', 'patient_add_work', 'patient_contact_work', 'patient_add_street', 'patient_add_number'], 'string', 'max' => 45],
            [['patient_sex', 'patient_pregnant', 'patient_glasses', 'patient_contact_lens'], 'string', 'max' => 1],
            [['patient_add_town_subd_vill'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'patient_lname' => 'Lastname',
            'patient_fname' => 'Firstname',
            'patient_mname' => 'Middlename',
            'patient_birthday' => 'Birthday',
            'patient_sex' => 'Sex',
            'patient_facebook' => 'Facebook',
            'patient_landline' => 'Landline',
            'patient_cel1' => 'Cellphone 1',
            'patient_cel2' => 'Cellphone 2',
            'patient_company' => 'Company',
            'patient_add_work' => 'Work address',
            'patient_contact_work' => 'Work contact',
            'user_id' => 'Username',
            'patient_add_street' => 'Street address',
            'patient_add_town_subd_vill' => 'Town/Subd/Vill address',
            'patient_add_number' => 'House #',
            'patient_add_city_id' => 'City address',
            'patientl_allergies' => 'Allergies',
            'patient_medications' => 'Medications',
            'patient_treatments' => 'Treatments',
            'patient_pregnant' => 'Pregnant',
            'patient_glasses' => 'Glasses',
            'patient_glasses_age' => 'Glasses age',
            'patient_contact_lens' => 'Contact lens',
            'patient_contact_lens_age' => 'Contact lens age',
            'contact_lens_id' => 'Contact lens type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoryFamilies()
    {
        return $this->hasMany(HistoryFamily::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamilyDiseases()
    {
        return $this->hasMany(FamilyDisease::className(), ['family_disease_id' => 'family_disease_id'])->viaTable('history_family', ['patient_id' => 'patient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorySports()
    {
        return $this->hasMany(HistorySports::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSports()
    {
        return $this->hasMany(Sports::className(), ['sports_id' => 'sports_id'])->viaTable('history_sports', ['patient_id' => 'patient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatientAddCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'patient_add_city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContactLens()
    {
        return $this->hasOne(ContactLens::className(), ['contact_lens_id' => 'contact_lens_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['patient_id' => 'patient_id']);
    }

}
