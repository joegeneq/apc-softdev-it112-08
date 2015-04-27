<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "record".
 *
 * @property integer $patient_id
 * @property integer $employee_id
 * @property integer $record_id
 * @property resource $patient_signature
 * @property string $agreed_date
 * @property resource $employee_signature
 * @property string $complaints
 * @property string $diagnostic_result
 * @property string $management
 * @property string $plan_TCB
 * @property string $plan_next_visit
 * @property string $professional_fee
 * @property string $frames_price
 * @property string $lenses_price
 * @property string $contacts_price
 * @property string $solutions_price
 * @property string $ancilliary_procedures
 * @property string $others
 * @property integer $insurance_id
 * @property string $senior_citizen
 * @property string $person_w_disability
 * @property string $total
 * @property string $deposit
 * @property string $balance
 * @property integer $d_od_sph
 * @property integer $d_od_cyl
 * @property integer $d_od_axis
 * @property integer $d_od_prism
 * @property integer $d_od_add
 * @property integer $d_os_sph
 * @property integer $d_os_cyl
 * @property integer $d_os_axis
 * @property integer $d_os_prism
 * @property integer $d_os_add
 * @property integer $n_od_sph
 * @property integer $n_od_cyl_cyl
 * @property integer $n_od_axis
 * @property integer $n_od_prism
 * @property integer $n_od_add
 * @property integer $n_os_sph
 * @property integer $n_os_cyl
 * @property integer $n_os_axis
 * @property integer $n_os_prism
 * @property integer $n_os_add
 * @property integer $design_id
 * @property integer $instruction_id
 * @property integer $od_bc
 * @property integer $od_diam
 * @property integer $od_power
 * @property string $od_color
 * @property integer $os_bc
 * @property integer $os_diam
 * @property integer $os_power
 * @property string $os_color
 * @property integer $wear_mode_id
 * @property integer $solutions_id
 * @property integer $v_d_od_sc
 * @property integer $v_d_od_cc
 * @property integer $v_d_od_ph
 * @property integer $v_n_od_sc
 * @property integer $v_n_od_cc
 * @property integer $v_d_os_sc
 * @property integer $v_d_os_cc
 * @property integer $v_d_os_ph
 * @property integer $v_n_os_sc
 * @property integer $v_n_os_cc
 * @property integer $v_d_ou_sc
 * @property integer $v_d_ou_cc
 * @property integer $v_d_ou_ph
 * @property integer $v_n_ou_sc
 * @property integer $v_n_ou_cc
 * @property string $r_a_od
 * @property string $r_a_os
 * @property string $r_m_od
 * @property string $r_m_os
 * @property string $r_c_od
 * @property string $r_c_os
 * @property string $r_o_od
 * @property string $r_o_os
 * @property string $r_w_od
 * @property string $r_w_os
 * @property integer $k_h_od
 * @property integer $k_h_os
 * @property integer $k_v_od
 * @property integer $k_v_os
 * @property integer $k_c_od
 * @property integer $k_c_os
 * @property integer $k_a_od
 * @property integer $k_a_os
 * @property integer $t_od
 * @property integer $t_os
 * @property integer $bp_s
 * @property integer $bp_d
 * @property integer $p_d_l
 * @property integer $p_d_v
 * @property integer $p_n_l
 * @property integer $p_n_v
 * @property integer $p_d_bi
 * @property integer $p_d_lbu
 * @property integer $p_n_bi
 * @property integer $p_n_lbu
 * @property integer $p_d_bo
 * @property integer $p_d_lbo
 * @property integer $p_n_bo
 * @property integer $p_n_lbo
 * @property string $pupil_p_od
 * @property string $pupil_p_os
 * @property string $pupil_s_od
 * @property string $pupil_s_os
 * @property string $pupil_rapd
 * @property integer $eoms_id
 * @property string $m_dominant
 * @property string $m_other
 * @property integer $m_p_accom
 * @property integer $m_a_accom
 * @property integer $m_p_conver_num
 * @property integer $m_p_conver_den
 * @property string $color_test
 * @property string $stereo_w4d
 * @property string $confrontation_avf
 * @property string $gross_exam
 * @property string $ee_lids_od
 * @property string $ee_lids_os
 * @property string $ee_c_od
 * @property string $ee_c_os
 * @property string $ee_d_od
 * @property string $ee_d_os
 * @property string $ee_l_od
 * @property string $ee_l_os
 * @property string $ee_t_od
 * @property string $ee_t_os
 * @property string $ee_s_od
 * @property string $ee_s_os
 * @property resource $ee_od
 * @property resource $ee_os
 * @property string $se_c_od
 * @property string $se_c_os
 * @property string $se_a_od
 * @property string $se_a_os
 * @property string $se_i_od
 * @property string $se_i_os
 * @property string $se_l_od
 * @property string $se_l_os
 * @property string $se_v_od
 * @property string $se_v_os
 * @property resource $se_od
 * @property resource $se_os
 * @property integer $f_me_od
 * @property integer $f_me_os
 * @property integer $f_d_od
 * @property integer $f_d_os
 * @property integer $f_c_od
 * @property integer $f_c_os
 * @property string $f_v_od
 * @property string $f_v_os
 * @property string $f_p_od
 * @property string $f_p_os
 * @property string $f_ma_od
 * @property string $f_m_os
 *
 * @property Insurance $insurance
 * @property User $patient
 * @property WearMode $wearMode
 * @property Solutions $solutions
 * @property Design $design
 * @property Instruction $instruction
 * @property Eoms $eoms
 * @property User $employee
 */
