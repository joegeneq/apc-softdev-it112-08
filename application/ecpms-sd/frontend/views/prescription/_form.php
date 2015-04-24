<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Prescription */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prescription-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'record_id')->textInput() ?>

    <?= $form->field($model, 'd_od_sph')->textInput() ?>

    <?= $form->field($model, 'd_od_cyl')->textInput() ?>

    <?= $form->field($model, 'd_od_axis')->textInput() ?>

    <?= $form->field($model, 'd_od_prism')->textInput() ?>

    <?= $form->field($model, 'd_od_add')->textInput() ?>

    <?= $form->field($model, 'd_os_sph')->textInput() ?>

    <?= $form->field($model, 'd_os_cyl')->textInput() ?>

    <?= $form->field($model, 'd_os_axis')->textInput() ?>

    <?= $form->field($model, 'd_os_prism')->textInput() ?>

    <?= $form->field($model, 'd_os_add')->textInput() ?>

    <?= $form->field($model, 'n_od_sph')->textInput() ?>

    <?= $form->field($model, 'n_od_cyl_cyl')->textInput() ?>

    <?= $form->field($model, 'n_od_axis')->textInput() ?>

    <?= $form->field($model, 'n_od_prism')->textInput() ?>

    <?= $form->field($model, 'n_od_add')->textInput() ?>

    <?= $form->field($model, 'n_os_sph')->textInput() ?>

    <?= $form->field($model, 'n_os_cyl')->textInput() ?>

    <?= $form->field($model, 'n_os_axis')->textInput() ?>

    <?= $form->field($model, 'n_os_prism')->textInput() ?>

    <?= $form->field($model, 'n_os_add')->textInput() ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'design_id')->textInput() ?>

    <?= $form->field($model, 'instruction_id')->textInput() ?>

    <?= $form->field($model, 'od_bc')->textInput() ?>

    <?= $form->field($model, 'od_diam')->textInput() ?>

    <?= $form->field($model, 'od_power')->textInput() ?>

    <?= $form->field($model, 'od_color')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'os_bc')->textInput() ?>

    <?= $form->field($model, 'os_diam')->textInput() ?>

    <?= $form->field($model, 'os_power')->textInput() ?>

    <?= $form->field($model, 'os_color')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'wear_mode_id')->textInput() ?>

    <?= $form->field($model, 'solutions_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
