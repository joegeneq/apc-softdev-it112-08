<?php

namespace app\models;
use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public static function tableName(){
        return'tbl_user';
    }
    public function rules(){
        return [
        [['username', 'password'], 'required'],
        [['username', 'password'], 'string', 'max' => 45]];
    }
    public function attributeLabels(){
        return [
        'userid' => 'Userid',
        'username' => 'Userame',
        'password' => 'Password'];
    }
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
    public static function findByPasswordResetToken($token)
    {
        $expire= \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if($timestamp + $expire < time())
        {
            return null;
        }
        return stastic::findOne(['password_reset_token' => $token
            ]);
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
    public function setPassword($password){
        $this->password_hash = Security::generatePasswordHash($password);
    }
    public function generateAuthKey(){
        $this->auth_key = Security::generateRandomKey();
    }
    public function generatePasswordResetToken(){
        $this->password_reset_token = Security::generateRandomKey() . '_' . time(); 
    }
    public function removePasswordResetToken(){
        $this->password_reset_token = null;
    }
}
