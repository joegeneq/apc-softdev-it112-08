<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\dosamigos;
//use yii\jui\datepicker;
//use dosamigos\datepicker\DateRangePicker;
//use dosamigos\datepicker\DateRangePicker;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Days */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="days-form">

    <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'date')->widget(
    DatePicker::className(), [
        // inline too, not bad
        'inline' => false, 
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
