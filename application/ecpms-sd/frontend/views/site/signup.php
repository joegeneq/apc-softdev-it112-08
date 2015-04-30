<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use backend\models\City;
use backend\models\ContactLens;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
<!--    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>
-->
    <div class="row">
<!--        <div class="col-lg-5">  -->
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <section style="margin: 10px;">
            <fieldset style="border-radius: 5px; padding: 5px; min-height:150px; border:8px solid #1f497d; background-color:#eeece1;">
                <legend style=" margin-left:20px;background-color:#1f497d; padding-left:10px; padding-top:5px; padding-right:120px; padding-bottom:5px; ; color:white; border-radius:15px; border:8px solid #eeece1; font-size:30px;" ><b> Account </b> </legend>
                <center><table><tr><td style="width: 300px;"><?= $form->field($model, 'email') ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'username') ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'password')->passwordInput() ?></td></tr></table></center>
            </fieldset>
            <br><br><br><br>    
            <section style="margin: 10px;">
            <fieldset style="border-radius: 5px; padding: 5px; min-height:150px; border:8px solid #1f497d; background-color:#eeece1;">
                <legend style=" margin-left:20px;background-color:#1f497d; padding-left:10px; padding-top:5px; padding-right:120px; padding-bottom:5px; ; color:white; border-radius:15px; border:8px solid #eeece1; font-size:30px;" ><b> Profile </b> </legend>
                <center><table><tr><td style="width: 300px;"><?= $form->field($model, 'lastname') ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'firstname') ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'middlename')->passwordInput() ?></td></tr>
            <tr><td style="width: 300px;"><?= $form->field($model, 'birthday')->widget(
                    DatePicker::className(), [
                        'inline' => false, 
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd'
                    ]
                ]);?></td>
                <td style="width: 300px;"><?= $form->field($model, 'gender')->radioList(array('M'=>'Male','F'=>'Female')); ?></td>
                <td style="width: 300px;"><?php
                    $cities=City::find()->all();
                    $listData=ArrayHelper::map($cities, 'city_id', 'city_name');
                    echo $form->field($model, 'city_id')->dropDownList(
                        $listData,['prompt'=>'-- Select City --']);
                ?></td>
            </tr></table><table>
            <tr><td style="width: 900px;"><?= $form->field($model, 'home_address') ?></td></tr>
            <tr><td style="width: 900px;"><?= $form->field($model, 'company_address') ?></td></tr>
            <tr><td style="width: 900px;"><?= $form->field($model, 'company_name')->passwordInput() ?></td></tr>
            </table>
            <table><tr><td style="width: 300px;"><?= $form->field($model, 'cel') ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'tel') ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'fb')->passwordInput() ?></td></tr></table></fieldset>
            <br><br><br><br>
            <section style="margin: 10px;">
            <fieldset style="border-radius: 5px; padding: 5px; min-height:150px; border:8px solid #1f497d; background-color:#eeece1;">
                <legend style=" margin-left:20px;background-color:#1f497d; padding-left:10px; padding-top:5px; padding-right:120px; padding-bottom:5px; ; color:white; border-radius:15px; border:8px solid #eeece1; font-size:30px;" ><b> Medical History </b> </legend>
                <center><table>
            <tr><td style="width: 300px;"><?= $form->field($model, 'allergies')->textarea(['rows' => 6]) ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'medications')->textarea(['rows' => 6]) ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'treatments')->textarea(['rows' => 6]) ?></td></tr>
            <tr><td style="width: 300px;"><?= $form->field($model, 'eyeglasses')->radioList(array('Y'=>'Yes','N'=>'No')); ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'eyeglasses_age')->textInput(['maxlength' => 45]) ?></td></tr>
            <tr><td style="width: 300px;"><?= $form->field($model, 'contact_lens')->radioList(array('Y'=>'Yes','N'=>'No')); ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'contact_lens_age')->textInput(['maxlength' => 45]) ?></td>
                <td style="width: 300px;"><?php
                    $contacts=ContactLens::find()->all();
                    $listData=ArrayHelper::map($contacts, 'contact_lens_id', 'contact_lens_name');
                    echo $form->field($model, 'contact_lens_id')->dropDownList(
                        $listData,['prompt'=>'-- Select Type --']);
                ?></td></tr>
            </table></center></fieldset>
