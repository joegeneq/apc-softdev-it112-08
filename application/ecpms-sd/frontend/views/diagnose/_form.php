<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Evaluation;
use frontend\models\Prescription;
use frontend\models\Accounting;
use frontend\models\User;
/* @var $this yii\web\View */
/* @var $model frontend\models\Diagnose */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diagnose-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'patient_id')->textInput() ?>-->
    <?php
        $patients=User::find()->where('role=10')->all();
        //$patients=User::find()->where(['role' => 20]);
        //$patients=User::find(['role' => 20,]);
        //$patients = $post->getPatientRole()->andWhere('role=20')->all();
        /*if($user->role == 20){
            //echo $patients->role==20;
            $patients=User::find()->all();
        }*/

        $listData=ArrayHelper::map($patients, 'id', 'username');
        echo $form->field($model, 'patient_id')->dropDownList(
            $listData,['prompt'=>'Select Patient']);
    ?>

    <!-- <?= $form->field($model, 'employee_id')->textInput() ?> -->
    <div style="display: none;">
    <?= $form->field($model, 'employee_id')->textInput(array('readonly' => true, 'value' => Yii::$app->user->identity->id)) ?>
    </div>

    <?= $form->field($model, 'patient_signature')->textInput() ?>

    <?= $form->field($model, 'agreed_date')->textInput() ?>

    <?= $form->field($model, 'employee_signature')->textInput() ?>

    <?= $form->field($model, 'complaints')->textarea(['rows' => 6]) ?>

    <!-- Evaluation -->

    <?= $form->field($evaluation, 'color_test')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'stereo_w4d')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'confrontation_avf')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'gross_exam')->textarea(['rows' => 6]) ?>

    <?= $form->field($evaluation, 'diagnostic_result')->textarea(['rows' => 6]) ?>

    <?= $form->field($evaluation, 'management')->textarea(['rows' => 6]) ?>

    <?= $form->field($evaluation, 'plan_TCB')->textarea(['rows' => 6]) ?>

    <?= $form->field($evaluation, 'plan_next_visit')->textInput() ?>

    <?= $form->field($evaluation, 'v_d_od_sc')->textInput() ?>

    <?= $form->field($evaluation, 'v_d_od_cc')->textInput() ?>

    <?= $form->field($evaluation, 'v_d_od_ph')->textInput() ?>

    <?= $form->field($evaluation, 'v_n_od_sc')->textInput() ?>

    <?= $form->field($evaluation, 'v_n_od_cc')->textInput() ?>

    <?= $form->field($evaluation, 'v_d_os_sc')->textInput() ?>

    <?= $form->field($evaluation, 'v_d_os_cc')->textInput() ?>

    <?= $form->field($evaluation, 'v_d_os_ph')->textInput() ?>

    <?= $form->field($evaluation, 'v_n_os_sc')->textInput() ?>

    <?= $form->field($evaluation, 'v_n_os_cc')->textInput() ?>

    <?= $form->field($evaluation, 'v_d_ou_sc')->textInput() ?>

    <?= $form->field($evaluation, 'v_d_ou_cc')->textInput() ?>

    <?= $form->field($evaluation, 'v_d_ou_ph')->textInput() ?>

    <?= $form->field($evaluation, 'v_n_ou_sc')->textInput() ?>

    <?= $form->field($evaluation, 'v_n_ou_cc')->textInput() ?>

    <?= $form->field($evaluation, 'r_a_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'r_a_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'r_m_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'r_m_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'r_c_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'r_c_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'r_o_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'r_o_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'r_w_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'r_w_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($evaluation, 'k_v_od')->textInput() ?>

    <?= $form->field($evaluation, 'k_v_os')->textInput() ?>

    <?= $form->field($evaluation, 'k_c_od')->textInput() ?>

    <?= $form->field($evaluation, 'k_c_os')->textInput() ?>

    <?= $form->field($evaluation, 'k_a_od')->textInput() ?>

    <?= $form->field($evaluation, 'k_a_os')->textInput() ?>

    <?= $form->field($evaluation, 'k_h_od')->textInput() ?>

    <?= $form->field($evaluation, 'k_h_os')->textInput() ?>

    <?= $form->field($evaluation, 't_od')->textInput() ?>

    <?= $form->field($evaluation, 't_os')->textInput() ?>

    <?= $form->field($evaluation, 'p_d_l')->textInput() ?>

    <?= $form->field($evaluation, 'p_d_v')->textInput() ?>

    <?= $form->field($evaluation, 'p_n_l')->textInput() ?>

    <?= $form->field($evaluation, 'p_n_v')->textInput() ?>

    <?= $form->field($evaluation, 'p_d_bi')->textInput() ?>

    <?= $form->field($evaluation, 'p_d_lbu')->textInput() ?>

    <?= $form->field($evaluation, 'p_n_bi')->textInput() ?>

    <?= $form->field($evaluation, 'p_n_lbu')->textInput() ?>

    <?= $form->field($evaluation, 'p_d_bo')->textInput() ?>

    <?= $form->field($evaluation, 'p_d_lbo')->textInput() ?>

    <?= $form->field($evaluation, 'p_n_bo')->textInput() ?>

    <?= $form->field($evaluation, 'p_n_lbo')->textInput() ?>

    <?= $form->field($evaluation, 'bp_s')->textInput() ?>

    <?= $form->field($evaluation, 'bp_d')->textInput() ?>

    <?= $form->field($evaluation, 'pupil_p_od')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($evaluation, 'pupil_p_os')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($evaluation, 'pupil_s_od')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($evaluation, 'pupil_s_os')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($evaluation, 'pupil_rapd')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($evaluation, 'eoms_id')->textInput() ?>

    <?= $form->field($evaluation, 'm_dominant')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'm_other')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'm_p_accom')->textInput() ?>

    <?= $form->field($evaluation, 'm_a_accom')->textInput() ?>

    <?= $form->field($evaluation, 'm_p_conver_num')->textInput() ?>

    <?= $form->field($evaluation, 'm_p_conver_den')->textInput() ?>

    <?= $form->field($evaluation, 'ee_lids_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_lids_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_c_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_c_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_d_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_d_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_l_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_l_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_t_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_t_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_s_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_s_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'ee_od')->textInput() ?>

    <?= $form->field($evaluation, 'ee_os')->textInput() ?>

    <?= $form->field($evaluation, 'se_c_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_c_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_a_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_a_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_i_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_i_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_l_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_l_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_v_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_v_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'se_od')->textInput() ?>

    <?= $form->field($evaluation, 'se_os')->textInput() ?>

    <?= $form->field($evaluation, 'f_me_od')->textInput() ?>

    <?= $form->field($evaluation, 'f_me_os')->textInput() ?>

    <?= $form->field($evaluation, 'f_d_od')->textInput() ?>

    <?= $form->field($evaluation, 'f_d_os')->textInput() ?>

    <?= $form->field($evaluation, 'f_c_od')->textInput() ?>

    <?= $form->field($evaluation, 'f_c_os')->textInput() ?>

    <?= $form->field($evaluation, 'f_v_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'f_v_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'f_p_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'f_p_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'f_ma_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($evaluation, 'f_m_os')->textInput(['maxlength' => 45]) ?>

    <!-- Prescription -->

    <?= $form->field($prescription, 'd_od_sph')->textInput() ?>

    <?= $form->field($prescription, 'd_od_cyl')->textInput() ?>

    <?= $form->field($prescription, 'd_od_axis')->textInput() ?>

    <?= $form->field($prescription, 'd_od_prism')->textInput() ?>

    <?= $form->field($prescription, 'd_od_add')->textInput() ?>

    <?= $form->field($prescription, 'd_os_sph')->textInput() ?>

    <?= $form->field($prescription, 'd_os_cyl')->textInput() ?>

    <?= $form->field($prescription, 'd_os_axis')->textInput() ?>

    <?= $form->field($prescription, 'd_os_prism')->textInput() ?>

    <?= $form->field($prescription, 'd_os_add')->textInput() ?>

    <?= $form->field($prescription, 'n_od_sph')->textInput() ?>

    <?= $form->field($prescription, 'n_od_cyl_cyl')->textInput() ?>

    <?= $form->field($prescription, 'n_od_axis')->textInput() ?>

    <?= $form->field($prescription, 'n_od_prism')->textInput() ?>

    <?= $form->field($prescription, 'n_od_add')->textInput() ?>

    <?= $form->field($prescription, 'n_os_sph')->textInput() ?>

    <?= $form->field($prescription, 'n_os_cyl')->textInput() ?>

    <?= $form->field($prescription, 'n_os_axis')->textInput() ?>

    <?= $form->field($prescription, 'n_os_prism')->textInput() ?>

    <?= $form->field($prescription, 'n_os_add')->textInput() ?>

    <?= $form->field($prescription, 'design_id')->textInput() ?>

    <?= $form->field($prescription, 'instruction_id')->textInput() ?>

    <?= $form->field($prescription, 'od_bc')->textInput() ?>

    <?= $form->field($prescription, 'od_diam')->textInput() ?>

    <?= $form->field($prescription, 'od_power')->textInput() ?>

    <?= $form->field($prescription, 'od_color')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($prescription, 'os_bc')->textInput() ?>

    <?= $form->field($prescription, 'os_diam')->textInput() ?>

    <?= $form->field($prescription, 'os_power')->textInput() ?>

    <?= $form->field($prescription, 'os_color')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($prescription, 'wear_mode_id')->textInput() ?>

    <?= $form->field($prescription, 'solutions_id')->textInput() ?>

    <!-- Accounting -->

    <?= $form->field($accounting, 'professional_fee')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($accounting, 'frames_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($accounting, 'lenses_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($accounting, 'contacts_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($accounting, 'solutions_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($accounting, 'ancilliary_procedures')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($accounting, 'others')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($accounting, 'insurance_id')->textInput() ?>

    <?= $form->field($accounting, 'senior_citizen')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($accounting, 'person_w_disability')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($accounting, 'total')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($accounting, 'deposit')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($accounting, 'balance')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
