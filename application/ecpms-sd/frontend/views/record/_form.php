<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\User;
/* @var $this yii\web\View */
/* @var $model frontend\models\Record */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="record-form">

    <?php $form = ActiveForm::begin(); ?>
<center><table><tr><td style="width: 300px;"><?php
        $patients=User::find()->all();
        $listData=ArrayHelper::map($patients, 'id', 'lastname');
        echo $form->field($model, 'patient_id')->dropDownList(
            $listData,['prompt'=>'Lastname']);
        ?></td>
                <td style="width: 300px;"><?php
        $patients=User::find()->all();
        $listData=ArrayHelper::map($patients, 'id', 'firstname');
        echo $form->field($model, 'patient_id')->dropDownList(
            $listData,['prompt'=>'Firstname']);
    ?></td>
                <td style="width: 300px;"><?php
        $patients=User::find()->all();
        $listData=ArrayHelper::map($patients, 'id', 'middlename');
        echo $form->field($model, 'patient_id')->dropDownList(
            $listData,['prompt'=>'Middlename']);
    ?></td></tr>
    <tr><td style="width: 300px;"><?php
        $employees=User::find()->all();
        $listData=ArrayHelper::map($employees, 'id', 'lastname');
        echo $form->field($model, 'employee_id')->dropDownList(
            $listData,['prompt'=>'Employee']);
        ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'employee_signature')->textInput() ?></td></tr></table></center>
    


    <?= $form->field($model, 'patient_signature')->textInput() ?>

    <?= $form->field($model, 'agreed_date')->textInput() ?>

    

    <?= $form->field($model, 'complaints')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnostic_result')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'management')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plan_TCB')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plan_next_visit')->textInput() ?>

    <?= $form->field($model, 'professional_fee')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'frames_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'lenses_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'contacts_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'solutions_price')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'ancilliary_procedures')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'others')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'insurance_id')->textInput() ?>

    <?= $form->field($model, 'senior_citizen')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'person_w_disability')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'deposit')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'balance')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'd_od_sph')->textInput() ?>

    <?= $form->field($model, 'd_od_cyl')->textInput() ?>

    <?= $form->field($model, 'd_od_axis')->textInput() ?>

    <?= $form->field($model, 'd_od_prism')->textInput() ?>

    <?= $form->field($model, 'd_od_add')->textInput() ?>

    <?= $form->field($model, 'd_os_sph')->textInput() ?>

    <?= $form->field($model, 'd_os_cyl')->textInput() ?>

    <?= $form->field($model, 'd_os_axis')->textInput() ?>

    <?= $form->field($model, 'd_os_prism')->textInput() ?>

    <?= $form->field($model, 'd_os_add')->textInput() ?>

    <?= $form->field($model, 'n_od_sph')->textInput() ?>

    <?= $form->field($model, 'n_od_cyl_cyl')->textInput() ?>

    <?= $form->field($model, 'n_od_axis')->textInput() ?>

    <?= $form->field($model, 'n_od_prism')->textInput() ?>

    <?= $form->field($model, 'n_od_add')->textInput() ?>

    <?= $form->field($model, 'n_os_sph')->textInput() ?>

    <?= $form->field($model, 'n_os_cyl')->textInput() ?>

    <?= $form->field($model, 'n_os_axis')->textInput() ?>

    <?= $form->field($model, 'n_os_prism')->textInput() ?>

    <?= $form->field($model, 'n_os_add')->textInput() ?>

    <?= $form->field($model, 'design_id')->textInput() ?>

    <?= $form->field($model, 'instruction_id')->textInput() ?>

    <?= $form->field($model, 'od_bc')->textInput() ?>

    <?= $form->field($model, 'od_diam')->textInput() ?>

    <?= $form->field($model, 'od_power')->textInput() ?>

    <?= $form->field($model, 'od_color')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'os_bc')->textInput() ?>

    <?= $form->field($model, 'os_diam')->textInput() ?>

    <?= $form->field($model, 'os_power')->textInput() ?>

    <?= $form->field($model, 'os_color')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'wear_mode_id')->textInput() ?>

    <?= $form->field($model, 'solutions_id')->textInput() ?>

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

    <?= $form->field($model, 'k_h_od')->textInput() ?>

    <?= $form->field($model, 'k_h_os')->textInput() ?>

    <?= $form->field($model, 'k_v_od')->textInput() ?>

    <?= $form->field($model, 'k_v_os')->textInput() ?>

    <?= $form->field($model, 'k_c_od')->textInput() ?>

    <?= $form->field($model, 'k_c_os')->textInput() ?>

    <?= $form->field($model, 'k_a_od')->textInput() ?>

    <?= $form->field($model, 'k_a_os')->textInput() ?>

    <?= $form->field($model, 't_od')->textInput() ?>

    <?= $form->field($model, 't_os')->textInput() ?>

    <?= $form->field($model, 'bp_s')->textInput() ?>

    <?= $form->field($model, 'bp_d')->textInput() ?>

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

    <?= $form->field($model, 'color_test')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'stereo_w4d')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'confrontation_avf')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'gross_exam')->textarea(['rows' => 6]) ?>

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
