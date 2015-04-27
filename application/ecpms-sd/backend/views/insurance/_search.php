<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\InsuranceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="insurance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'insurance_id') ?>

    <?= $form->field($model, 'insurance_name') ?>

    <?= $form->field($model, 'insurance_description') ?>

    <?= $form->field($model, 'insurance_percentage') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