class Record extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'employee_id'], 'required'],
            [['patient_id', 'employee_id', 'insurance_id', 'd_od_sph', 'd_od_cyl', 'd_od_axis', 'd_od_prism', 'd_od_add', 'd_os_sph', 'd_os_cyl', 'd_os_axis', 'd_os_prism', 'd_os_add', 'n_od_sph', 'n_od_cyl_cyl', 'n_od_axis', 'n_od_prism', 'n_od_add', 'n_os_sph', 'n_os_cyl', 'n_os_axis', 'n_os_prism', 'n_os_add', 'design_id', 'instruction_id', 'od_bc', 'od_diam', 'od_power', 'os_bc', 'os_diam', 'os_power', 'wear_mode_id', 'solutions_id', 'v_d_od_sc', 'v_d_od_cc', 'v_d_od_ph', 'v_n_od_sc', 'v_n_od_cc', 'v_d_os_sc', 'v_d_os_cc', 'v_d_os_ph', 'v_n_os_sc', 'v_n_os_cc', 'v_d_ou_sc', 'v_d_ou_cc', 'v_d_ou_ph', 'v_n_ou_sc', 'v_n_ou_cc', 'k_h_od', 'k_h_os', 'k_v_od', 'k_v_os', 'k_c_od', 'k_c_os', 'k_a_od', 'k_a_os', 't_od', 't_os', 'bp_s', 'bp_d', 'p_d_l', 'p_d_v', 'p_n_l', 'p_n_v', 'p_d_bi', 'p_d_lbu', 'p_n_bi', 'p_n_lbu', 'p_d_bo', 'p_d_lbo', 'p_n_bo', 'p_n_lbo', 'eoms_id', 'm_p_accom', 'm_a_accom', 'm_p_conver_num', 'm_p_conver_den', 'f_me_od', 'f_me_os', 'f_d_od', 'f_d_os', 'f_c_od', 'f_c_os'], 'integer'],
            [['patient_signature', 'employee_signature', 'complaints', 'diagnostic_result', 'management', 'plan_TCB', 'gross_exam', 'ee_od', 'ee_os', 'se_od', 'se_os'], 'string'],
            [['agreed_date', 'plan_next_visit'], 'safe'],
            [['professional_fee', 'frames_price', 'lenses_price', 'contacts_price', 'solutions_price', 'ancilliary_procedures', 'others', 'senior_citizen', 'person_w_disability', 'total', 'deposit', 'balance', 'r_a_od', 'r_a_os', 'r_m_od', 'r_m_os', 'r_c_od', 'r_c_os', 'r_o_od', 'r_o_os', 'r_w_od', 'r_w_os'], 'number'],
            [['od_color', 'os_color', 'm_dominant', 'm_other', 'color_test', 'stereo_w4d', 'confrontation_avf', 'ee_lids_od', 'ee_lids_os', 'ee_c_od', 'ee_c_os', 'ee_d_od', 'ee_d_os', 'ee_l_od', 'ee_l_os', 'ee_t_od', 'ee_t_os', 'ee_s_od', 'ee_s_os', 'se_c_od', 'se_c_os', 'se_a_od', 'se_a_os', 'se_i_od', 'se_i_os', 'se_l_od', 'se_l_os', 'se_v_od', 'se_v_os', 'f_v_od', 'f_v_os', 'f_p_od', 'f_p_os', 'f_ma_od', 'f_m_os'], 'string', 'max' => 45],
            [['pupil_p_od', 'pupil_p_os', 'pupil_s_od', 'pupil_s_os', 'pupil_rapd'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'employee_id' => 'Employee ID',
            'record_id' => 'Record ID',
            'patient_signature' => 'Patient Signature',
            'agreed_date' => 'Agreed Date',
            'employee_signature' => 'Employee Signature',
            'complaints' => 'Complaints',
            'diagnostic_result' => 'Diagnostic Result',
            'management' => 'Management',
            'plan_TCB' => 'Plan  Tcb',
            'plan_next_visit' => 'Plan Next Visit',
            'professional_fee' => 'Professional Fee',
            'frames_price' => 'Frames Price',
            'lenses_price' => 'Lenses Price',
            'contacts_price' => 'Contacts Price',
            'solutions_price' => 'Solutions Price',
            'ancilliary_procedures' => 'Ancilliary Procedures',
            'others' => 'Others',
            'insurance_id' => 'Insurance ID',
            'senior_citizen' => 'Senior Citizen',
            'person_w_disability' => 'Person W Disability',
            'total' => 'Total',
            'deposit' => 'Deposit',
            'balance' => 'Balance',
            'd_od_sph' => 'D Od Sph',
            'd_od_cyl' => 'D Od Cyl',
            'd_od_axis' => 'D Od Axis',
            'd_od_prism' => 'D Od Prism',
            'd_od_add' => 'D Od Add',
            'd_os_sph' => 'D Os Sph',
            'd_os_cyl' => 'D Os Cyl',
            'd_os_axis' => 'D Os Axis',
            'd_os_prism' => 'D Os Prism',
            'd_os_add' => 'D Os Add',
            'n_od_sph' => 'N Od Sph',
            'n_od_cyl_cyl' => 'N Od Cyl Cyl',
            'n_od_axis' => 'N Od Axis',
            'n_od_prism' => 'N Od Prism',
            'n_od_add' => 'N Od Add',
            'n_os_sph' => 'N Os Sph',
            'n_os_cyl' => 'N Os Cyl',
            'n_os_axis' => 'N Os Axis',
            'n_os_prism' => 'N Os Prism',
            'n_os_add' => 'N Os Add',
            'design_id' => 'Design ID',
            'instruction_id' => 'Instruction ID',
            'od_bc' => 'Od Bc',
            'od_diam' => 'Od Diam',
            'od_power' => 'Od Power',
            'od_color' => 'Od Color',
            'os_bc' => 'Os Bc',
            'os_diam' => 'Os Diam',
            'os_power' => 'Os Power',
            'os_color' => 'Os Color',
            'wear_mode_id' => 'Wear Mode ID',
            'solutions_id' => 'Solutions ID',
            'v_d_od_sc' => 'V D Od Sc',
            'v_d_od_cc' => 'V D Od Cc',
            'v_d_od_ph' => 'V D Od Ph',
            'v_n_od_sc' => 'V N Od Sc',
            'v_n_od_cc' => 'V N Od Cc',
            'v_d_os_sc' => 'V D Os Sc',
            'v_d_os_cc' => 'V D Os Cc',
            'v_d_os_ph' => 'V D Os Ph',
            'v_n_os_sc' => 'V N Os Sc',
            'v_n_os_cc' => 'V N Os Cc',
            'v_d_ou_sc' => 'V D Ou Sc',
            'v_d_ou_cc' => 'V D Ou Cc',
            'v_d_ou_ph' => 'V D Ou Ph',
            'v_n_ou_sc' => 'V N Ou Sc',
            'v_n_ou_cc' => 'V N Ou Cc',
            'r_a_od' => 'R A Od',
            'r_a_os' => 'R A Os',
            'r_m_od' => 'R M Od',
            'r_m_os' => 'R M Os',
            'r_c_od' => 'R C Od',
            'r_c_os' => 'R C Os',
            'r_o_od' => 'R O Od',
            'r_o_os' => 'R O Os',
            'r_w_od' => 'R W Od',
            'r_w_os' => 'R W Os',
            'k_h_od' => 'K H Od',
            'k_h_os' => 'K H Os',
            'k_v_od' => 'K V Od',
            'k_v_os' => 'K V Os',
            'k_c_od' => 'K C Od',
            'k_c_os' => 'K C Os',
            'k_a_od' => 'K A Od',
            'k_a_os' => 'K A Os',
            't_od' => 'T Od',
            't_os' => 'T Os',
            'bp_s' => 'Bp S',
            'bp_d' => 'Bp D',
            'p_d_l' => 'P D L',
            'p_d_v' => 'P D V',
            'p_n_l' => 'P N L',
            'p_n_v' => 'P N V',
            'p_d_bi' => 'P D Bi',
            'p_d_lbu' => 'P D Lbu',
            'p_n_bi' => 'P N Bi',
            'p_n_lbu' => 'P N Lbu',
            'p_d_bo' => 'P D Bo',
            'p_d_lbo' => 'P D Lbo',
            'p_n_bo' => 'P N Bo',
            'p_n_lbo' => 'P N Lbo',
            'pupil_p_od' => 'Pupil P Od',
            'pupil_p_os' => 'Pupil P Os',
            'pupil_s_od' => 'Pupil S Od',
            'pupil_s_os' => 'Pupil S Os',
            'pupil_rapd' => 'Pupil Rapd',
            'eoms_id' => 'Eoms ID',
            'm_dominant' => 'M Dominant',
            'm_other' => 'M Other',
            'm_p_accom' => 'M P Accom',
            'm_a_accom' => 'M A Accom',
            'm_p_conver_num' => 'M P Conver Num',
            'm_p_conver_den' => 'M P Conver Den',
            'color_test' => 'Color Test',
            'stereo_w4d' => 'Stereo W4d',
            'confrontation_avf' => 'Confrontation Avf',
            'gross_exam' => 'Gross Exam',
            'ee_lids_od' => 'Ee Lids Od',
            'ee_lids_os' => 'Ee Lids Os',
            'ee_c_od' => 'Ee C Od',
            'ee_c_os' => 'Ee C Os',
            'ee_d_od' => 'Ee D Od',
            'ee_d_os' => 'Ee D Os',
            'ee_l_od' => 'Ee L Od',
            'ee_l_os' => 'Ee L Os',
            'ee_t_od' => 'Ee T Od',
            'ee_t_os' => 'Ee T Os',
            'ee_s_od' => 'Ee S Od',
            'ee_s_os' => 'Ee S Os',
            'ee_od' => 'Ee Od',
            'ee_os' => 'Ee Os',
            'se_c_od' => 'Se C Od',
            'se_c_os' => 'Se C Os',
            'se_a_od' => 'Se A Od',
            'se_a_os' => 'Se A Os',
            'se_i_od' => 'Se I Od',
            'se_i_os' => 'Se I Os',
            'se_l_od' => 'Se L Od',
            'se_l_os' => 'Se L Os',
            'se_v_od' => 'Se V Od',
            'se_v_os' => 'Se V Os',
            'se_od' => 'Se Od',
            'se_os' => 'Se Os',
            'f_me_od' => 'F Me Od',
            'f_me_os' => 'F Me Os',
            'f_d_od' => 'F D Od',
            'f_d_os' => 'F D Os',
            'f_c_od' => 'F C Od',
            'f_c_os' => 'F C Os',
            'f_v_od' => 'F V Od',
            'f_v_os' => 'F V Os',
            'f_p_od' => 'F P Od',
            'f_p_os' => 'F P Os',
            'f_ma_od' => 'F Ma Od',
            'f_m_os' => 'F M Os',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInsurance()
    {
        return $this->hasOne(Insurance::className(), ['insurance_id' => 'insurance_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(User::className(), ['id' => 'patient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWearMode()
    {
        return $this->hasOne(WearMode::className(), ['wear_mode_id' => 'wear_mode_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolutions()
    {
        return $this->hasOne(Solutions::className(), ['solutions_id' => 'solutions_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesign()
    {
        return $this->hasOne(Design::className(), ['design_id' => 'design_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstruction()
    {
        return $this->hasOne(Instruction::className(), ['instruction_id' => 'instruction_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEoms()
    {
        return $this->hasOne(Eoms::className(), ['eoms_id' => 'eoms_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(User::className(), ['id' => 'employee_id']);
    }
}
