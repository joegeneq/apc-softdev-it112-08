<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="record-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'record_id') ?>

    <?= $form->field($model, 'patient_signature') ?>

    <?= $form->field($model, 'agreed_date') ?>

    <?php // echo $form->field($model, 'employee_signature') ?>

    <?php // echo $form->field($model, 'complaints') ?>

    <?php // echo $form->field($model, 'diagnostic_result') ?>

    <?php // echo $form->field($model, 'management') ?>

    <?php // echo $form->field($model, 'plan_TCB') ?>

    <?php // echo $form->field($model, 'plan_next_visit') ?>

    <?php // echo $form->field($model, 'professional_fee') ?>

    <?php // echo $form->field($model, 'frames_price') ?>

    <?php // echo $form->field($model, 'lenses_price') ?>

    <?php // echo $form->field($model, 'contacts_price') ?>

    <?php // echo $form->field($model, 'solutions_price') ?>

    <?php // echo $form->field($model, 'ancilliary_procedures') ?>

    <?php // echo $form->field($model, 'others') ?>

    <?php // echo $form->field($model, 'insurance_id') ?>

    <?php // echo $form->field($model, 'senior_citizen') ?>

    <?php // echo $form->field($model, 'person_w_disability') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'deposit') ?>

    <?php // echo $form->field($model, 'balance') ?>

    <?php // echo $form->field($model, 'd_od_sph') ?>

    <?php // echo $form->field($model, 'd_od_cyl') ?>

    <?php // echo $form->field($model, 'd_od_axis') ?>

    <?php // echo $form->field($model, 'd_od_prism') ?>

    <?php // echo $form->field($model, 'd_od_add') ?>

    <?php // echo $form->field($model, 'd_os_sph') ?>

    <?php // echo $form->field($model, 'd_os_cyl') ?>

    <?php // echo $form->field($model, 'd_os_axis') ?>

    <?php // echo $form->field($model, 'd_os_prism') ?>

    <?php // echo $form->field($model, 'd_os_add') ?>

    <?php // echo $form->field($model, 'n_od_sph') ?>

    <?php // echo $form->field($model, 'n_od_cyl_cyl') ?>

    <?php // echo $form->field($model, 'n_od_axis') ?>

    <?php // echo $form->field($model, 'n_od_prism') ?>

    <?php // echo $form->field($model, 'n_od_add') ?>

    <?php // echo $form->field($model, 'n_os_sph') ?>

    <?php // echo $form->field($model, 'n_os_cyl') ?>

    <?php // echo $form->field($model, 'n_os_axis') ?>

    <?php // echo $form->field($model, 'n_os_prism') ?>

    <?php // echo $form->field($model, 'n_os_add') ?>

    <?php // echo $form->field($model, 'design_id') ?>

    <?php // echo $form->field($model, 'instruction_id') ?>

    <?php // echo $form->field($model, 'od_bc') ?>

    <?php // echo $form->field($model, 'od_diam') ?>

    <?php // echo $form->field($model, 'od_power') ?>

    <?php // echo $form->field($model, 'od_color') ?>

    <?php // echo $form->field($model, 'os_bc') ?>

    <?php // echo $form->field($model, 'os_diam') ?>

    <?php // echo $form->field($model, 'os_power') ?>

    <?php // echo $form->field($model, 'os_color') ?>

    <?php // echo $form->field($model, 'wear_mode_id') ?>

    <?php // echo $form->field($model, 'solutions_id') ?>

    <?php // echo $form->field($model, 'v_d_od_sc') ?>

    <?php // echo $form->field($model, 'v_d_od_cc') ?>

    <?php // echo $form->field($model, 'v_d_od_ph') ?>

    <?php // echo $form->field($model, 'v_n_od_sc') ?>

    <?php // echo $form->field($model, 'v_n_od_cc') ?>

    <?php // echo $form->field($model, 'v_d_os_sc') ?>

    <?php // echo $form->field($model, 'v_d_os_cc') ?>

    <?php // echo $form->field($model, 'v_d_os_ph') ?>

    <?php // echo $form->field($model, 'v_n_os_sc') ?>

    <?php // echo $form->field($model, 'v_n_os_cc') ?>

    <?php // echo $form->field($model, 'v_d_ou_sc') ?>

    <?php // echo $form->field($model, 'v_d_ou_cc') ?>

    <?php // echo $form->field($model, 'v_d_ou_ph') ?>

    <?php // echo $form->field($model, 'v_n_ou_sc') ?>

    <?php // echo $form->field($model, 'v_n_ou_cc') ?>

    <?php // echo $form->field($model, 'r_a_od') ?>

    <?php // echo $form->field($model, 'r_a_os') ?>

    <?php // echo $form->field($model, 'r_m_od') ?>

    <?php // echo $form->field($model, 'r_m_os') ?>

    <?php // echo $form->field($model, 'r_c_od') ?>

    <?php // echo $form->field($model, 'r_c_os') ?>

    <?php // echo $form->field($model, 'r_o_od') ?>

    <?php // echo $form->field($model, 'r_o_os') ?>

    <?php // echo $form->field($model, 'r_w_od') ?>

    <?php // echo $form->field($model, 'r_w_os') ?>

    <?php // echo $form->field($model, 'k_h_od') ?>

    <?php // echo $form->field($model, 'k_h_os') ?>

    <?php // echo $form->field($model, 'k_v_od') ?>

    <?php // echo $form->field($model, 'k_v_os') ?>

    <?php // echo $form->field($model, 'k_c_od') ?>

    <?php // echo $form->field($model, 'k_c_os') ?>

    <?php // echo $form->field($model, 'k_a_od') ?>

    <?php // echo $form->field($model, 'k_a_os') ?>

    <?php // echo $form->field($model, 't_od') ?>

    <?php // echo $form->field($model, 't_os') ?>

    <?php // echo $form->field($model, 'bp_s') ?>

    <?php // echo $form->field($model, 'bp_d') ?>

    <?php // echo $form->field($model, 'p_d_l') ?>

    <?php // echo $form->field($model, 'p_d_v') ?>

    <?php // echo $form->field($model, 'p_n_l') ?>

    <?php // echo $form->field($model, 'p_n_v') ?>

    <?php // echo $form->field($model, 'p_d_bi') ?>

    <?php // echo $form->field($model, 'p_d_lbu') ?>

    <?php // echo $form->field($model, 'p_n_bi') ?>

    <?php // echo $form->field($model, 'p_n_lbu') ?>

    <?php // echo $form->field($model, 'p_d_bo') ?>

    <?php // echo $form->field($model, 'p_d_lbo') ?>

    <?php // echo $form->field($model, 'p_n_bo') ?>

    <?php // echo $form->field($model, 'p_n_lbo') ?>

    <?php // echo $form->field($model, 'pupil_p_od') ?>

    <?php // echo $form->field($model, 'pupil_p_os') ?>

    <?php // echo $form->field($model, 'pupil_s_od') ?>

    <?php // echo $form->field($model, 'pupil_s_os') ?>

    <?php // echo $form->field($model, 'pupil_rapd') ?>

    <?php // echo $form->field($model, 'eoms_id') ?>

    <?php // echo $form->field($model, 'm_dominant') ?>

    <?php // echo $form->field($model, 'm_other') ?>

    <?php // echo $form->field($model, 'm_p_accom') ?>

    <?php // echo $form->field($model, 'm_a_accom') ?>

    <?php // echo $form->field($model, 'm_p_conver_num') ?>

    <?php // echo $form->field($model, 'm_p_conver_den') ?>

    <?php // echo $form->field($model, 'color_test') ?>

    <?php // echo $form->field($model, 'stereo_w4d') ?>

    <?php // echo $form->field($model, 'confrontation_avf') ?>

    <?php // echo $form->field($model, 'gross_exam') ?>

    <?php // echo $form->field($model, 'ee_lids_od') ?>

    <?php // echo $form->field($model, 'ee_lids_os') ?>

    <?php // echo $form->field($model, 'ee_c_od') ?>

    <?php // echo $form->field($model, 'ee_c_os') ?>

    <?php // echo $form->field($model, 'ee_d_od') ?>

    <?php // echo $form->field($model, 'ee_d_os') ?>

    <?php // echo $form->field($model, 'ee_l_od') ?>

    <?php // echo $form->field($model, 'ee_l_os') ?>

    <?php // echo $form->field($model, 'ee_t_od') ?>

    <?php // echo $form->field($model, 'ee_t_os') ?>

    <?php // echo $form->field($model, 'ee_s_od') ?>

    <?php // echo $form->field($model, 'ee_s_os') ?>

    <?php // echo $form->field($model, 'ee_od') ?>

    <?php // echo $form->field($model, 'ee_os') ?>

    <?php // echo $form->field($model, 'se_c_od') ?>

    <?php // echo $form->field($model, 'se_c_os') ?>

    <?php // echo $form->field($model, 'se_a_od') ?>

    <?php // echo $form->field($model, 'se_a_os') ?>

    <?php // echo $form->field($model, 'se_i_od') ?>

    <?php // echo $form->field($model, 'se_i_os') ?>

    <?php // echo $form->field($model, 'se_l_od') ?>

    <?php // echo $form->field($model, 'se_l_os') ?>

    <?php // echo $form->field($model, 'se_v_od') ?>

    <?php // echo $form->field($model, 'se_v_os') ?>

    <?php // echo $form->field($model, 'se_od') ?>

    <?php // echo $form->field($model, 'se_os') ?>

    <?php // echo $form->field($model, 'f_me_od') ?>

    <?php // echo $form->field($model, 'f_me_os') ?>

    <?php // echo $form->field($model, 'f_d_od') ?>

    <?php // echo $form->field($model, 'f_d_os') ?>

    <?php // echo $form->field($model, 'f_c_od') ?>

    <?php // echo $form->field($model, 'f_c_os') ?>

    <?php // echo $form->field($model, 'f_v_od') ?>

    <?php // echo $form->field($model, 'f_v_os') ?>

    <?php // echo $form->field($model, 'f_p_od') ?>

    <?php // echo $form->field($model, 'f_p_os') ?>

    <?php // echo $form->field($model, 'f_ma_od') ?>

    <?php // echo $form->field($model, 'f_m_os') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
