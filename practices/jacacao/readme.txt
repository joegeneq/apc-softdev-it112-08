queries
->  yii2 drop down list
->  yii2 user login
->  yii2 create multiple tables with next button
->  yii2 multiple insert table
->  yii2 parent-child model create with next button
->  yii2 multiple forms connected by next
http://www.yiiframework.com/wiki/19/how-to-use-a-single-form-to-collect-data-for-two-or-more-models/

yii2 parent forms

http://www.bsourcecode.com/yiiframework2/yii2-0-activeform-input-fields/

->  yii2 button link to another form


this:
http://www.naeemrana.com/technology/how-to-install-composer-dependency-manager-for-php-in-windows/

yii2 widget jquery step navigation save at the end






https://code.google.com/p/apc-softdev-it112-08/

Pt6vg2KU6dZ3

province _form
<?= $form->field($model, 'region_id')->textInput() ?>
------
    <?php
    $regions=Region::find()->all();
    $listData=ArrayHelper::map($regions,'region_id','region_code');
    echo $form->field($model, 'region')->dropDownList(
    	$listData,['prompt'=>'Select Region']);
    ?>

province view
            'region_id',
------



user.php
<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
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
}



======================composer

},
    "scripts": {
        "post-root-package-install": [
            "SymfonyStandard\\Composer::hookRootPackageInstall"
        ],
        "post-install-cmd": [
            "Incenteev\\ParameterHandler\\ScriptHandler::buildParameters",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::buildBootstrap",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::clearCache",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installAssets",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installRequirementsFile",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::removeSymfonyStandardFiles"
        ],
        "post-update-cmd": [
            "Incenteev\\ParameterHandler\\ScriptHandler::buildParameters",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::buildBootstrap",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::clearCache",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installAssets",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installRequirementsFile",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::removeSymfonyStandardFiles"
        ]
    },














       <?php 
// with an ActiveForm instance 
?>
<?= $form->field($model, 'date')->widget(
    DatePicker::className(), [
        // inline too, not bad
        'inline' => true, 
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>


<?= $form->field($model, 'from_date')->widget(\yii\widgets\CJuiDateTimePicker::classname(), [
    //'language' => 'ru',
    //'dateFormat' => 'yyyy-MM-dd',
]) ?>


dinownload ko ung xampp, composer-retup
tapos run ung composer global require "fxp/composer-asset-plugin:1.0.0-beta4"
tapos ung php composer.phar require "2amigos/yii2-date-picker-widget" "*"

take notes: https://getcomposer.org/doc/00-intro.md

    <?= $form->field($model, 'date')->textInput() ?>

install ko dropdown-x
php composer.phar require kartik-v/yii2-dropdown-x "*" - http://demos.krajee.com/dropdown-x

install ko 
php composer.phar require kartik-v/yii2-checkbox-x "*"
http://demos.krajee.com/checkbox-x