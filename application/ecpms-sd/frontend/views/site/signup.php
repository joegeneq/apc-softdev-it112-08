<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'lastname') ?>
                <?= $form->field($model, 'firstname') ?>
                <?= $form->field($model, 'middlename') ?>

    <?= $form->field($model, 'birthday') ?>
    <?= $form->field($model, 'gender') ?>
    <?= $form->field($model, 'city_id') ?>
    <?= $form->field($model, 'home_address') ?>
    <?= $form->field($model, 'company_address') ?>
    <?= $form->field($model, 'company_name') ?>
    <?= $form->field($model, 'cel') ?>
    <?= $form->field($model, 'tel') ?>
    <?= $form->field($model, 'fb') ?>
    <?= $form->field($model, 'allergies') ?>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
