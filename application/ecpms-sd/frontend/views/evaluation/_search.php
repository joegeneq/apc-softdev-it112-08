<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EvaluationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evaluation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'record_id') ?>

    <?= $form->field($model, 'v_d_od_sc') ?>

    <?= $form->field($model, 'v_d_od_cc') ?>

    <?= $form->field($model, 'v_d_od_ph') ?>

    <?= $form->field($model, 'v_n_od_sc') ?>

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

    <?php // echo $form->field($model, 'm_eoms_id') ?>

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
