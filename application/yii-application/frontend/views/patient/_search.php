<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'patient_lname') ?>

    <?= $form->field($model, 'patient_fname') ?>

    <?= $form->field($model, 'patient_mname') ?>

    <?= $form->field($model, 'patient_birthday') ?>

    <?php // echo $form->field($model, 'patient_sex') ?>

    <?php // echo $form->field($model, 'patient_facebook') ?>

    <?php // echo $form->field($model, 'patient_landline') ?>

    <?php // echo $form->field($model, 'patient_cel1') ?>

    <?php // echo $form->field($model, 'patient_cel2') ?>

    <?php // echo $form->field($model, 'patient_company') ?>

    <?php // echo $form->field($model, 'patient_add_work') ?>

    <?php // echo $form->field($model, 'patient_contact_work') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'patient_add_street') ?>

    <?php // echo $form->field($model, 'patient_add_town_subd_vill') ?>

    <?php // echo $form->field($model, 'patient_add_number') ?>

    <?php // echo $form->field($model, 'patient_add_city_id') ?>

    <?php // echo $form->field($model, 'patientl_allergies') ?>

    <?php // echo $form->field($model, 'patient_medications') ?>

    <?php // echo $form->field($model, 'patient_treatments') ?>

    <?php // echo $form->field($model, 'patient_pregnant') ?>

    <?php // echo $form->field($model, 'patient_glasses') ?>

    <?php // echo $form->field($model, 'patient_glasses_age') ?>

    <?php // echo $form->field($model, 'patient_contact_lens') ?>

    <?php // echo $form->field($model, 'patient_contact_lens_age') ?>

    <?php // echo $form->field($model, 'contact_lens_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
