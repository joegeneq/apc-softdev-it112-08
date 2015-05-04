<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Solutions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solutions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'solutions_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'solutions_description')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
