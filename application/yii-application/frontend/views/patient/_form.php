<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use common\models\User;
use backend\models\City;
use backend\models\ContactLens;
/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_mname')->textInput(['maxlength' => 45]) ?>

    <!--<?= $form->field($model, 'patient_birthday')->textInput() ?>-->
    <?= $form->field($model, 'patient_birthday')->widget(
    DatePicker::className(), [
        // inline too, not bad
        'inline' => false, 
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>

    <!--<?= $form->field($model, 'patient_sex')->textInput(['maxlength' => 45]) ?>-->
    <?= $form->field($model, 'patient_sex')->radioList(array('Male'=>'Male','Female'=>'Female')); ?>

    <?= $form->field($model, 'patient_facebook')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_landline')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_cel1')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_cel2')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_company')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_add_work')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_contact_work')->textInput(['maxlength' => 45]) ?>

    <!--<?= $form->field($model, 'user_id')->textInput() ?>-->
    <?php
        $users=User::find()->all();
        $listData=ArrayHelper::map($users, 'id', 'username');
        echo $form->field($model, 'user_id')->dropDownList(
            $listData,['prompt'=>'Select User']);
    ?>

    <?= $form->field($model, 'patient_add_street')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_add_town_subd_vill')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'patient_add_number')->textInput(['maxlength' => 45]) ?>

    <!--<?= $form->field($model, 'patient_add_city_id')->textInput() ?>-->
    <?php
        $cities=City::find()->all();
        $listData=ArrayHelper::map($cities, 'city_id', 'city_name');
        echo $form->field($model, 'patient_add_city_id')->dropDownList(
            $listData,['prompt'=>'Select City']);
    ?>

    <?= $form->field($model, 'patientl_allergies')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'patient_medications')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'patient_treatments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'patient_pregnant')->textInput(['maxlength' => 1]) ?>

    <!--<?= $form->field($model, 'patient_glasses')->textInput(['maxlength' => 1]) ?>-->
    <?= $form->field($model, 'patient_glasses')->radioList(array('Y'=>'Yes','N'=>'No')); ?>

    <?= $form->field($model, 'patient_glasses_age')->textInput() ?>

    <!--<?= $form->field($model, 'patient_contact_lens')->textInput(['maxlength' => 1]) ?>-->
    <?= $form->field($model, 'patient_contact_lens')->radioList(array('Y'=>'Yes','N'=>'No')); ?>

    <?= $form->field($model, 'patient_contact_lens_age')->textInput() ?>

    <!--<?= $form->field($model, 'contact_lens_id')->textInput() ?>-->
    <?php
        $cities=ContactLens::find()->all();
        $listData=ArrayHelper::map($cities, 'contact_lens_id', 'contact_lens_value');
        echo $form->field($model, 'contact_lens_id')->dropDownList(
            $listData,['prompt'=>'Select Contact types']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
