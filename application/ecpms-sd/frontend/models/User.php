<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $role
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $birthday
 * @property string $gender
 * @property integer $city_city_id
 * @property string $home_address
 * @property string $company_address
 * @property string $company_name
 * @property string $cel
 * @property string $tel
 * @property string $fb
 * @property string $allergies
 * @property string $medications
 * @property string $treatments
 * @property string $eyeglasses
 * @property string $eyeglasses_age
 * @property string $contact_lens
 * @property string $contact_lens_age
 * @property integer $contact_lens_id
 * @property integer $blindness_grand
 * @property integer $blindness_parents
 * @property integer $blindness_siblings
 * @property integer $blindness_children
 * @property integer $cataracts_grand
 * @property integer $cataracts_parents
 * @property integer $cataracts_siblings
 * @property integer $cataracts_children
 * @property integer $crossed_eyes_grand
 * @property integer $crossed_eyes_parents
 * @property integer $crossed_eyes_siblings
 * @property integer $crossed_eyes_children
 * @property integer $glaucoma_grand
 * @property integer $glaucoma_parents
 * @property integer $glaucoma_siblings
 * @property integer $glaucoma_children
 * @property integer $macular_degeneration_grand
 * @property integer $macular_degeneration_parents
 * @property integer $macular_degeneration_siblings
 * @property integer $macular_degeneration_children
 * @property integer $retinal_detachment_grand
 * @property integer $retinal_detachment_parents
 * @property integer $retinal_detachment_siblings
 * @property integer $retinal_detachment_children
 * @property integer $arthritis_grand
 * @property integer $arthritis_parents
 * @property integer $arthritis_siblings
 * @property integer $arthritis_children
 * @property integer $cancer_grand
 * @property integer $cancer_parents
 * @property integer $cancer_siblings
 * @property integer $cancer_children
 * @property integer $diabetes_grand
 * @property integer $diabetes_parents
 * @property integer $diabetes_siblings
 * @property integer $diabetes_children
 * @property integer $heart_disease_grand
 * @property integer $heart_disease_parents
 * @property integer $heart_disease_siblings
 * @property integer $heart_disease_children
 * @property integer $high_blood_pressure_grand
 * @property integer $high_blood_pressure_parents
 * @property integer $high_blood_pressure_siblings
 * @property integer $high_blood_pressure_children
 * @property integer $kidney_disease_grand
 * @property integer $kidney_disease_parents
 * @property integer $kidney_disease_siblings
 * @property integer $kidney_disease_children
 * @property integer $lupus_grand
 * @property integer $lupus_parents
 * @property integer $lupus_siblings
 * @property integer $lupus_children
 * @property integer $thyroid_disease_grand
 * @property integer $thyroid_disease_parents
 * @property integer $thyroid_disease_siblings
 * @property integer $thyroid_disease_children
 * @property string $others
 * @property integer $headaches
 * @property integer $migrains
 * @property integer $seizures
 * @property integer $loss_of_vision
 * @property integer $blurred_vision
 * @property integer $distorted_vision
 * @property integer $loss_of_side_vision
 * @property integer $double_vision
 * @property integer $dryness_vision
 * @property integer $mucous_discharge
 * @property integer $redness
 * @property integer $sandy_gritty_feeling
 * @property integer $itching
 * @property integer $burning
 * @property integer $foreign_body_sensation
 * @property integer $excess_tearing_watering
 * @property integer $glare_light_sensitivity
 * @property integer $eye_pain_soreness
 * @property integer $chronic_infection_of_eye_or_lid
 * @property integer $sties_chalazion
 * @property integer $flashes_floaters_of_vision
 * @property integer $tired_eyes
 * @property string $sports
 *
 * @property Record[] $records
 * @property City $cityCity
 * @property ContactLens $contactLens
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'firstname', 'lastname', 'birthday', 'gender', 'city_city_id', 'home_address', 'eyeglasses', 'contact_lens', 'blindness_grand', 'blindness_parents', 'blindness_siblings', 'blindness_children', 'cataracts_grand', 'cataracts_parents', 'cataracts_siblings', 'cataracts_children', 'crossed_eyes_grand', 'crossed_eyes_parents', 'crossed_eyes_siblings', 'crossed_eyes_children', 'glaucoma_grand', 'glaucoma_parents', 'glaucoma_siblings', 'glaucoma_children', 'macular_degeneration_grand', 'macular_degeneration_parents', 'macular_degeneration_siblings', 'macular_degeneration_children', 'retinal_detachment_grand', 'retinal_detachment_parents', 'retinal_detachment_siblings', 'retinal_detachment_children', 'arthritis_grand', 'arthritis_parents', 'arthritis_siblings', 'arthritis_children', 'cancer_grand', 'cancer_parents', 'cancer_siblings', 'cancer_children', 'diabetes_grand', 'diabetes_parents', 'diabetes_siblings', 'diabetes_children', 'heart_disease_grand', 'heart_disease_parents', 'heart_disease_siblings', 'heart_disease_children', 'high_blood_pressure_grand', 'high_blood_pressure_parents', 'high_blood_pressure_siblings', 'high_blood_pressure_children', 'kidney_disease_grand', 'kidney_disease_parents', 'kidney_disease_siblings', 'kidney_disease_children', 'lupus_grand', 'lupus_parents', 'lupus_siblings', 'lupus_children', 'thyroid_disease_grand', 'thyroid_disease_parents', 'thyroid_disease_siblings', 'thyroid_disease_children', 'headaches', 'migrains', 'seizures', 'loss_of_vision', 'blurred_vision', 'distorted_vision', 'loss_of_side_vision', 'double_vision', 'dryness_vision', 'mucous_discharge', 'redness', 'sandy_gritty_feeling', 'itching', 'burning', 'foreign_body_sensation', 'excess_tearing_watering', 'glare_light_sensitivity', 'eye_pain_soreness', 'chronic_infection_of_eye_or_lid', 'sties_chalazion', 'flashes_floaters_of_vision', 'tired_eyes'], 'required'],
            [['role', 'status', 'created_at', 'updated_at', 'city_city_id', 'contact_lens_id', 'blindness_grand', 'blindness_parents', 'blindness_siblings', 'blindness_children', 'cataracts_grand', 'cataracts_parents', 'cataracts_siblings', 'cataracts_children', 'crossed_eyes_grand', 'crossed_eyes_parents', 'crossed_eyes_siblings', 'crossed_eyes_children', 'glaucoma_grand', 'glaucoma_parents', 'glaucoma_siblings', 'glaucoma_children', 'macular_degeneration_grand', 'macular_degeneration_parents', 'macular_degeneration_siblings', 'macular_degeneration_children', 'retinal_detachment_grand', 'retinal_detachment_parents', 'retinal_detachment_siblings', 'retinal_detachment_children', 'arthritis_grand', 'arthritis_parents', 'arthritis_siblings', 'arthritis_children', 'cancer_grand', 'cancer_parents', 'cancer_siblings', 'cancer_children', 'diabetes_grand', 'diabetes_parents', 'diabetes_siblings', 'diabetes_children', 'heart_disease_grand', 'heart_disease_parents', 'heart_disease_siblings', 'heart_disease_children', 'high_blood_pressure_grand', 'high_blood_pressure_parents', 'high_blood_pressure_siblings', 'high_blood_pressure_children', 'kidney_disease_grand', 'kidney_disease_parents', 'kidney_disease_siblings', 'kidney_disease_children', 'lupus_grand', 'lupus_parents', 'lupus_siblings', 'lupus_children', 'thyroid_disease_grand', 'thyroid_disease_parents', 'thyroid_disease_siblings', 'thyroid_disease_children', 'headaches', 'migrains', 'seizures', 'loss_of_vision', 'blurred_vision', 'distorted_vision', 'loss_of_side_vision', 'double_vision', 'dryness_vision', 'mucous_discharge', 'redness', 'sandy_gritty_feeling', 'itching', 'burning', 'foreign_body_sensation', 'excess_tearing_watering', 'glare_light_sensitivity', 'eye_pain_soreness', 'chronic_infection_of_eye_or_lid', 'sties_chalazion', 'flashes_floaters_of_vision', 'tired_eyes'], 'integer'],
            [['birthday'], 'safe'],
            [['allergies', 'medications', 'treatments', 'others', 'sports'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'firstname', 'lastname', 'middlename', 'home_address', 'company_address'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['gender', 'eyeglasses', 'contact_lens'], 'string', 'max' => 1],
            [['company_name', 'cel', 'tel', 'eyeglasses_age', 'contact_lens_age'], 'string', 'max' => 45],
            [['fb'], 'string', 'max' => 75],
            [['username'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'role' => 'Role',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'middlename' => 'Middlename',
            'birthday' => 'Birthday',
            'gender' => 'Gender',
            'city_city_id' => 'City City ID',
            'home_address' => 'Home Address',
            'company_address' => 'Company Address',
            'company_name' => 'Company Name',
            'cel' => 'Cel',
            'tel' => 'Tel',
            'fb' => 'Fb',
            'allergies' => 'Allergies',
            'medications' => 'Medications',
            'treatments' => 'Treatments',
            'eyeglasses' => 'Eyeglasses',
            'eyeglasses_age' => 'Eyeglasses Age',
            'contact_lens' => 'Contact Lens',
            'contact_lens_age' => 'Contact Lens Age',
            'contact_lens_id' => 'Contact Lens ID',
            'blindness_grand' => 'Blindness Grand',
            'blindness_parents' => 'Blindness Parents',
            'blindness_siblings' => 'Blindness Siblings',
            'blindness_children' => 'Blindness Children',
            'cataracts_grand' => 'Cataracts Grand',
            'cataracts_parents' => 'Cataracts Parents',
            'cataracts_siblings' => 'Cataracts Siblings',
            'cataracts_children' => 'Cataracts Children',
            'crossed_eyes_grand' => 'Crossed Eyes Grand',
            'crossed_eyes_parents' => 'Crossed Eyes Parents',
            'crossed_eyes_siblings' => 'Crossed Eyes Siblings',
            'crossed_eyes_children' => 'Crossed Eyes Children',
            'glaucoma_grand' => 'Glaucoma Grand',
            'glaucoma_parents' => 'Glaucoma Parents',
            'glaucoma_siblings' => 'Glaucoma Siblings',
            'glaucoma_children' => 'Glaucoma Children',
            'macular_degeneration_grand' => 'Macular Degeneration Grand',
            'macular_degeneration_parents' => 'Macular Degeneration Parents',
            'macular_degeneration_siblings' => 'Macular Degeneration Siblings',
            'macular_degeneration_children' => 'Macular Degeneration Children',
            'retinal_detachment_grand' => 'Retinal Detachment Grand',
            'retinal_detachment_parents' => 'Retinal Detachment Parents',
            'retinal_detachment_siblings' => 'Retinal Detachment Siblings',
            'retinal_detachment_children' => 'Retinal Detachment Children',
            'arthritis_grand' => 'Arthritis Grand',
            'arthritis_parents' => 'Arthritis Parents',
            'arthritis_siblings' => 'Arthritis Siblings',
            'arthritis_children' => 'Arthritis Children',
            'cancer_grand' => 'Cancer Grand',
            'cancer_parents' => 'Cancer Parents',
            'cancer_siblings' => 'Cancer Siblings',
            'cancer_children' => 'Cancer Children',
            'diabetes_grand' => 'Diabetes Grand',
            'diabetes_parents' => 'Diabetes Parents',
            'diabetes_siblings' => 'Diabetes Siblings',
            'diabetes_children' => 'Diabetes Children',
            'heart_disease_grand' => 'Heart Disease Grand',
            'heart_disease_parents' => 'Heart Disease Parents',
            'heart_disease_siblings' => 'Heart Disease Siblings',
            'heart_disease_children' => 'Heart Disease Children',
            'high_blood_pressure_grand' => 'High Blood Pressure Grand',
            'high_blood_pressure_parents' => 'High Blood Pressure Parents',
            'high_blood_pressure_siblings' => 'High Blood Pressure Siblings',
            'high_blood_pressure_children' => 'High Blood Pressure Children',
            'kidney_disease_grand' => 'Kidney Disease Grand',
            'kidney_disease_parents' => 'Kidney Disease Parents',
            'kidney_disease_siblings' => 'Kidney Disease Siblings',
            'kidney_disease_children' => 'Kidney Disease Children',
            'lupus_grand' => 'Lupus Grand',
            'lupus_parents' => 'Lupus Parents',
            'lupus_siblings' => 'Lupus Siblings',
            'lupus_children' => 'Lupus Children',
            'thyroid_disease_grand' => 'Thyroid Disease Grand',
            'thyroid_disease_parents' => 'Thyroid Disease Parents',
            'thyroid_disease_siblings' => 'Thyroid Disease Siblings',
            'thyroid_disease_children' => 'Thyroid Disease Children',
            'others' => 'Others',
            'headaches' => 'Headaches',
            'migrains' => 'Migrains',
            'seizures' => 'Seizures',
            'loss_of_vision' => 'Loss Of Vision',
            'blurred_vision' => 'Blurred Vision',
            'distorted_vision' => 'Distorted Vision',
            'loss_of_side_vision' => 'Loss Of Side Vision',
            'double_vision' => 'Double Vision',
            'dryness_vision' => 'Dryness Vision',
            'mucous_discharge' => 'Mucous Discharge',
            'redness' => 'Redness',
            'sandy_gritty_feeling' => 'Sandy Gritty Feeling',
            'itching' => 'Itching',
            'burning' => 'Burning',
            'foreign_body_sensation' => 'Foreign Body Sensation',
            'excess_tearing_watering' => 'Excess Tearing Watering',
            'glare_light_sensitivity' => 'Glare Light Sensitivity',
            'eye_pain_soreness' => 'Eye Pain Soreness',
            'chronic_infection_of_eye_or_lid' => 'Chronic Infection Of Eye Or Lid',
            'sties_chalazion' => 'Sties Chalazion',
            'flashes_floaters_of_vision' => 'Flashes Floaters Of Vision',
            'tired_eyes' => 'Tired Eyes',
            'sports' => 'Sports',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'city_city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContactLens()
    {
        return $this->hasOne(ContactLens::className(), ['contact_lens_id' => 'contact_lens_id']);
    }
}
