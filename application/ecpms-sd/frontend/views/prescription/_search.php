<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PrescriptionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prescription-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'record_id') ?>

    <?= $form->field($model, 'd_od_sph') ?>

    <?= $form->field($model, 'd_od_cyl') ?>

    <?= $form->field($model, 'd_od_axis') ?>

    <?= $form->field($model, 'd_od_prism') ?>

    <?php // echo $form->field($model, 'd_od_add') ?>

    <?php // echo $form->field($model, 'd_os_sph') ?>

    <?php // echo $form->field($model, 'd_os_cyl') ?>

    <?php // echo $form->field($model, 'd_os_axis') ?>

    <?php // echo $form->field($model, 'd_os_prism') ?>

    <?php // echo $form->field($model, 'd_os_add') ?>

    <?php // echo $form->field($model, 'n_od_sph') ?>

    <?php // echo $form->field($model, 'n_od_cyl_cyl') ?>

    <?php // echo $form->field($model, 'n_od_axis') ?>

    <?php // echo $form->field($model, 'n_od_prism') ?>

    <?php // echo $form->field($model, 'n_od_add') ?>

    <?php // echo $form->field($model, 'n_os_sph') ?>

    <?php // echo $form->field($model, 'n_os_cyl') ?>

    <?php // echo $form->field($model, 'n_os_axis') ?>

    <?php // echo $form->field($model, 'n_os_prism') ?>

    <?php // echo $form->field($model, 'n_os_add') ?>

    <?php // echo $form->field($model, 'material_id') ?>

    <?php // echo $form->field($model, 'design_id') ?>

    <?php // echo $form->field($model, 'instruction_id') ?>

    <?php // echo $form->field($model, 'od_bc') ?>

    <?php // echo $form->field($model, 'od_diam') ?>

    <?php // echo $form->field($model, 'od_power') ?>

    <?php // echo $form->field($model, 'od_color') ?>

    <?php // echo $form->field($model, 'os_bc') ?>

    <?php // echo $form->field($model, 'os_diam') ?>

    <?php // echo $form->field($model, 'os_power') ?>

    <?php // echo $form->field($model, 'os_color') ?>

    <?php // echo $form->field($model, 'wear_mode_id') ?>

    <?php // echo $form->field($model, 'solutions_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
