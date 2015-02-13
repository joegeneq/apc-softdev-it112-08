<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */
/* @var $form yii\widgets\ActiveForm */
/*     <?= $form->field($model, 'PATIENT_SEX')->textInput(['maxlength' => 1]) ?> */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PATIENT_NAME_LAST')->textInput(['maxlength' => 52]) ?>

    <?= $form->field($model, 'PATIENT_NAME_FIRST')->textInput(['maxlength' => 102]) ?>

    <?= $form->field($model, 'PATIENT_NAME_MIDDLE')->textInput(['maxlength' => 52]) ?>

    <?= $form->field($model, 'PATIENT_BDAY')->textInput() ?>



    <?= $form->field($model, 'PATIENT_SEX')->radioList(array('M'=>'Male','F'=>'Female'))->label('Sex'); ?>



    <?= $form->field($model, 'PATIENT_HOME')->textInput(['maxlength' => 102]) ?>

    <?= $form->field($model, 'PATIENT_CITY')->textInput() ?>

    <?= $form->field($model, 'PATIENT_COUNTRY_ID')->textInput() ?>

    <?= $form->field($model, 'PATIENT_OCCUPATION')->textInput(['maxlength' => 52]) ?>

    <?= $form->field($model, 'PATIENT_COMPANY_NAME')->textInput(['maxlength' => 52]) ?>

    <?= $form->field($model, 'PATIENT_COMPANY_NUMBER')->textInput() ?>

    <?= $form->field($model, 'PATIENT_SPORTS')->textInput() ?>

    <?= $form->field($model, 'PATIENT_EMAIL1')->textInput(['maxlength' => 52]) ?>

    <?= $form->field($model, 'PATIENT_EMAIL2')->textInput(['maxlength' => 52]) ?>

    <?= $form->field($model, 'PATIENT_FACEBOOK')->textInput(['maxlength' => 52]) ?>

    <?= $form->field($model, 'PATIENT_LANDLINE')->textInput() ?>

    <?= $form->field($model, 'PATIENT_CELL')->textInput() ?>

    <?= $form->field($model, 'PATIENT_ALLERGIES')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'PATIENT_MEDICATIONS')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'PATIENT_INJURIES_SURGERIES_HOSPITALIZATION')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'PATIENT_HISTORY_PERSONAL_ID')->textInput() ?>

    <?= $form->field($model, 'PATIENT_HISTORY_FAMILY_ID')->textInput() ?>

    <?= $form->field($model, 'PATIENT_PERSONAL_EXPERIENCE')->textInput() ?>

    <?= $form->field($model, 'PATIENT_REFERRED_BY')->textInput(['maxlength' => 102]) ?>

    <?= $form->field($model, 'PATIENT_HEALTH_CARD')->textInput() ?>

    <?= $form->field($model, 'PATIENT_REGISTRATION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
