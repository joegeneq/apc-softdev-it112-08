<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Evaluation;

/**
 * EvaluationSearch represents the model behind the search form about `frontend\models\Evaluation`.
 */
class EvaluationSearch extends Evaluation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'v_d_od_sc', 'v_d_od_cc', 'v_d_od_ph', 'v_n_od_sc', 'v_n_od_cc', 'v_d_os_sc', 'v_d_os_cc', 'v_d_os_ph', 'v_n_os_sc', 'v_n_os_cc', 'v_d_ou_sc', 'v_d_ou_cc', 'v_d_ou_ph', 'v_n_ou_sc', 'v_n_ou_cc', 'k_v_od', 'k_v_os', 'k_c_od', 'k_c_os', 'k_a_od', 'k_a_os', 'k_h_od', 'k_h_os', 't_od', 't_os', 'p_d_l', 'p_d_v', 'p_n_l', 'p_n_v', 'p_d_bi', 'p_d_lbu', 'p_n_bi', 'p_n_lbu', 'p_d_bo', 'p_d_lbo', 'p_n_bo', 'p_n_lbo', 'bp_s', 'bp_d', 'eoms_id', 'm_p_accom', 'm_a_accom', 'm_p_conver_num', 'm_p_conver_den', 'f_me_od', 'f_me_os', 'f_d_od', 'f_d_os', 'f_c_od', 'f_c_os'], 'integer'],
            [['color_test', 'stereo_w4d', 'confrontation_avf', 'gross_exam', 'diagnostic_result', 'management', 'plan_TCB', 'plan_next_visit', 'pupil_p_od', 'pupil_p_os', 'pupil_s_od', 'pupil_s_os', 'pupil_rapd', 'm_dominant', 'm_other', 'ee_lids_od', 'ee_lids_os', 'ee_c_od', 'ee_c_os', 'ee_d_od', 'ee_d_os', 'ee_l_od', 'ee_l_os', 'ee_t_od', 'ee_t_os', 'ee_s_od', 'ee_s_os', 'ee_od', 'ee_os', 'se_c_od', 'se_c_os', 'se_a_od', 'se_a_os', 'se_i_od', 'se_i_os', 'se_l_od', 'se_l_os', 'se_v_od', 'se_v_os', 'se_od', 'se_os', 'f_v_od', 'f_v_os', 'f_p_od', 'f_p_os', 'f_ma_od', 'f_m_os'], 'safe'],
            [['r_a_od', 'r_a_os', 'r_m_od', 'r_m_os', 'r_c_od', 'r_c_os', 'r_o_od', 'r_o_os', 'r_w_od', 'r_w_os'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Evaluation::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'record_id' => $this->record_id,
            'plan_next_visit' => $this->plan_next_visit,
            'v_d_od_sc' => $this->v_d_od_sc,
            'v_d_od_cc' => $this->v_d_od_cc,
            'v_d_od_ph' => $this->v_d_od_ph,
            'v_n_od_sc' => $this->v_n_od_sc,
            'v_n_od_cc' => $this->v_n_od_cc,
            'v_d_os_sc' => $this->v_d_os_sc,
            'v_d_os_cc' => $this->v_d_os_cc,
            'v_d_os_ph' => $this->v_d_os_ph,
            'v_n_os_sc' => $this->v_n_os_sc,
            'v_n_os_cc' => $this->v_n_os_cc,
            'v_d_ou_sc' => $this->v_d_ou_sc,
            'v_d_ou_cc' => $this->v_d_ou_cc,
            'v_d_ou_ph' => $this->v_d_ou_ph,
            'v_n_ou_sc' => $this->v_n_ou_sc,
            'v_n_ou_cc' => $this->v_n_ou_cc,
            'r_a_od' => $this->r_a_od,
            'r_a_os' => $this->r_a_os,
            'r_m_od' => $this->r_m_od,
            'r_m_os' => $this->r_m_os,
            'r_c_od' => $this->r_c_od,
            'r_c_os' => $this->r_c_os,
            'r_o_od' => $this->r_o_od,
            'r_o_os' => $this->r_o_os,
            'r_w_od' => $this->r_w_od,
            'r_w_os' => $this->r_w_os,
            'k_v_od' => $this->k_v_od,
            'k_v_os' => $this->k_v_os,
            'k_c_od' => $this->k_c_od,
            'k_c_os' => $this->k_c_os,
            'k_a_od' => $this->k_a_od,
            'k_a_os' => $this->k_a_os,
            'k_h_od' => $this->k_h_od,
            'k_h_os' => $this->k_h_os,
            't_od' => $this->t_od,
            't_os' => $this->t_os,
            'p_d_l' => $this->p_d_l,
            'p_d_v' => $this->p_d_v,
            'p_n_l' => $this->p_n_l,
            'p_n_v' => $this->p_n_v,
            'p_d_bi' => $this->p_d_bi,
            'p_d_lbu' => $this->p_d_lbu,
            'p_n_bi' => $this->p_n_bi,
            'p_n_lbu' => $this->p_n_lbu,
            'p_d_bo' => $this->p_d_bo,
            'p_d_lbo' => $this->p_d_lbo,
            'p_n_bo' => $this->p_n_bo,
            'p_n_lbo' => $this->p_n_lbo,
            'bp_s' => $this->bp_s,
            'bp_d' => $this->bp_d,
            'eoms_id' => $this->eoms_id,
            'm_p_accom' => $this->m_p_accom,
            'm_a_accom' => $this->m_a_accom,
            'm_p_conver_num' => $this->m_p_conver_num,
            'm_p_conver_den' => $this->m_p_conver_den,
            'f_me_od' => $this->f_me_od,
            'f_me_os' => $this->f_me_os,
            'f_d_od' => $this->f_d_od,
            'f_d_os' => $this->f_d_os,
            'f_c_od' => $this->f_c_od,
            'f_c_os' => $this->f_c_os,
        ]);

        $query->andFilterWhere(['like', 'color_test', $this->color_test])
            ->andFilterWhere(['like', 'stereo_w4d', $this->stereo_w4d])
            ->andFilterWhere(['like', 'confrontation_avf', $this->confrontation_avf])
            ->andFilterWhere(['like', 'gross_exam', $this->gross_exam])
            ->andFilterWhere(['like', 'diagnostic_result', $this->diagnostic_result])
            ->andFilterWhere(['like', 'management', $this->management])
            ->andFilterWhere(['like', 'plan_TCB', $this->plan_TCB])
            ->andFilterWhere(['like', 'pupil_p_od', $this->pupil_p_od])
            ->andFilterWhere(['like', 'pupil_p_os', $this->pupil_p_os])
            ->andFilterWhere(['like', 'pupil_s_od', $this->pupil_s_od])
            ->andFilterWhere(['like', 'pupil_s_os', $this->pupil_s_os])
            ->andFilterWhere(['like', 'pupil_rapd', $this->pupil_rapd])
            ->andFilterWhere(['like', 'm_dominant', $this->m_dominant])
            ->andFilterWhere(['like', 'm_other', $this->m_other])
            ->andFilterWhere(['like', 'ee_lids_od', $this->ee_lids_od])
            ->andFilterWhere(['like', 'ee_lids_os', $this->ee_lids_os])
            ->andFilterWhere(['like', 'ee_c_od', $this->ee_c_od])
            ->andFilterWhere(['like', 'ee_c_os', $this->ee_c_os])
            ->andFilterWhere(['like', 'ee_d_od', $this->ee_d_od])
            ->andFilterWhere(['like', 'ee_d_os', $this->ee_d_os])
            ->andFilterWhere(['like', 'ee_l_od', $this->ee_l_od])
            ->andFilterWhere(['like', 'ee_l_os', $this->ee_l_os])
            ->andFilterWhere(['like', 'ee_t_od', $this->ee_t_od])
            ->andFilterWhere(['like', 'ee_t_os', $this->ee_t_os])
            ->andFilterWhere(['like', 'ee_s_od', $this->ee_s_od])
            ->andFilterWhere(['like', 'ee_s_os', $this->ee_s_os])
            ->andFilterWhere(['like', 'ee_od', $this->ee_od])
            ->andFilterWhere(['like', 'ee_os', $this->ee_os])
            ->andFilterWhere(['like', 'se_c_od', $this->se_c_od])
            ->andFilterWhere(['like', 'se_c_os', $this->se_c_os])
            ->andFilterWhere(['like', 'se_a_od', $this->se_a_od])
            ->andFilterWhere(['like', 'se_a_os', $this->se_a_os])
            ->andFilterWhere(['like', 'se_i_od', $this->se_i_od])
            ->andFilterWhere(['like', 'se_i_os', $this->se_i_os])
            ->andFilterWhere(['like', 'se_l_od', $this->se_l_od])
            ->andFilterWhere(['like', 'se_l_os', $this->se_l_os])
            ->andFilterWhere(['like', 'se_v_od', $this->se_v_od])
            ->andFilterWhere(['like', 'se_v_os', $this->se_v_os])
            ->andFilterWhere(['like', 'se_od', $this->se_od])
            ->andFilterWhere(['like', 'se_os', $this->se_os])
            ->andFilterWhere(['like', 'f_v_od', $this->f_v_od])
            ->andFilterWhere(['like', 'f_v_os', $this->f_v_os])
            ->andFilterWhere(['like', 'f_p_od', $this->f_p_od])
            ->andFilterWhere(['like', 'f_p_os', $this->f_p_os])
            ->andFilterWhere(['like', 'f_ma_od', $this->f_ma_od])
            ->andFilterWhere(['like', 'f_m_os', $this->f_m_os]);

        return $dataProvider;
    }
}