<br><br><br><br>


                
                
                
                
                
                
                
                
                

                <?php //id="signupform-blindness_parents" ?>
                <!--
                <div class="squaredOne">
                    <input type="checkbox" value="None" id="squaredOne" name="check" /> 
                    
                    <label for="squaredOne">hoy</label>
                </div>

                <table border=2>
                    <tr>
                        <td>Disease</td>
                        <td>Grand parents</td>
                        <td>Parents</td>
                        <td>Siblings</td>
                        <td>Children</td>
                    </tr>

                </table> -->
<br><br><br>
<fieldset><legend>Family History</legend></fieldset>
              <div class="form_table">
                <table width="100%" cellpadding="2" cellsapcing ="2">
                <thead>
                    <tr><th>Disease</th><th>Grand parents</th><th>Parents</th><th>Siblings</th><th>Children</th></tr>
                </thead>
                <tbody>
                     <tr><td>Blindness</td><td><?= $form->field($model, 'blindness_grand')->checkbox() ?></td><td><?= $form->field($model, 'blindness_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'blindness_siblings')->checkbox() ?></td><td><?= $form->field($model, 'blindness_children')->checkbox() ?></td></tr>
                    <tr><td>Cataracts</td><td><?= $form->field($model, 'cataracts_grand')->checkbox() ?></td><td><?= $form->field($model, 'cataracts_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'cataracts_siblings')->checkbox() ?></td><td><?= $form->field($model, 'cataracts_children')->checkbox() ?></td></tr>
                    <tr><td>Crossed Eyes</td><td><?= $form->field($model, 'crossed_eyes_grand')->checkbox() ?></td><td><?= $form->field($model, 'crossed_eyes_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'crossed_eyes_siblings')->checkbox() ?></td><td><?= $form->field($model, 'crossed_eyes_children')->checkbox() ?></td></tr>
                    <tr><td>Glaucoma</td><td><?= $form->field($model, 'glaucoma_grand')->checkbox() ?></td><td><?= $form->field($model, 'glaucoma_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'glaucoma_siblings')->checkbox() ?></td><td><?= $form->field($model, 'glaucoma_children')->checkbox() ?></td></tr>
                    <tr><td>Macular Degeneration</td><td><?= $form->field($model, 'macular_degeneration_grand')->checkbox() ?></td><td><?= $form->field($model, 'macular_degeneration_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'macular_degeneration_siblings')->checkbox() ?></td><td><?= $form->field($model, 'macular_degeneration_children')->checkbox() ?></td></tr>
                    <tr><td>Retinal_Detachment</td><td><?= $form->field($model, 'retinal_detachment_grand')->checkbox() ?></td><td><?= $form->field($model, 'retinal_detachment_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'retinal_detachment_siblings')->checkbox() ?></td><td><?= $form->field($model, 'retinal_detachment_children')->checkbox() ?></td></tr>
                    <tr><td>Arthritis</td><td><?= $form->field($model, 'arthritis_grand')->checkbox() ?></td><td><?= $form->field($model, 'arthritis_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'arthritis_siblings')->checkbox() ?></td><td><?= $form->field($model, 'arthritis_children')->checkbox() ?></td></tr>
                    <tr><td>Cancer</td><td><?= $form->field($model, 'cancer_grand')->checkbox() ?></td><td><?= $form->field($model, 'cancer_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'cancer_siblings')->checkbox() ?></td><td><?= $form->field($model, 'cancer_children')->checkbox() ?></td></tr>
                    <tr><td>Diabetes</td><td><?= $form->field($model, 'diabetes_grand')->checkbox() ?></td><td><?= $form->field($model, 'diabetes_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'diabetes_siblings')->checkbox() ?></td><td><?= $form->field($model, 'diabetes_children')->checkbox() ?></td></tr>
                    <tr><td>Heart Disease</td><td><?= $form->field($model, 'heart_disease_grand')->checkbox() ?></td><td><?= $form->field($model, 'heart_disease_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'heart_disease_siblings')->checkbox() ?></td><td><?= $form->field($model, 'heart_disease_children')->checkbox() ?></td></tr>
                    <tr><td>High Blood Pressure</td><td><?= $form->field($model, 'high_blood_pressure_grand')->checkbox() ?></td><td><?= $form->field($model, 'high_blood_pressure_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'high_blood_pressure_siblings')->checkbox() ?></td><td><?= $form->field($model, 'high_blood_pressure_children')->checkbox() ?></td></tr>
                    <tr><td>Kidney Disease</td><td><?= $form->field($model, 'kidney_disease_grand')->checkbox() ?></td><td><?= $form->field($model, 'kidney_disease_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'kidney_disease_siblings')->checkbox() ?></td><td><?= $form->field($model, 'kidney_disease_children')->checkbox() ?></td></tr>
                    <tr><td>Lupus</td><td><?= $form->field($model, 'lupus_grand')->checkbox() ?></td><td><?= $form->field($model, 'lupus_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'lupus_siblings')->checkbox() ?></td><td><?= $form->field($model, 'lupus_children')->checkbox() ?></td></tr>
                    <tr><td>Thyroid Disease</td><td><?= $form->field($model, 'thyroid_disease_grand')->checkbox() ?></td><td><?= $form->field($model, 'thyroid_disease_parents')->checkbox() ?></td>
                        <td><?= $form->field($model, 'thyroid_disease_siblings')->checkbox() ?></td><td><?= $form->field($model, 'thyroid_disease_children')->checkbox() ?></td></tr>
                </tbody>
                </table>
              </div>                
                

              <div class="norm_form_table">
                <table width="100%" cellpadding="2" cellsapcing ="2">
                <fieldset><legend>Experience</legend></fieldset>
                    <tr><td>Headaches</td><td><?= $form->field($model, 'headaches')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Migrains</td><td><?= $form->field($model, 'migrains')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Seizures</td><td><?= $form->field($model, 'seizures')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Loss of vision</td><td><?= $form->field($model, 'loss_of_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Blurred vision</td><td><?= $form->field($model, 'blurred_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Distorted vision</td><td><?= $form->field($model, 'distorted_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Loss of side vision</td><td><?= $form->field($model, 'loss_of_side_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Double vision</td><td><?= $form->field($model, 'double_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Dryness vision</td><td><?= $form->field($model, 'dryness_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Mucous Discharge</td><td><?= $form->field($model, 'mucous_discharge')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Redness</td><td><?= $form->field($model, 'redness')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Sandy / gritty feeling</td><td><?= $form->field($model, 'sandy_gritty_feeling')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Itching</td><td><?= $form->field($model, 'itching')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Burning</td><td><?= $form->field($model, 'burning')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Foreign body sensation</td><td><?= $form->field($model, 'foreign_body_sensation')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Excess tearing / watering</td><td><?= $form->field($model, 'excess_tearing_watering')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Glare light sensitivity</td><td><?= $form->field($model, 'glare_light_sensitivity')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Eye pain soreness</td><td><?= $form->field($model, 'eye_pain_soreness')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Chronic infection of eye or lid</td><td><?= $form->field($model, 'chronic_infection_of_eye_or_lid')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>sties_chalazion</td><td><?= $form->field($model, 'sties_chalazion')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Flashes floaters_of_vision</td><td><?= $form->field($model, 'flashes_floaters_of_vision')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>
                    <tr><td>Tired eyes</td><td><?= $form->field($model, 'tired_eyes')->radioList(array(1=>'Yes',0=>'No')); ?></td></tr>                    

                </table>
              </div>

              <center><div style="width: 600px;"><?= $form->field($model, 'sports')->textarea(['rows' => 6]) ?></div></center>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    <!--    </div>  -->
</div>
