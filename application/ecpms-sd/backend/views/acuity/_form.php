<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Acuity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acuity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'acuity_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'acuity_description')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
