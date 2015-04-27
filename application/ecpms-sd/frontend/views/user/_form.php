<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'city_city_id')->textInput() ?>

    <?= $form->field($model, 'home_address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'company_address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'cel')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'fb')->textInput(['maxlength' => 75]) ?>

    <?= $form->field($model, 'allergies')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'medications')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'treatments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'eyeglasses')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'eyeglasses_age')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'contact_lens')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'contact_lens_age')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'contact_lens_id')->textInput() ?>

    <?= $form->field($model, 'blindness_grand')->textInput() ?>

    <?= $form->field($model, 'blindness_parents')->textInput() ?>

    <?= $form->field($model, 'blindness_siblings')->textInput() ?>

    <?= $form->field($model, 'blindness_children')->textInput() ?>

    <?= $form->field($model, 'cataracts_grand')->textInput() ?>

    <?= $form->field($model, 'cataracts_parents')->textInput() ?>

    <?= $form->field($model, 'cataracts_siblings')->textInput() ?>

    <?= $form->field($model, 'cataracts_children')->textInput() ?>

    <?= $form->field($model, 'crossed_eyes_grand')->textInput() ?>

    <?= $form->field($model, 'crossed_eyes_parents')->textInput() ?>

    <?= $form->field($model, 'crossed_eyes_siblings')->textInput() ?>

    <?= $form->field($model, 'crossed_eyes_children')->textInput() ?>

    <?= $form->field($model, 'glaucoma_grand')->textInput() ?>

    <?= $form->field($model, 'glaucoma_parents')->textInput() ?>

    <?= $form->field($model, 'glaucoma_siblings')->textInput() ?>

    <?= $form->field($model, 'glaucoma_children')->textInput() ?>

    <?= $form->field($model, 'macular_degeneration_grand')->textInput() ?>

    <?= $form->field($model, 'macular_degeneration_parents')->textInput() ?>

    <?= $form->field($model, 'macular_degeneration_siblings')->textInput() ?>

    <?= $form->field($model, 'macular_degeneration_children')->textInput() ?>

    <?= $form->field($model, 'retinal_detachment_grand')->textInput() ?>

    <?= $form->field($model, 'retinal_detachment_parents')->textInput() ?>

    <?= $form->field($model, 'retinal_detachment_siblings')->textInput() ?>

    <?= $form->field($model, 'retinal_detachment_children')->textInput() ?>

    <?= $form->field($model, 'arthritis_grand')->textInput() ?>

    <?= $form->field($model, 'arthritis_parents')->textInput() ?>

    <?= $form->field($model, 'arthritis_siblings')->textInput() ?>

    <?= $form->field($model, 'arthritis_children')->textInput() ?>

    <?= $form->field($model, 'cancer_grand')->textInput() ?>

    <?= $form->field($model, 'cancer_parents')->textInput() ?>

    <?= $form->field($model, 'cancer_siblings')->textInput() ?>

    <?= $form->field($model, 'cancer_children')->textInput() ?>

    <?= $form->field($model, 'diabetes_grand')->textInput() ?>

    <?= $form->field($model, 'diabetes_parents')->textInput() ?>

    <?= $form->field($model, 'diabetes_siblings')->textInput() ?>

    <?= $form->field($model, 'diabetes_children')->textInput() ?>

    <?= $form->field($model, 'heart_disease_grand')->textInput() ?>

    <?= $form->field($model, 'heart_disease_parents')->textInput() ?>

    <?= $form->field($model, 'heart_disease_siblings')->textInput() ?>

    <?= $form->field($model, 'heart_disease_children')->textInput() ?>

    <?= $form->field($model, 'high_blood_pressure_grand')->textInput() ?>

    <?= $form->field($model, 'high_blood_pressure_parents')->textInput() ?>

    <?= $form->field($model, 'high_blood_pressure_siblings')->textInput() ?>

    <?= $form->field($model, 'high_blood_pressure_children')->textInput() ?>

    <?= $form->field($model, 'kidney_disease_grand')->textInput() ?>

    <?= $form->field($model, 'kidney_disease_parents')->textInput() ?>

    <?= $form->field($model, 'kidney_disease_siblings')->textInput() ?>

    <?= $form->field($model, 'kidney_disease_children')->textInput() ?>

    <?= $form->field($model, 'lupus_grand')->textInput() ?>

    <?= $form->field($model, 'lupus_parents')->textInput() ?>

    <?= $form->field($model, 'lupus_siblings')->textInput() ?>

    <?= $form->field($model, 'lupus_children')->textInput() ?>

    <?= $form->field($model, 'thyroid_disease_grand')->textInput() ?>

    <?= $form->field($model, 'thyroid_disease_parents')->textInput() ?>

    <?= $form->field($model, 'thyroid_disease_siblings')->textInput() ?>

    <?= $form->field($model, 'thyroid_disease_children')->textInput() ?>

    <?= $form->field($model, 'others')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'headaches')->textInput() ?>

    <?= $form->field($model, 'migrains')->textInput() ?>

    <?= $form->field($model, 'seizures')->textInput() ?>

    <?= $form->field($model, 'loss_of_vision')->textInput() ?>

    <?= $form->field($model, 'blurred_vision')->textInput() ?>

    <?= $form->field($model, 'distorted_vision')->textInput() ?>

    <?= $form->field($model, 'loss_of_side_vision')->textInput() ?>

    <?= $form->field($model, 'double_vision')->textInput() ?>

    <?= $form->field($model, 'dryness_vision')->textInput() ?>

    <?= $form->field($model, 'mucous_discharge')->textInput() ?>

    <?= $form->field($model, 'redness')->textInput() ?>

    <?= $form->field($model, 'sandy_gritty_feeling')->textInput() ?>

    <?= $form->field($model, 'itching')->textInput() ?>

    <?= $form->field($model, 'burning')->textInput() ?>

    <?= $form->field($model, 'foreign_body_sensation')->textInput() ?>

    <?= $form->field($model, 'excess_tearing_watering')->textInput() ?>

    <?= $form->field($model, 'glare_light_sensitivity')->textInput() ?>

    <?= $form->field($model, 'eye_pain_soreness')->textInput() ?>

    <?= $form->field($model, 'chronic_infection_of_eye_or_lid')->textInput() ?>

    <?= $form->field($model, 'sties_chalazion')->textInput() ?>

    <?= $form->field($model, 'flashes_floaters_of_vision')->textInput() ?>

    <?= $form->field($model, 'tired_eyes')->textInput() ?>

    <?= $form->field($model, 'sports')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
