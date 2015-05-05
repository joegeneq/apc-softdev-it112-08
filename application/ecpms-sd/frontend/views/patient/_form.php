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
    <section style="margin: 10px;">
        <fieldset>
                <legend><b> Profile </b> </legend>
            <center><table><tr><td style="width: 300px;"><?= $form->field($model, 'lastname') ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'firstname')->textInput(['maxlength' => 255]) ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'middlename')->textInput(['maxlength' => 255]) ?></td></tr>
            </table></center>
            <center><table>
                <tr><td style="width: 180px;"><?= $form->field($model, 'birthday')->widget(
                DatePicker::className(), [
                    'inline' => false, 
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd'
                    ]
                ]);?></td>
                <td style="width: 180px;"><?= $form->field($model, 'gender')->radioList(array('M'=>'Male','F'=>'Female')); ?></td>
                <td style="width: 180px;"><?= $form->field($model, 'cel')->textInput(['maxlength' => 45]) ?></td>
                <td style="width: 180px;"><?= $form->field($model, 'tel')->textInput(['maxlength' => 45]) ?></td>
                <td style="width: 180px;"><?= $form->field($model, 'fb')->textInput(['maxlength' => 75]) ?></td></tr>
            </table></center>
            <center><table>
                <tr><td style="width: 900px;"><?= $form->field($model, 'sports')->textarea(['rows' => 6]) ?></td></tr>
            </table></center>
            <center><table>
                <tr><td style="width: 300px;"><?php
                    $cities=City::find()->all();
                    $listData=ArrayHelper::map($cities, 'city_id', 'city_name');
                    echo $form->field($model, 'city_id')->dropDownList(
                        $listData,['prompt'=>'-- City --']);
                ?></td>
                <td style="width: 600px;"><?= $form->field($model, 'home_address')->textInput(['maxlength' => 255]) ?></td></tr>
                <td style="width: 300px;"><?= $form->field($model, 'company_address')->textInput(['maxlength' => 255]) ?></td>
                <td style="width: 600px;"><?= $form->field($model, 'company_name')->textInput(['maxlength' => 45]) ?></td>
            </table></center>
        </fieldset>
        <br><br>
<!--  MEDICAL HISTORY   -->
<div style="display: none;">
    <?= $form->field($medical, 'user_id')->textInput(array('readonly' => true, 'value' => Yii::$app->user->identity->id)) ?>
</div>
        <section style="margin: 10px;">
        <fieldset>
                <legend><b> Medical History </b> </legend>
            <center><table><tr><td style="width: 300px;">
                <tr><td style="width: 300px;"><?= $form->field($medical, 'allergies')->textarea(['rows' => 6]) ?></td>
                <td style="width: 300px;"><?= $form->field($medical, 'medications')->textarea(['rows' => 6]) ?></td>
                <td style="width: 300px;"><?= $form->field($medical, 'treatments')->textarea(['rows' => 6]) ?></td></tr>

                <tr><td style="width: 300px;"><br><?= $form->field($medical, 'contact_lens')->radioList(array('Y'=>'Yes','N'=>'No')); ?></td>
                <td style="width: 300px;"><?= $form->field($medical, 'contact_lens_age')->textInput(['maxlength' => 45]) ?></td>
                <td style="width: 300px;"><br><?php
                        $contacts=ContactLens::find()->all();
                        $listData=ArrayHelper::map($contacts, 'contact_lens_id', 'contact_lens_name');
                        echo $form->field($medical, 'contact_lens_id')->dropDownList(
                            $listData,['prompt'=>'-- Contact types --']);
                ?></td></tr>
                <tr><td style="width: 300px;"><?= $form->field($medical, 'comfortability')->radioList(array('1'=>'Yes','0'=>'No')); ?></td>
                <td style="width: 300px;"><br><?= $form->field($medical, 'eyeglasses')->radioList(array('Y'=>'Yes','N'=>'No')); ?></td>
                <td style="width: 300px;"><br><?= $form->field($medical, 'eyeglasses_age')->textInput(['maxlength' => 45]) ?></td></tr>
            </table></center>
    </fieldset>
<br><br>
    <section style="margin: 10px;">
        <fieldset>
                <legend><b> Family History </b> </legend>
