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
    public $eyeglasses;
    public $contact_lens;
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

            //[['firstname', 'lastname'], 'required'],
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
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
