<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AccountingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accounting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'record_id') ?>

    <?= $form->field($model, 'professional_fee') ?>

    <?= $form->field($model, 'frames_price') ?>

    <?= $form->field($model, 'lenses_price') ?>

    <?= $form->field($model, 'contacts_price') ?>

    <?php // echo $form->field($model, 'solutions_price') ?>

    <?php // echo $form->field($model, 'ancilliary_procedures') ?>

    <?php // echo $form->field($model, 'others') ?>

    <?php // echo $form->field($model, 'insurance_id') ?>

    <?php // echo $form->field($model, 'senior_citizen') ?>

    <?php // echo $form->field($model, 'person_w_disability') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'deposit') ?>

    <?php // echo $form->field($model, 'balance') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
