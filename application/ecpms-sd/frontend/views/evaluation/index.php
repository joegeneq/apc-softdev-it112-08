<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EvaluationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Evaluations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Evaluation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'record_id',
            'v_d_od_sc',
            'v_d_od_cc',
            'v_d_od_ph',
            'v_n_od_sc',
            // 'v_n_od_cc',
            // 'v_d_os_sc',
            // 'v_d_os_cc',
            // 'v_d_os_ph',
            // 'v_n_os_sc',
            // 'v_n_os_cc',
            // 'v_d_ou_sc',
            // 'v_d_ou_cc',
            // 'v_d_ou_ph',
            // 'v_n_ou_sc',
            // 'v_n_ou_cc',
            // 'r_a_od',
            // 'r_a_os',
            // 'r_m_od',
            // 'r_m_os',
            // 'r_c_od',
            // 'r_c_os',
            // 'r_o_od',
            // 'r_o_os',
            // 'r_w_od',
            // 'r_w_os',
            // 'k_h_od',
            // 'k_h_os',
            // 'k_v_od',
            // 'k_v_os',
            // 'k_c_od',
            // 'k_c_os',
            // 'k_a_od',
            // 'k_a_os',
            // 't_od',
            // 't_os',
            // 'bp_s',
            // 'bp_d',
            // 'p_d_l',
            // 'p_d_v',
            // 'p_n_l',
            // 'p_n_v',
            // 'p_d_bi',
            // 'p_d_lbu',
            // 'p_n_bi',
            // 'p_n_lbu',
            // 'p_d_bo',
            // 'p_d_lbo',
            // 'p_n_bo',
            // 'p_n_lbo',
            // 'pupil_p_od',
            // 'pupil_p_os',
            // 'pupil_s_od',
            // 'pupil_s_os',
            // 'pupil_rapd',
            // 'eoms_id',
            // 'm_eoms_id',
            // 'm_dominant',
            // 'm_other',
            // 'm_p_accom',
            // 'm_a_accom',
            // 'm_p_conver_num',
            // 'm_p_conver_den',
            // 'color_test',
            // 'stereo_w4d',
            // 'confrontation_avf',
            // 'gross_exam:ntext',
            // 'ee_lids_od',
            // 'ee_lids_os',
            // 'ee_c_od',
            // 'ee_c_os',
            // 'ee_d_od',
            // 'ee_d_os',
            // 'ee_l_od',
            // 'ee_l_os',
            // 'ee_t_od',
            // 'ee_t_os',
            // 'ee_s_od',
            // 'ee_s_os',
            // 'ee_od',
            // 'ee_os',
            // 'se_c_od',
            // 'se_c_os',
            // 'se_a_od',
            // 'se_a_os',
            // 'se_i_od',
            // 'se_i_os',
            // 'se_l_od',
            // 'se_l_os',
            // 'se_v_od',
            // 'se_v_os',
            // 'se_od',
            // 'se_os',
            // 'f_me_od',
            // 'f_me_os',
            // 'f_d_od',
            // 'f_d_os',
            // 'f_c_od',
            // 'f_c_os',
            // 'f_v_od',
            // 'f_v_os',
            // 'f_p_od',
            // 'f_p_os',
            // 'f_ma_od',
            // 'f_m_os',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
