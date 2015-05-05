<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "medical_history".
 *
 * @property integer $user_id
 * @property string $allergies
 * @property string $medications
 * @property string $treatments
 * @property string $eyeglasses
 * @property string $eyeglasses_age
 * @property string $contact_lens
 * @property string $contact_lens_age
 * @property integer $contact_lens_id
 * @property integer $comfortability
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
 *
 * @property ContactLens $contactLens
 * @property User $user
 */
class MedicalHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medical_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'eyeglasses', 'contact_lens', 'blindness_grand', 'blindness_parents', 'blindness_siblings', 'blindness_children', 'cataracts_grand', 'cataracts_parents', 'cataracts_siblings', 'cataracts_children', 'crossed_eyes_grand', 'crossed_eyes_parents', 'crossed_eyes_siblings', 'crossed_eyes_children', 'glaucoma_grand', 'glaucoma_parents', 'glaucoma_siblings', 'glaucoma_children', 'macular_degeneration_grand', 'macular_degeneration_parents', 'macular_degeneration_siblings', 'macular_degeneration_children', 'retinal_detachment_grand', 'retinal_detachment_parents', 'retinal_detachment_siblings', 'retinal_detachment_children', 'arthritis_grand', 'arthritis_parents', 'arthritis_siblings', 'arthritis_children', 'cancer_grand', 'cancer_parents', 'cancer_siblings', 'cancer_children', 'diabetes_grand', 'diabetes_parents', 'diabetes_siblings', 'diabetes_children', 'heart_disease_grand', 'heart_disease_parents', 'heart_disease_siblings', 'heart_disease_children', 'high_blood_pressure_grand', 'high_blood_pressure_parents', 'high_blood_pressure_siblings', 'high_blood_pressure_children', 'kidney_disease_grand', 'kidney_disease_parents', 'kidney_disease_siblings', 'kidney_disease_children', 'lupus_grand', 'lupus_parents', 'lupus_siblings', 'lupus_children', 'thyroid_disease_grand', 'thyroid_disease_parents', 'thyroid_disease_siblings', 'thyroid_disease_children'], 'required'],
            [['user_id', 'contact_lens_id', 'comfortability', 'blindness_grand', 'blindness_parents', 'blindness_siblings', 'blindness_children', 'cataracts_grand', 'cataracts_parents', 'cataracts_siblings', 'cataracts_children', 'crossed_eyes_grand', 'crossed_eyes_parents', 'crossed_eyes_siblings', 'crossed_eyes_children', 'glaucoma_grand', 'glaucoma_parents', 'glaucoma_siblings', 'glaucoma_children', 'macular_degeneration_grand', 'macular_degeneration_parents', 'macular_degeneration_siblings', 'macular_degeneration_children', 'retinal_detachment_grand', 'retinal_detachment_parents', 'retinal_detachment_siblings', 'retinal_detachment_children', 'arthritis_grand', 'arthritis_parents', 'arthritis_siblings', 'arthritis_children', 'cancer_grand', 'cancer_parents', 'cancer_siblings', 'cancer_children', 'diabetes_grand', 'diabetes_parents', 'diabetes_siblings', 'diabetes_children', 'heart_disease_grand', 'heart_disease_parents', 'heart_disease_siblings', 'heart_disease_children', 'high_blood_pressure_grand', 'high_blood_pressure_parents', 'high_blood_pressure_siblings', 'high_blood_pressure_children', 'kidney_disease_grand', 'kidney_disease_parents', 'kidney_disease_siblings', 'kidney_disease_children', 'lupus_grand', 'lupus_parents', 'lupus_siblings', 'lupus_children', 'thyroid_disease_grand', 'thyroid_disease_parents', 'thyroid_disease_siblings', 'thyroid_disease_children', 'headaches', 'migrains', 'seizures', 'loss_of_vision', 'blurred_vision', 'distorted_vision', 'loss_of_side_vision', 'double_vision', 'dryness_vision', 'mucous_discharge', 'redness', 'sandy_gritty_feeling', 'itching', 'burning', 'foreign_body_sensation', 'excess_tearing_watering', 'glare_light_sensitivity', 'eye_pain_soreness', 'chronic_infection_of_eye_or_lid', 'sties_chalazion', 'flashes_floaters_of_vision', 'tired_eyes'], 'integer'],
            [['allergies', 'medications', 'treatments', 'others'], 'string'],
            [['eyeglasses', 'contact_lens'], 'string', 'max' => 1],
            [['eyeglasses_age', 'contact_lens_age'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'allergies' => 'Allergies',
            'medications' => 'Medications',
            'treatments' => 'Treatments',
            'eyeglasses' => 'Eyeglasses',
            'eyeglasses_age' => 'Glasses age (specify if in months, years, etc)',
            'contact_lens' => 'Contact Lens',
            'contact_lens_age' => 'Contact Lens age (specify if in months, years, etc)',
            'contact_lens_id' => 'Contact Lens type',
            'comfortability' => 'Is it comfortable?',
            'blindness_grand' => '',
            'blindness_parents' => '',
            'blindness_siblings' => '',
            'blindness_children' => '',
            'cataracts_grand' => '',
            'cataracts_parents' => '',
            'cataracts_siblings' => '',
            'cataracts_children' => '',
            'crossed_eyes_grand' => '',
            'crossed_eyes_parents' => '',
            'crossed_eyes_siblings' => '',
            'crossed_eyes_children' => '',
            'glaucoma_grand' => '',
            'glaucoma_parents' => '',
            'glaucoma_siblings' => '',
            'glaucoma_children' => '',
            'macular_degeneration_grand' => '',
            'macular_degeneration_parents' => '',
            'macular_degeneration_siblings' => '',
            'macular_degeneration_children' => '',
            'retinal_detachment_grand' => '',
            'retinal_detachment_parents' => '',
            'retinal_detachment_siblings' => '',
            'retinal_detachment_children' => '',
            'arthritis_grand' => '',
            'arthritis_parents' => '',
            'arthritis_siblings' => '',
            'arthritis_children' => '',
            'cancer_grand' => '',
            'cancer_parents' => '',
            'cancer_siblings' => '',
            'cancer_children' => '',
            'diabetes_grand' => '',
            'diabetes_parents' => '',
            'diabetes_siblings' => '',
            'diabetes_children' => '',
            'heart_disease_grand' => '',
            'heart_disease_parents' => '',
            'heart_disease_siblings' => '',
            'heart_disease_children' => '',
            'high_blood_pressure_grand' => '',
            'high_blood_pressure_parents' => '',
            'high_blood_pressure_siblings' => '',
            'high_blood_pressure_children' => '',
            'kidney_disease_grand' => '',
            'kidney_disease_parents' => '',
            'kidney_disease_siblings' => '',
            'kidney_disease_children' => '',
            'lupus_grand' => '',
            'lupus_parents' => '',
            'lupus_siblings' => '',
            'lupus_children' => '',
            'thyroid_disease_grand' => '',
            'thyroid_disease_parents' => '',
            'thyroid_disease_siblings' => '',
            'thyroid_disease_children' => '',

            
            'others' => 'Others',
            'headaches' => '',
            'migrains' => '',
            'seizures' => '',
            'loss_of_vision' => '',
            'blurred_vision' => '',
            'distorted_vision' => '',
            'loss_of_side_vision' => '',
            'double_vision' => '',
            'dryness_vision' => '',
            'mucous_discharge' => '',
            'redness' => '',
            'sandy_gritty_feeling' => '',
            'itching' => '',
            'burning' => '',
            'foreign_body_sensation' => '',
            'excess_tearing_watering' => '',
            'glare_light_sensitivity' => '',
            'eye_pain_soreness' => '',
            'chronic_infection_of_eye_or_lid' => '',
            'sties_chalazion' => '',
            'flashes_floaters_of_vision' => '',
            'tired_eyes' => '',
        ];
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
