<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "patient_profile".
 *
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $birthday
 * @property string $gender
 * @property integer $city_id
 * @property string $home_address
 * @property string $company_address
 * @property string $company_name
 * @property string $cel
 * @property string $tel
 * @property string $fb
 * @property string $sports
 *
 * @property City $city
 * @property User $user
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'firstname', 'lastname', 'birthday', 'gender', 'home_address'], 'required'],
            [['user_id', 'city_id'], 'integer'],
            [['birthday'], 'safe'],
            [['sports'], 'string'],
            [['firstname', 'lastname', 'middlename', 'home_address', 'company_address'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 1],
            [['company_name', 'cel', 'tel'], 'string', 'max' => 45],
            [['fb'], 'string', 'max' => 75]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'middlename' => 'Middlename',
            'birthday' => 'Birthday',
            'gender' => 'Gender',
            'city_id' => 'City ID',
            'home_address' => 'Home Address',
            'company_address' => 'Company Address',
            'company_name' => 'Company Name',
            'cel' => 'Cel',
            'tel' => 'Tel',
            'fb' => 'Fb',
            'sports' => 'Sports',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
