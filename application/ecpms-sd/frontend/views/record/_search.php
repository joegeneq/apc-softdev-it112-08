<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="record-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'record_id') ?>

    <?= $form->field($model, 'patient_signature') ?>

    <?= $form->field($model, 'agreed_date') ?>

    <?= $form->field($model, 'employee_signature') ?>

    <?php // echo $form->field($model, 'complaints') ?>

    <?php // echo $form->field($model, 'professional_fee') ?>

    <?php // echo $form->field($model, 'frames_price') ?>

    <?php // echo $form->field($model, 'lenses_price') ?>

    <?php // echo $form->field($model, 'contacts_price') ?>

    <?php // echo $form->field($model, 'solutions_price') ?>

    <?php // echo $form->field($model, 'ancilliary_procedures') ?>

    <?php // echo $form->field($model, 'others') ?>

    <?php // echo $form->field($model, 'insurance_id') ?>

    <?php // echo $form->field($model, 'senior_citizen') ?>

    <?php // echo $form->field($model, 'person_w_disability') ?>

    <?php // echo $form->field($model, 'deposit') ?>

    <?php // echo $form->field($model, 'balance') ?>

    <?php // echo $form->field($model, 'diagnostic_result') ?>

    <?php // echo $form->field($model, 'management') ?>

    <?php // echo $form->field($model, 'plan_TCB') ?>

    <?php // echo $form->field($model, 'plan_next_visit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