<!--              <div class="form_table">-->
                <center><table width="900px" cellpadding="2" cellsapcing ="2"><thead>
                    <tr><th style="width: 300px;">Disease</th><th style="width: 150px;">Grand parents</th><th style="width: 150px;">Parents</th><th style="width: 150px;">Siblings</th><th style="width: 150px;">Children</th></tr>
                </thead>
                <tbody>
                     <tr><td>Blindness</td><td><?= $form->field($medical, 'blindness_grand')->checkbox() ?></td><td><?= $form->field($medical, 'blindness_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'blindness_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'blindness_children')->checkbox() ?></td></tr>
                    <tr><td>Cataracts</td><td><?= $form->field($medical, 'cataracts_grand')->checkbox() ?></td><td><?= $form->field($medical, 'cataracts_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'cataracts_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'cataracts_children')->checkbox() ?></td></tr>
                    <tr><td>Crossed Eyes</td><td><?= $form->field($medical, 'crossed_eyes_grand')->checkbox() ?></td><td><?= $form->field($medical, 'crossed_eyes_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'crossed_eyes_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'crossed_eyes_children')->checkbox() ?></td></tr>
                    <tr><td>Glaucoma</td><td><?= $form->field($medical, 'glaucoma_grand')->checkbox() ?></td><td><?= $form->field($medical, 'glaucoma_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'glaucoma_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'glaucoma_children')->checkbox() ?></td></tr>
                    <tr><td>Macular Degeneration</td><td><?= $form->field($medical, 'macular_degeneration_grand')->checkbox() ?></td><td><?= $form->field($medical, 'macular_degeneration_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'macular_degeneration_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'macular_degeneration_children')->checkbox() ?></td></tr>
                    <tr><td>Retinal_Detachment</td><td><?= $form->field($medical, 'retinal_detachment_grand')->checkbox() ?></td><td><?= $form->field($medical, 'retinal_detachment_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'retinal_detachment_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'retinal_detachment_children')->checkbox() ?></td></tr>
                    <tr><td>Arthritis</td><td><?= $form->field($medical, 'arthritis_grand')->checkbox() ?></td><td><?= $form->field($medical, 'arthritis_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'arthritis_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'arthritis_children')->checkbox() ?></td></tr>
                    <tr><td>Cancer</td><td><?= $form->field($medical, 'cancer_grand')->checkbox() ?></td><td><?= $form->field($medical, 'cancer_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'cancer_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'cancer_children')->checkbox() ?></td></tr>
                    <tr><td>Diabetes</td><td><?= $form->field($medical, 'diabetes_grand')->checkbox() ?></td><td><?= $form->field($medical, 'diabetes_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'diabetes_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'diabetes_children')->checkbox() ?></td></tr>
                    <tr><td>Heart Disease</td><td><?= $form->field($medical, 'heart_disease_grand')->checkbox() ?></td><td><?= $form->field($medical, 'heart_disease_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'heart_disease_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'heart_disease_children')->checkbox() ?></td></tr>
                    <tr><td>High Blood Pressure</td><td><?= $form->field($medical, 'high_blood_pressure_grand')->checkbox() ?></td><td><?= $form->field($medical, 'high_blood_pressure_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'high_blood_pressure_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'high_blood_pressure_children')->checkbox() ?></td></tr>
                    <tr><td>Kidney Disease</td><td><?= $form->field($medical, 'kidney_disease_grand')->checkbox() ?></td><td><?= $form->field($medical, 'kidney_disease_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'kidney_disease_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'kidney_disease_children')->checkbox() ?></td></tr>
                    <tr><td>Lupus</td><td><?= $form->field($medical, 'lupus_grand')->checkbox() ?></td><td><?= $form->field($medical, 'lupus_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'lupus_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'lupus_children')->checkbox() ?></td></tr>
                    <tr><td>Thyroid Disease</td><td><?= $form->field($medical, 'thyroid_disease_grand')->checkbox() ?></td><td><?= $form->field($medical, 'thyroid_disease_parents')->checkbox() ?></td>
                        <td><?= $form->field($medical, 'thyroid_disease_siblings')->checkbox() ?></td><td><?= $form->field($medical, 'thyroid_disease_children')->checkbox() ?></td></tr>
                </tbody></table></center>
              </div>

            <center><table>
                <tr><td style="width: 900px;"><?= $form->field($medical, 'others')->textarea(['rows' => 6]) ?></td></tr>
            </table></center>
<br><br>
        <fieldset>
                <legend><b> Experience </b> </legend>
                <center><table width="900px" cellpadding="2" cellsapcing ="2"><thead>
                    <tr><th style="width: 200px;">Events</th></tr>
                </thead>
                <tbody>
                    <tr><td>Headaches</td><td><?= $form->field($medical, 'headaches')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Migrains</td><td><?= $form->field($medical, 'migrains')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Seizures</td><td><?= $form->field($medical, 'seizures')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Loss of vision</td><td><?= $form->field($medical, 'loss_of_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Blurred vision</td><td><?= $form->field($medical, 'blurred_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Distorted vision</td><td><?= $form->field($medical, 'distorted_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Loss of side vision</td><td><?= $form->field($medical, 'loss_of_side_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Double vision</td><td><?= $form->field($medical, 'double_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Dryness vision</td><td><?= $form->field($medical, 'dryness_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Mucous Discharge</td><td><?= $form->field($medical, 'mucous_discharge')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Redness</td><td><?= $form->field($medical, 'redness')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Sandy / gritty feeling</td><td><?= $form->field($medical, 'sandy_gritty_feeling')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Itching</td><td><?= $form->field($medical, 'itching')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Burning</td><td><?= $form->field($medical, 'burning')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Foreign body sensation</td><td><?= $form->field($medical, 'foreign_body_sensation')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Excess tearing / watering</td><td><?= $form->field($medical, 'excess_tearing_watering')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Glare light sensitivity</td><td><?= $form->field($medical, 'glare_light_sensitivity')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Eye pain soreness</td><td><?= $form->field($medical, 'eye_pain_soreness')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Chronic infection of eye or lid</td><td><?= $form->field($medical, 'chronic_infection_of_eye_or_lid')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>sties_chalazion</td><td><?= $form->field($medical, 'sties_chalazion')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Flashes floaters_of_vision</td><td><?= $form->field($medical, 'flashes_floaters_of_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Tired eyes</td><td><?= $form->field($medical, 'tired_eyes')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr></tbody>
                </table></center>
        </fieldset>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
