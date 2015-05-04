<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Prescription;

/**
 * PrescriptionSearch represents the model behind the search form about `frontend\models\Prescription`.
 */
class PrescriptionSearch extends Prescription
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'd_od_sph', 'd_od_cyl', 'd_od_axis', 'd_od_prism', 'd_od_add', 'd_os_sph', 'd_os_cyl', 'd_os_axis', 'd_os_prism', 'd_os_add', 'n_od_sph', 'n_od_cyl_cyl', 'n_od_axis', 'n_od_prism', 'n_od_add', 'n_os_sph', 'n_os_cyl', 'n_os_axis', 'n_os_prism', 'n_os_add', 'design_id', 'instruction_id', 'od_bc', 'od_diam', 'od_power', 'os_bc', 'os_diam', 'os_power', 'wear_mode_id', 'solutions_id'], 'integer'],
            [['od_color', 'os_color'], 'safe'],
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
        $query = Prescription::find();

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
            'd_od_sph' => $this->d_od_sph,
            'd_od_cyl' => $this->d_od_cyl,
            'd_od_axis' => $this->d_od_axis,
            'd_od_prism' => $this->d_od_prism,
            'd_od_add' => $this->d_od_add,
            'd_os_sph' => $this->d_os_sph,
            'd_os_cyl' => $this->d_os_cyl,
            'd_os_axis' => $this->d_os_axis,
            'd_os_prism' => $this->d_os_prism,
            'd_os_add' => $this->d_os_add,
            'n_od_sph' => $this->n_od_sph,
            'n_od_cyl_cyl' => $this->n_od_cyl_cyl,
            'n_od_axis' => $this->n_od_axis,
            'n_od_prism' => $this->n_od_prism,
            'n_od_add' => $this->n_od_add,
            'n_os_sph' => $this->n_os_sph,
            'n_os_cyl' => $this->n_os_cyl,
            'n_os_axis' => $this->n_os_axis,
            'n_os_prism' => $this->n_os_prism,
            'n_os_add' => $this->n_os_add,
            'design_id' => $this->design_id,
            'instruction_id' => $this->instruction_id,
            'od_bc' => $this->od_bc,
            'od_diam' => $this->od_diam,
            'od_power' => $this->od_power,
            'os_bc' => $this->os_bc,
            'os_diam' => $this->os_diam,
            'os_power' => $this->os_power,
            'wear_mode_id' => $this->wear_mode_id,
            'solutions_id' => $this->solutions_id,
        ]);

        $query->andFilterWhere(['like', 'od_color', $this->od_color])
            ->andFilterWhere(['like', 'os_color', $this->os_color]);

        return $dataProvider;
    }
}
