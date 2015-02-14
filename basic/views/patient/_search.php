<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PatientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PATIENT_ID') ?>

    <?= $form->field($model, 'PATIENT_NAME_LAST') ?>

    <?= $form->field($model, 'PATIENT_NAME_FIRST') ?>

    <?= $form->field($model, 'PATIENT_NAME_MIDDLE') ?>

    <?= $form->field($model, 'PATIENT_BDAY') ?>

    <?php // echo $form->field($model, 'PATIENT_SEX') ?>

    <?php // echo $form->field($model, 'PATIENT_HOME') ?>

    <?php // echo $form->field($model, 'PATIENT_CITY') ?>

    <?php // echo $form->field($model, 'PATIENT_COUNTRY_ID') ?>

    <?php // echo $form->field($model, 'PATIENT_OCCUPATION') ?>

    <?php // echo $form->field($model, 'PATIENT_COMPANY_NAME') ?>

    <?php // echo $form->field($model, 'PATIENT_COMPANY_NUMBER') ?>

    <?php // echo $form->field($model, 'PATIENT_SPORTS') ?>

    <?php // echo $form->field($model, 'PATIENT_EMAIL1') ?>

    <?php // echo $form->field($model, 'PATIENT_EMAIL2') ?>

    <?php // echo $form->field($model, 'PATIENT_FACEBOOK') ?>

    <?php // echo $form->field($model, 'PATIENT_LANDLINE') ?>

    <?php // echo $form->field($model, 'PATIENT_CELL') ?>

    <?php // echo $form->field($model, 'PATIENT_ALLERGIES') ?>

    <?php // echo $form->field($model, 'PATIENT_MEDICATIONS') ?>

    <?php // echo $form->field($model, 'PATIENT_INJURIES_SURGERIES_HOSPITALIZATION') ?>

    <?php // echo $form->field($model, 'PATIENT_HISTORY_PERSONAL_ID') ?>

    <?php // echo $form->field($model, 'PATIENT_HISTORY_FAMILY_ID') ?>

    <?php // echo $form->field($model, 'PATIENT_PERSONAL_EXPERIENCE') ?>

    <?php // echo $form->field($model, 'PATIENT_REFERRED_BY') ?>

    <?php // echo $form->field($model, 'PATIENT_HEALTH_CARD') ?>

    <?php // echo $form->field($model, 'PATIENT_REGISTRATION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
