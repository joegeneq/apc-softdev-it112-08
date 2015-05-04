<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Eoms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eoms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eoms_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'eoms_description')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
