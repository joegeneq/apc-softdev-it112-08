<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\myaddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="myaddress-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 30])->label('First Name') ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => 30])->label('Middle Name') ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 30])->label('Last Name') ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => 1])->label('Male/Female') ?>

    <?= $form->field($model, 'Created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
