<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WearMode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wear-mode-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wear_mode_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'wear_mode_description')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
