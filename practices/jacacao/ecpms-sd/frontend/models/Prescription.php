<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "prescription".
 *
 * @property integer $record_id
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
 *
 * @property WearMode $wearMode
 * @property Solutions $solutions
 * @property Design $design
 * @property Instruction $instruction
 * @property Record $record
 */
class Prescription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prescription';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id'], 'required'],
            [['record_id', 'd_od_sph', 'd_od_cyl', 'd_od_axis', 'd_od_prism', 'd_od_add', 'd_os_sph', 'd_os_cyl', 'd_os_axis', 'd_os_prism', 'd_os_add', 'n_od_sph', 'n_od_cyl_cyl', 'n_od_axis', 'n_od_prism', 'n_od_add', 'n_os_sph', 'n_os_cyl', 'n_os_axis', 'n_os_prism', 'n_os_add', 'design_id', 'instruction_id', 'od_bc', 'od_diam', 'od_power', 'os_bc', 'os_diam', 'os_power', 'wear_mode_id', 'solutions_id'], 'integer'],
            [['od_color', 'os_color'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'record_id' => 'Record ID',
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWearMode()
    {
        return $this->hasOne(WearMode::className(), ['id' => 'wear_mode_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolutions()
    {
        return $this->hasOne(Solutions::className(), ['id' => 'solutions_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesign()
    {
        return $this->hasOne(Design::className(), ['id' => 'design_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstruction()
    {
        return $this->hasOne(Instruction::className(), ['id' => 'instruction_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(Record::className(), ['record_id' => 'record_id']);
    }
}
