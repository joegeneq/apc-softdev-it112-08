<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Record */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'patient_signature')->textInput() ?>

    <?= $form->field($model, 'agreed_date')->textInput() ?>

    <?= $form->field($model, 'employee_signature')->textInput() ?>

    <?= $form->field($model, 'complaints')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'professional_fee')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'frames_price')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'lenses_price')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'contacts_price')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'solutions_price')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'ancilliary_procedures')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'others')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'insurance_id')->textInput() ?>

    <?= $form->field($model, 'senior_citizen')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'person_w_disability')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'deposit')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'balance')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'diagnostic_result')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'management')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plan_TCB')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plan_next_visit')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
