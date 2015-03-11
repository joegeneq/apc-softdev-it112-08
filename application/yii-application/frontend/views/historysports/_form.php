<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Patient;
use backend\models\Sports;
//use frontend\models\Sports;

/* @var $this yii\web\View */
/* @var $model frontend\models\HistorySports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="history-sports-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'sports_id')->textInput() ?>-->
    <?php
        $sports=Sports::find()->all();
        $listData=ArrayHelper::map($sports, 'sports_id', 'sports_name');
        echo $form->field($model, 'sports_id')->dropDownList(
            $listData,['prompt'=>'Select Sports']);
    ?>

    <!--<?= $form->field($model, 'patient_id')->textInput() ?>-->
	<?php
        $patients=Patient::find()->all();
        $listData=ArrayHelper::map($patients, 'patient_id', 'patient_lname');
        echo $form->field($model, 'patient_id')->dropDownList(
            $listData,['prompt'=>'Select Patient']);
    ?>

    <?= $form->field($model, 'history_value')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
