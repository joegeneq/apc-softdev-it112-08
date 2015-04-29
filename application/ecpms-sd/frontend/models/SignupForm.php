<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $role;//
    public $status;
    public $created_at;
    public $updated_at;//
    public $password;
    public $lastname;
    public $firstname;
    public $middlename;
    public $birthday;
    public $gender;
    public $city_id;
    public $home_address;
    public $company_address;
    public $company_name;
    public $cel;
    public $tel;
    public $fb;
    public $allergies;
    public $medications;
    public $treatments;
    public $eyeglasses;
    public $eyeglasses_age;//
    public $contact_lens;
    public $contact_lens_age;//
    public $contact_lens_id;//
    public $blindness_grand;
    public $blindness_parents;
    public $blindness_siblings;
    public $blindness_children;
    public $cataracts_grand;
    public $cataracts_parents;
    public $cataracts_siblings;
    public $cataracts_children;
    public $crossed_eyes_grand;
    public $crossed_eyes_parents;
    public $crossed_eyes_siblings;
    public $crossed_eyes_children;
    public $glaucoma_grand;
    public $glaucoma_parents;
    public $glaucoma_siblings;
    public $glaucoma_children;
    public $macular_degeneration_grand;
    public $macular_degeneration_parents;
    public $macular_degeneration_siblings;
    public $macular_degeneration_children;
    public $retinal_detachment_grand;
    public $retinal_detachment_parents;
    public $retinal_detachment_siblings;
    public $retinal_detachment_children;
    public $arthritis_grand;
    public $arthritis_parents;
    public $arthritis_siblings;
    public $arthritis_children;
    public $cancer_grand;
    public $cancer_parents;
    public $cancer_siblings;
    public $cancer_children;
    public $diabetes_grand;
    public $diabetes_parents;
    public $diabetes_siblings;
    public $diabetes_children;
    public $heart_disease_grand;
    public $heart_disease_parents;
    public $heart_disease_siblings;
    public $heart_disease_children;
    public $high_blood_pressure_grand;
    public $high_blood_pressure_parents;
    public $high_blood_pressure_siblings;
    public $high_blood_pressure_children;
    public $kidney_disease_grand;
    public $kidney_disease_parents;
    public $kidney_disease_siblings;
    public $kidney_disease_children;
    public $lupus_grand;
    public $lupus_parents;
    public $lupus_siblings;
    public $lupus_children;
    public $thyroid_disease_grand;
    public $thyroid_disease_parents;
    public $thyroid_disease_siblings;
    public $thyroid_disease_children;
    public $others;//
    public $headaches;
    public $migrains;
    public $seizures;
    public $loss_of_vision;
    public $blurred_vision;
    public $distorted_vision;
    public $loss_of_side_vision;
    public $double_vision;
    public $dryness_vision;
    public $mucous_discharge;
    public $redness;
    public $sandy_gritty_feeling;
    public $itching;
    public $burning;
    public $foreign_body_sensation;
    public $excess_tearing_watering;
    public $glare_light_sensitivity;
    public $eye_pain_soreness;
    public $chronic_infection_of_eye_or_lid;
    public $sties_chalazion;
    public $flashes_floaters_of_vision;
    public $tired_eyes;
    public $sports;//
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            [['firstname', 'lastname', 'middlename'], 'string', 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            [['firstname', 'lastname', 'birthday', 'gender', 'city_id', 'home_address', 'eyeglasses', 'contact_lens', 'blindness_grand', 'blindness_parents', 'blindness_siblings', 'blindness_children', 'cataracts_grand', 'cataracts_parents', 'cataracts_siblings', 'cataracts_children', 'crossed_eyes_grand', 'crossed_eyes_parents', 'crossed_eyes_siblings', 'crossed_eyes_children', 'glaucoma_grand', 'glaucoma_parents', 'glaucoma_siblings', 'glaucoma_children', 'macular_degeneration_grand', 'macular_degeneration_parents', 'macular_degeneration_siblings', 'macular_degeneration_children', 'retinal_detachment_grand', 'retinal_detachment_parents', 'retinal_detachment_siblings', 'retinal_detachment_children', 'arthritis_grand', 'arthritis_parents', 'arthritis_siblings', 'arthritis_children', 'cancer_grand', 'cancer_parents', 'cancer_siblings', 'cancer_children', 'diabetes_grand', 'diabetes_parents', 'diabetes_siblings', 'diabetes_children', 'heart_disease_grand', 'heart_disease_parents', 'heart_disease_siblings', 'heart_disease_children', 'high_blood_pressure_grand', 'high_blood_pressure_parents', 'high_blood_pressure_siblings', 'high_blood_pressure_children', 'kidney_disease_grand', 'kidney_disease_parents', 'kidney_disease_siblings', 'kidney_disease_children', 'lupus_grand', 'lupus_parents', 'lupus_siblings', 'lupus_children', 'thyroid_disease_grand', 'thyroid_disease_parents', 'thyroid_disease_siblings', 'thyroid_disease_children', 'headaches', 'migrains', 'seizures', 'loss_of_vision', 'blurred_vision', 'distorted_vision', 'loss_of_side_vision', 'double_vision', 'dryness_vision', 'mucous_discharge', 'redness', 'sandy_gritty_feeling', 'itching', 'burning', 'foreign_body_sensation', 'excess_tearing_watering', 'glare_light_sensitivity', 'eye_pain_soreness', 'chronic_infection_of_eye_or_lid', 'sties_chalazion', 'flashes_floaters_of_vision', 'tired_eyes'], 'required'],
            [['city_id', 'role', 'status', 'created_at', 'updated_at', 'contact_lens_id', 'blindness_grand', 'blindness_parents', 'blindness_siblings', 'blindness_children', 'cataracts_grand', 'cataracts_parents', 'cataracts_siblings', 'cataracts_children', 'crossed_eyes_grand', 'crossed_eyes_parents', 'crossed_eyes_siblings', 'crossed_eyes_children', 'glaucoma_grand', 'glaucoma_parents', 'glaucoma_siblings', 'glaucoma_children', 'macular_degeneration_grand', 'macular_degeneration_parents', 'macular_degeneration_siblings', 'macular_degeneration_children', 'retinal_detachment_grand', 'retinal_detachment_parents', 'retinal_detachment_siblings', 'retinal_detachment_children', 'arthritis_grand', 'arthritis_parents', 'arthritis_siblings', 'arthritis_children', 'cancer_grand', 'cancer_parents', 'cancer_siblings', 'cancer_children', 'diabetes_grand', 'diabetes_parents', 'diabetes_siblings', 'diabetes_children', 'heart_disease_grand', 'heart_disease_parents', 'heart_disease_siblings', 'heart_disease_children', 'high_blood_pressure_grand', 'high_blood_pressure_parents', 'high_blood_pressure_siblings', 'high_blood_pressure_children', 'kidney_disease_grand', 'kidney_disease_parents', 'kidney_disease_siblings', 'kidney_disease_children', 'lupus_grand', 'lupus_parents', 'lupus_siblings', 'lupus_children', 'thyroid_disease_grand', 'thyroid_disease_parents', 'thyroid_disease_siblings', 'thyroid_disease_children', 'headaches', 'migrains', 'seizures', 'loss_of_vision', 'blurred_vision', 'distorted_vision', 'loss_of_side_vision', 'double_vision', 'dryness_vision', 'mucous_discharge', 'redness', 'sandy_gritty_feeling', 'itching', 'burning', 'foreign_body_sensation', 'excess_tearing_watering', 'glare_light_sensitivity', 'eye_pain_soreness', 'chronic_infection_of_eye_or_lid', 'sties_chalazion', 'flashes_floaters_of_vision', 'tired_eyes'], 'integer'],
            [['birthday'], 'safe'],
            
            [['allergies', 'medications', 'treatments', 'others', 'sports'],'string'],
            [['firstname', 'lastname', 'middlename', 'home_address', 'company_address'], 'string', 'max' => 255],
            [['gender', 'eyeglasses', 'contact_lens'], 'string', 'max' => 1],
            [['company_name', 'cel', 'tel', 'eyeglasses_age', 'contact_lens_age'], 'string', 'max' => 45],
            [['fb'], 'string', 'max' => 75],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->role = $this->role;
            $user->status = $this->status;
            $user->created_at = $this->created_at;
            $user->updated_at = $this->updated_at;
            $user->setPassword($this->password);
            $user->firstname = $this->firstname;
            $user->lastname = $this->lastname;
            $user->middlename = $this->middlename;
            $user->birthday = $this->birthday;
            $user->gender = $this->gender;
            $user->city_id = $this->city_id;
            $user->home_address = $this->home_address;
            $user->company_address = $this->company_address;
            $user->company_name = $this->company_name;
            $user->cel = $this->cel;
            $user->tel = $this->tel;
            $user->fb = $this->fb;
            $user->allergies = $this->allergies;
            $user->medications = $this->medications;
            $user->treatments = $this->treatments;

            $user->eyeglasses = $this->eyeglasses;
            $user->eyeglasses_age = $this->eyeglasses_age;
            $user->contact_lens = $this->contact_lens;
            $user->contact_lens_age = $this->contact_lens_age;
            $user->contact_lens_id = $this->contact_lens_id;
            $user->blindness_grand = $this->blindness_grand;
            $user->blindness_parents = $this->blindness_parents;
            $user->blindness_siblings = $this->blindness_siblings;
            $user->blindness_children = $this->blindness_children;
            $user->cataracts_grand = $this->cataracts_grand;
            $user->cataracts_parents = $this->cataracts_parents;
            $user->cataracts_siblings = $this->cataracts_siblings;
            $user->cataracts_children = $this->cataracts_children;
            $user->crossed_eyes_grand = $this->crossed_eyes_grand;
            $user->crossed_eyes_parents = $this->crossed_eyes_parents;
            $user->crossed_eyes_siblings = $this->crossed_eyes_siblings;
            $user->crossed_eyes_children = $this->crossed_eyes_children;
            $user->glaucoma_grand = $this->glaucoma_grand;
            $user->glaucoma_parents = $this->glaucoma_parents;
            $user->glaucoma_siblings = $this->glaucoma_siblings;
            $user->glaucoma_children = $this->glaucoma_children;
            $user->macular_degeneration_grand = $this->macular_degeneration_grand;
            $user->macular_degeneration_parents = $this->macular_degeneration_parents;
            $user->macular_degeneration_siblings = $this->macular_degeneration_siblings;
            $user->macular_degeneration_children = $this->macular_degeneration_children;
            $user->retinal_detachment_grand = $this->retinal_detachment_grand;
            $user->retinal_detachment_parents = $this->retinal_detachment_parents;
            $user->retinal_detachment_siblings = $this->retinal_detachment_siblings;
            $user->retinal_detachment_children = $this->retinal_detachment_children;
            $user->arthritis_grand = $this->arthritis_grand;
            $user->arthritis_parents = $this->arthritis_parents;
            $user->arthritis_siblings = $this->arthritis_siblings;
            $user->arthritis_children = $this->arthritis_children;
            $user->cancer_grand = $this->cancer_grand;
            $user->cancer_parents = $this->cancer_parents;
            $user->cancer_siblings = $this->cancer_siblings;
            $user->cancer_children = $this->cancer_children;
            $user->diabetes_grand = $this->diabetes_grand;
            $user->diabetes_parents = $this->diabetes_parents;
            $user->diabetes_siblings = $this->diabetes_siblings;
            $user->diabetes_children = $this->diabetes_children;
            $user->heart_disease_grand = $this->heart_disease_grand;
            $user->heart_disease_parents = $this->heart_disease_parents;
            $user->heart_disease_siblings = $this->heart_disease_siblings;
            $user->heart_disease_children = $this->heart_disease_children;
            $user->high_blood_pressure_grand = $this->high_blood_pressure_grand;
            $user->high_blood_pressure_parents = $this->high_blood_pressure_parents;
            $user->high_blood_pressure_siblings = $this->high_blood_pressure_siblings;
            $user->high_blood_pressure_children = $this->high_blood_pressure_children;
            $user->kidney_disease_grand = $this->kidney_disease_grand;
            $user->kidney_disease_parents = $this->kidney_disease_parents;
            $user->kidney_disease_siblings = $this->kidney_disease_siblings;
            $user->kidney_disease_children = $this->kidney_disease_children;
            $user->lupus_grand = $this->lupus_grand;
            $user->lupus_parents = $this->lupus_parents;
            $user->lupus_siblings = $this->lupus_siblings;
            $user->lupus_children = $this->lupus_children;
            $user->thyroid_disease_grand = $this->thyroid_disease_grand;
            $user->thyroid_disease_parents = $this->thyroid_disease_parents;
            $user->thyroid_disease_siblings = $this->thyroid_disease_siblings;
            $user->thyroid_disease_children = $this->thyroid_disease_children;
            $user->others = $this->others;
            $user->headaches = $this->headaches;
            $user->migrains = $this->migrains;
            $user->seizures = $this->seizures;
            $user->loss_of_vision = $this->loss_of_vision;
            $user->blurred_vision = $this->blurred_vision;
            $user->distorted_vision = $this->distorted_vision;
            $user->loss_of_side_vision = $this->loss_of_side_vision;
            $user->double_vision = $this->double_vision;
            $user->dryness_vision = $this->dryness_vision;
            $user->mucous_discharge = $this->mucous_discharge;
            $user->redness = $this->redness;
            $user->sandy_gritty_feeling = $this->sandy_gritty_feeling;
            $user->itching = $this->itching;
            $user->burning = $this->burning;
            $user->foreign_body_sensation = $this->foreign_body_sensation;
            $user->excess_tearing_watering = $this->excess_tearing_watering;
            $user->glare_light_sensitivity = $this->glare_light_sensitivity;
            $user->eye_pain_soreness = $this->eye_pain_soreness;
            $user->chronic_infection_of_eye_or_lid = $this->chronic_infection_of_eye_or_lid;
            $user->sties_chalazion = $this->sties_chalazion;
            $user->flashes_floaters_of_vision = $this->flashes_floaters_of_vision;
            $user->tired_eyes = $this->tired_eyes;
            $user->sports = $this->sports;
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
