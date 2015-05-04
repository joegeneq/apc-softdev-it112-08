<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Accounting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accounting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'record_id')->textInput() ?>

    <?= $form->field($model, 'professional_fee')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'frames_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'lenses_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'contacts_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'solutions_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'ancilliary_procedures')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'others')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'insurance_id')->textInput() ?>

    <?= $form->field($model, 'senior_citizen')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'person_w_disability')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'deposit')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'balance')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
