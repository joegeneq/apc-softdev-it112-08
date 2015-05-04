<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Evaluation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evaluation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'record_id')->textInput() ?>

    <?= $form->field($model, 'color_test')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'stereo_w4d')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'confrontation_avf')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'gross_exam')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnostic_result')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'management')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plan_TCB')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plan_next_visit')->textInput() ?>

    <?= $form->field($model, 'v_d_od_sc')->textInput() ?>

    <?= $form->field($model, 'v_d_od_cc')->textInput() ?>

    <?= $form->field($model, 'v_d_od_ph')->textInput() ?>

    <?= $form->field($model, 'v_n_od_sc')->textInput() ?>

    <?= $form->field($model, 'v_n_od_cc')->textInput() ?>

    <?= $form->field($model, 'v_d_os_sc')->textInput() ?>

    <?= $form->field($model, 'v_d_os_cc')->textInput() ?>

    <?= $form->field($model, 'v_d_os_ph')->textInput() ?>

    <?= $form->field($model, 'v_n_os_sc')->textInput() ?>

    <?= $form->field($model, 'v_n_os_cc')->textInput() ?>

    <?= $form->field($model, 'v_d_ou_sc')->textInput() ?>

    <?= $form->field($model, 'v_d_ou_cc')->textInput() ?>

    <?= $form->field($model, 'v_d_ou_ph')->textInput() ?>

    <?= $form->field($model, 'v_n_ou_sc')->textInput() ?>

    <?= $form->field($model, 'v_n_ou_cc')->textInput() ?>

    <?= $form->field($model, 'r_a_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'r_a_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'r_m_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'r_m_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'r_c_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'r_c_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'r_o_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'r_o_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'r_w_od')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'r_w_os')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'k_v_od')->textInput() ?>

    <?= $form->field($model, 'k_v_os')->textInput() ?>

    <?= $form->field($model, 'k_c_od')->textInput() ?>

    <?= $form->field($model, 'k_c_os')->textInput() ?>

    <?= $form->field($model, 'k_a_od')->textInput() ?>

    <?= $form->field($model, 'k_a_os')->textInput() ?>

    <?= $form->field($model, 'k_h_od')->textInput() ?>

    <?= $form->field($model, 'k_h_os')->textInput() ?>

    <?= $form->field($model, 't_od')->textInput() ?>

    <?= $form->field($model, 't_os')->textInput() ?>

    <?= $form->field($model, 'p_d_l')->textInput() ?>

    <?= $form->field($model, 'p_d_v')->textInput() ?>

    <?= $form->field($model, 'p_n_l')->textInput() ?>

    <?= $form->field($model, 'p_n_v')->textInput() ?>

    <?= $form->field($model, 'p_d_bi')->textInput() ?>

    <?= $form->field($model, 'p_d_lbu')->textInput() ?>

    <?= $form->field($model, 'p_n_bi')->textInput() ?>

    <?= $form->field($model, 'p_n_lbu')->textInput() ?>

    <?= $form->field($model, 'p_d_bo')->textInput() ?>

    <?= $form->field($model, 'p_d_lbo')->textInput() ?>

    <?= $form->field($model, 'p_n_bo')->textInput() ?>

    <?= $form->field($model, 'p_n_lbo')->textInput() ?>

    <?= $form->field($model, 'bp_s')->textInput() ?>

    <?= $form->field($model, 'bp_d')->textInput() ?>

    <?= $form->field($model, 'pupil_p_od')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'pupil_p_os')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'pupil_s_od')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'pupil_s_os')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'pupil_rapd')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'eoms_id')->textInput() ?>

    <?= $form->field($model, 'm_dominant')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'm_other')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'm_p_accom')->textInput() ?>

    <?= $form->field($model, 'm_a_accom')->textInput() ?>

    <?= $form->field($model, 'm_p_conver_num')->textInput() ?>

    <?= $form->field($model, 'm_p_conver_den')->textInput() ?>

    <?= $form->field($model, 'ee_lids_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_lids_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_c_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_c_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_d_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_d_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_l_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_l_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_t_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_t_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_s_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_s_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ee_od')->textInput() ?>

    <?= $form->field($model, 'ee_os')->textInput() ?>

    <?= $form->field($model, 'se_c_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_c_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_a_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_a_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_i_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_i_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_l_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_l_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_v_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_v_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'se_od')->textInput() ?>

    <?= $form->field($model, 'se_os')->textInput() ?>

    <?= $form->field($model, 'f_me_od')->textInput() ?>

    <?= $form->field($model, 'f_me_os')->textInput() ?>

    <?= $form->field($model, 'f_d_od')->textInput() ?>

    <?= $form->field($model, 'f_d_os')->textInput() ?>

    <?= $form->field($model, 'f_c_od')->textInput() ?>

    <?= $form->field($model, 'f_c_os')->textInput() ?>

    <?= $form->field($model, 'f_v_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'f_v_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'f_p_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'f_p_os')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'f_ma_od')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'f_m_os')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
