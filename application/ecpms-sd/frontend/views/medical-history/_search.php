<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalHistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medical-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'allergies') ?>

    <?= $form->field($model, 'medications') ?>

    <?= $form->field($model, 'treatments') ?>

    <?= $form->field($model, 'eyeglasses') ?>

    <?php // echo $form->field($model, 'eyeglasses_age') ?>

    <?php // echo $form->field($model, 'contact_lens') ?>

    <?php // echo $form->field($model, 'contact_lens_age') ?>

    <?php // echo $form->field($model, 'contact_lens_id') ?>

    <?php // echo $form->field($model, 'comfortability') ?>

    <?php // echo $form->field($model, 'blindness_grand') ?>

    <?php // echo $form->field($model, 'blindness_parents') ?>

    <?php // echo $form->field($model, 'blindness_siblings') ?>

    <?php // echo $form->field($model, 'blindness_children') ?>

    <?php // echo $form->field($model, 'cataracts_grand') ?>

    <?php // echo $form->field($model, 'cataracts_parents') ?>

    <?php // echo $form->field($model, 'cataracts_siblings') ?>

    <?php // echo $form->field($model, 'cataracts_children') ?>

    <?php // echo $form->field($model, 'crossed_eyes_grand') ?>

    <?php // echo $form->field($model, 'crossed_eyes_parents') ?>

    <?php // echo $form->field($model, 'crossed_eyes_siblings') ?>

    <?php // echo $form->field($model, 'crossed_eyes_children') ?>

    <?php // echo $form->field($model, 'glaucoma_grand') ?>

    <?php // echo $form->field($model, 'glaucoma_parents') ?>

    <?php // echo $form->field($model, 'glaucoma_siblings') ?>

    <?php // echo $form->field($model, 'glaucoma_children') ?>

    <?php // echo $form->field($model, 'macular_degeneration_grand') ?>

    <?php // echo $form->field($model, 'macular_degeneration_parents') ?>

    <?php // echo $form->field($model, 'macular_degeneration_siblings') ?>

    <?php // echo $form->field($model, 'macular_degeneration_children') ?>

    <?php // echo $form->field($model, 'retinal_detachment_grand') ?>

    <?php // echo $form->field($model, 'retinal_detachment_parents') ?>

    <?php // echo $form->field($model, 'retinal_detachment_siblings') ?>

    <?php // echo $form->field($model, 'retinal_detachment_children') ?>

    <?php // echo $form->field($model, 'arthritis_grand') ?>

    <?php // echo $form->field($model, 'arthritis_parents') ?>

    <?php // echo $form->field($model, 'arthritis_siblings') ?>

    <?php // echo $form->field($model, 'arthritis_children') ?>

    <?php // echo $form->field($model, 'cancer_grand') ?>

    <?php // echo $form->field($model, 'cancer_parents') ?>

    <?php // echo $form->field($model, 'cancer_siblings') ?>

    <?php // echo $form->field($model, 'cancer_children') ?>

    <?php // echo $form->field($model, 'diabetes_grand') ?>

    <?php // echo $form->field($model, 'diabetes_parents') ?>

    <?php // echo $form->field($model, 'diabetes_siblings') ?>

    <?php // echo $form->field($model, 'diabetes_children') ?>

    <?php // echo $form->field($model, 'heart_disease_grand') ?>

    <?php // echo $form->field($model, 'heart_disease_parents') ?>

    <?php // echo $form->field($model, 'heart_disease_siblings') ?>

    <?php // echo $form->field($model, 'heart_disease_children') ?>

    <?php // echo $form->field($model, 'high_blood_pressure_grand') ?>

    <?php // echo $form->field($model, 'high_blood_pressure_parents') ?>

    <?php // echo $form->field($model, 'high_blood_pressure_siblings') ?>

    <?php // echo $form->field($model, 'high_blood_pressure_children') ?>

    <?php // echo $form->field($model, 'kidney_disease_grand') ?>

    <?php // echo $form->field($model, 'kidney_disease_parents') ?>

    <?php // echo $form->field($model, 'kidney_disease_siblings') ?>

    <?php // echo $form->field($model, 'kidney_disease_children') ?>

    <?php // echo $form->field($model, 'lupus_grand') ?>

    <?php // echo $form->field($model, 'lupus_parents') ?>

    <?php // echo $form->field($model, 'lupus_siblings') ?>

    <?php // echo $form->field($model, 'lupus_children') ?>

    <?php // echo $form->field($model, 'thyroid_disease_grand') ?>

    <?php // echo $form->field($model, 'thyroid_disease_parents') ?>

    <?php // echo $form->field($model, 'thyroid_disease_siblings') ?>

    <?php // echo $form->field($model, 'thyroid_disease_children') ?>

    <?php // echo $form->field($model, 'others') ?>

    <?php // echo $form->field($model, 'headaches') ?>

    <?php // echo $form->field($model, 'migrains') ?>

    <?php // echo $form->field($model, 'seizures') ?>

    <?php // echo $form->field($model, 'loss_of_vision') ?>

    <?php // echo $form->field($model, 'blurred_vision') ?>

    <?php // echo $form->field($model, 'distorted_vision') ?>

    <?php // echo $form->field($model, 'loss_of_side_vision') ?>

    <?php // echo $form->field($model, 'double_vision') ?>

    <?php // echo $form->field($model, 'dryness_vision') ?>

    <?php // echo $form->field($model, 'mucous_discharge') ?>

    <?php // echo $form->field($model, 'redness') ?>

    <?php // echo $form->field($model, 'sandy_gritty_feeling') ?>

    <?php // echo $form->field($model, 'itching') ?>

    <?php // echo $form->field($model, 'burning') ?>

    <?php // echo $form->field($model, 'foreign_body_sensation') ?>

    <?php // echo $form->field($model, 'excess_tearing_watering') ?>

    <?php // echo $form->field($model, 'glare_light_sensitivity') ?>

    <?php // echo $form->field($model, 'eye_pain_soreness') ?>

    <?php // echo $form->field($model, 'chronic_infection_of_eye_or_lid') ?>

    <?php // echo $form->field($model, 'sties_chalazion') ?>

    <?php // echo $form->field($model, 'flashes_floaters_of_vision') ?>

    <?php // echo $form->field($model, 'tired_eyes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
