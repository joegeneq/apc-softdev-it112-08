<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\User;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Record */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $patients=User::find()->where('role=10')->all();
        $listData=ArrayHelper::map($patients, 'id', 'username');
        echo $form->field($model, 'patient_id')->dropDownList(
            $listData,['prompt'=>'-- Patient --']);
    ?>
    <div style="display: none;">
    <?= $form->field($model, 'employee_id')->textInput(array('readonly' => true, 'value' => Yii::$app->user->identity->id)) ?>
    </div>

    <?= $form->field($model, 'patient_signature')->textInput() ?>

    <?= $form->field($model, 'agreed_date')->widget(
                DatePicker::className(), [
                    'inline' => false, 
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd'
                    ]
    ]);?>
    
    <?= $form->field($model, 'employee_signature')->textInput() ?>

    <?= $form->field($model, 'complaints')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
