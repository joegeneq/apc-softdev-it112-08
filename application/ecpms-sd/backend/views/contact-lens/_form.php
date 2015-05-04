<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ContactLens */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-lens-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contact_lens_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'contact_lens_description')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
