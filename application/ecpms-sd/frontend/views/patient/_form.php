<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use backend\models\City;
use backend\models\ContactLens;
/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>
    <div style="display: none;">
    <?= $form->field($model, 'user_id')->textInput(array('readonly' => true, 'value' => Yii::$app->user->identity->id)) ?>
    </div>
    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'birthday')->widget(
    DatePicker::className(), [
        'inline' => false, 
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'gender')->radioList(array('M'=>'Male','F'=>'Female')); ?>

    <?php
        $cities=City::find()->all();
        $listData=ArrayHelper::map($cities, 'city_id', 'city_name');
        echo $form->field($model, 'city_id')->dropDownList(
            $listData,['prompt'=>'-- City --']);
    ?>

    <?= $form->field($model, 'home_address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'company_address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'cel')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'fb')->textInput(['maxlength' => 75]) ?>

    <?= $form->field($model, 'sports')->textarea(['rows' => 6]) ?>


<!--  MEDICAL HISTORY   -->
<div style="display: none;">
    <?= $form->field($medical, 'user_id')->textInput(array('readonly' => true, 'value' => Yii::$app->user->identity->id)) ?>
</div>
    <?= $form->field($medical, 'allergies')->textarea(['rows' => 6]) ?>

    <?= $form->field($medical, 'medications')->textarea(['rows' => 6]) ?>

    <?= $form->field($medical, 'treatments')->textarea(['rows' => 6]) ?>

    <?= $form->field($medical, 'eyeglasses')->radioList(array('Y'=>'Yes','N'=>'No')); ?>

    <?= $form->field($medical, 'eyeglasses_age')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($medical, 'contact_lens')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($medical, 'contact_lens_age')->textInput(['maxlength' => 45]) ?>

    <?php
        $contacts=ContactLens::find()->all();
        $listData=ArrayHelper::map($contacts, 'contact_lens_id', 'contact_lens_name');
        echo $form->field($medical, 'contact_lens_id')->dropDownList(
            $listData,['prompt'=>'-- Contact types --']);
    ?>

    <?= $form->field($medical, 'comfortability')->textInput() ?>

    <?= $form->field($medical, 'blindness_grand')->checKbox() ?>

    <?= $form->field($medical, 'blindness_parents')->checKbox() ?>

    <?= $form->field($medical, 'blindness_siblings')->checKbox() ?>

    <?= $form->field($medical, 'blindness_children')->checKbox() ?>

    <?= $form->field($medical, 'cataracts_grand')->checKbox() ?>

    <?= $form->field($medical, 'cataracts_parents')->checKbox() ?>

    <?= $form->field($medical, 'cataracts_siblings')->checKbox() ?>

    <?= $form->field($medical, 'cataracts_children')->checKbox() ?>

    <?= $form->field($medical, 'crossed_eyes_grand')->checKbox() ?>

    <?= $form->field($medical, 'crossed_eyes_parents')->checKbox() ?>

    <?= $form->field($medical, 'crossed_eyes_siblings')->checKbox() ?>

    <?= $form->field($medical, 'crossed_eyes_children')->checKbox() ?>

    <?= $form->field($medical, 'glaucoma_grand')->checKbox() ?>

    <?= $form->field($medical, 'glaucoma_parents')->checKbox() ?>

    <?= $form->field($medical, 'glaucoma_siblings')->checKbox() ?>

    <?= $form->field($medical, 'glaucoma_children')->checKbox() ?>

    <?= $form->field($medical, 'macular_degeneration_grand')->checKbox() ?>

    <?= $form->field($medical, 'macular_degeneration_parents')->checKbox() ?>

    <?= $form->field($medical, 'macular_degeneration_siblings')->checKbox() ?>

    <?= $form->field($medical, 'macular_degeneration_children')->checKbox() ?>

    <?= $form->field($medical, 'retinal_detachment_grand')->checKbox() ?>

    <?= $form->field($medical, 'retinal_detachment_parents')->checKbox() ?>

    <?= $form->field($medical, 'retinal_detachment_siblings')->checKbox() ?>

    <?= $form->field($medical, 'retinal_detachment_children')->checKbox() ?>

    <?= $form->field($medical, 'arthritis_grand')->checKbox() ?>

    <?= $form->field($medical, 'arthritis_parents')->checKbox() ?>

    <?= $form->field($medical, 'arthritis_siblings')->checKbox() ?>

    <?= $form->field($medical, 'arthritis_children')->checKbox() ?>

    <?= $form->field($medical, 'cancer_grand')->checKbox() ?>

    <?= $form->field($medical, 'cancer_parents')->checKbox() ?>

    <?= $form->field($medical, 'cancer_siblings')->checKbox() ?>

    <?= $form->field($medical, 'cancer_children')->checKbox() ?>

    <?= $form->field($medical, 'diabetes_grand')->checKbox() ?>

    <?= $form->field($medical, 'diabetes_parents')->checKbox() ?>

    <?= $form->field($medical, 'diabetes_siblings')->checKbox() ?>

    <?= $form->field($medical, 'diabetes_children')->checKbox() ?>

    <?= $form->field($medical, 'heart_disease_grand')->checKbox() ?>

    <?= $form->field($medical, 'heart_disease_parents')->checKbox() ?>

    <?= $form->field($medical, 'heart_disease_siblings')->checKbox() ?>

    <?= $form->field($medical, 'heart_disease_children')->checKbox() ?>

    <?= $form->field($medical, 'high_blood_pressure_grand')->checKbox() ?>

    <?= $form->field($medical, 'high_blood_pressure_parents')->checKbox() ?>

    <?= $form->field($medical, 'high_blood_pressure_siblings')->checKbox() ?>

    <?= $form->field($medical, 'high_blood_pressure_children')->checKbox() ?>

    <?= $form->field($medical, 'kidney_disease_grand')->checKbox() ?>

    <?= $form->field($medical, 'kidney_disease_parents')->checKbox() ?>

    <?= $form->field($medical, 'kidney_disease_siblings')->checKbox() ?>

    <?= $form->field($medical, 'kidney_disease_children')->checKbox() ?>

    <?= $form->field($medical, 'lupus_grand')->checKbox() ?>

    <?= $form->field($medical, 'lupus_parents')->checKbox() ?>

    <?= $form->field($medical, 'lupus_siblings')->checKbox() ?>

    <?= $form->field($medical, 'lupus_children')->checKbox() ?>

    <?= $form->field($medical, 'thyroid_disease_grand')->checKbox() ?>

    <?= $form->field($medical, 'thyroid_disease_parents')->checKbox() ?>

    <?= $form->field($medical, 'thyroid_disease_siblings')->checKbox() ?>

    <?= $form->field($medical, 'thyroid_disease_children')->checKbox() ?>

    <?= $form->field($medical, 'others')->textarea(['rows' => 6]) ?>

    <?= $form->field($medical, 'headaches')->checKbox() ?>

    <?= $form->field($medical, 'migrains')->checKbox() ?>

    <?= $form->field($medical, 'seizures')->checKbox() ?>

    <?= $form->field($medical, 'loss_of_vision')->checKbox() ?>

    <?= $form->field($medical, 'blurred_vision')->checKbox() ?>

    <?= $form->field($medical, 'distorted_vision')->checKbox() ?>

    <?= $form->field($medical, 'loss_of_side_vision')->checKbox() ?>

    <?= $form->field($medical, 'double_vision')->checKbox() ?>

    <?= $form->field($medical, 'dryness_vision')->checKbox() ?>

    <?= $form->field($medical, 'mucous_discharge')->checKbox() ?>

    <?= $form->field($medical, 'redness')->checKbox() ?>

    <?= $form->field($medical, 'sandy_gritty_feeling')->checKbox() ?>

    <?= $form->field($medical, 'itching')->checKbox() ?>

    <?= $form->field($medical, 'burning')->checKbox() ?>

    <?= $form->field($medical, 'foreign_body_sensation')->checKbox() ?>

    <?= $form->field($medical, 'excess_tearing_watering')->checKbox() ?>

    <?= $form->field($medical, 'glare_light_sensitivity')->checKbox() ?>

    <?= $form->field($medical, 'eye_pain_soreness')->checKbox() ?>

    <?= $form->field($medical, 'chronic_infection_of_eye_or_lid')->checKbox() ?>

    <?= $form->field($medical, 'sties_chalazion')->checKbox() ?>

    <?= $form->field($medical, 'flashes_floaters_of_vision')->checKbox() ?>

    <?= $form->field($medical, 'tired_eyes')->checKbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
