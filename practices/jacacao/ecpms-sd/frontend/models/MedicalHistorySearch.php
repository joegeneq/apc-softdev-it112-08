<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MedicalHistory;

/**
 * MedicalHistorySearch represents the model behind the search form about `frontend\models\MedicalHistory`.
 */
class MedicalHistorySearch extends MedicalHistory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'contact_lens_id', 'comfortability', 'blindness_grand', 'blindness_parents', 'blindness_siblings', 'blindness_children', 'cataracts_grand', 'cataracts_parents', 'cataracts_siblings', 'cataracts_children', 'crossed_eyes_grand', 'crossed_eyes_parents', 'crossed_eyes_siblings', 'crossed_eyes_children', 'glaucoma_grand', 'glaucoma_parents', 'glaucoma_siblings', 'glaucoma_children', 'macular_degeneration_grand', 'macular_degeneration_parents', 'macular_degeneration_siblings', 'macular_degeneration_children', 'retinal_detachment_grand', 'retinal_detachment_parents', 'retinal_detachment_siblings', 'retinal_detachment_children', 'arthritis_grand', 'arthritis_parents', 'arthritis_siblings', 'arthritis_children', 'cancer_grand', 'cancer_parents', 'cancer_siblings', 'cancer_children', 'diabetes_grand', 'diabetes_parents', 'diabetes_siblings', 'diabetes_children', 'heart_disease_grand', 'heart_disease_parents', 'heart_disease_siblings', 'heart_disease_children', 'high_blood_pressure_grand', 'high_blood_pressure_parents', 'high_blood_pressure_siblings', 'high_blood_pressure_children', 'kidney_disease_grand', 'kidney_disease_parents', 'kidney_disease_siblings', 'kidney_disease_children', 'lupus_grand', 'lupus_parents', 'lupus_siblings', 'lupus_children', 'thyroid_disease_grand', 'thyroid_disease_parents', 'thyroid_disease_siblings', 'thyroid_disease_children', 'headaches', 'migrains', 'seizures', 'loss_of_vision', 'blurred_vision', 'distorted_vision', 'loss_of_side_vision', 'double_vision', 'dryness_vision', 'mucous_discharge', 'redness', 'sandy_gritty_feeling', 'itching', 'burning', 'foreign_body_sensation', 'excess_tearing_watering', 'glare_light_sensitivity', 'eye_pain_soreness', 'chronic_infection_of_eye_or_lid', 'sties_chalazion', 'flashes_floaters_of_vision', 'tired_eyes'], 'integer'],
            [['allergies', 'medications', 'treatments', 'eyeglasses', 'eyeglasses_age', 'contact_lens', 'contact_lens_age', 'others'], 'safe'],
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
        $query = MedicalHistory::find();

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
            'user_id' => $this->user_id,
            'contact_lens_id' => $this->contact_lens_id,
            'comfortability' => $this->comfortability,
            'blindness_grand' => $this->blindness_grand,
            'blindness_parents' => $this->blindness_parents,
            'blindness_siblings' => $this->blindness_siblings,
            'blindness_children' => $this->blindness_children,
            'cataracts_grand' => $this->cataracts_grand,
            'cataracts_parents' => $this->cataracts_parents,
            'cataracts_siblings' => $this->cataracts_siblings,
            'cataracts_children' => $this->cataracts_children,
            'crossed_eyes_grand' => $this->crossed_eyes_grand,
            'crossed_eyes_parents' => $this->crossed_eyes_parents,
            'crossed_eyes_siblings' => $this->crossed_eyes_siblings,
            'crossed_eyes_children' => $this->crossed_eyes_children,
            'glaucoma_grand' => $this->glaucoma_grand,
            'glaucoma_parents' => $this->glaucoma_parents,
            'glaucoma_siblings' => $this->glaucoma_siblings,
            'glaucoma_children' => $this->glaucoma_children,
            'macular_degeneration_grand' => $this->macular_degeneration_grand,
            'macular_degeneration_parents' => $this->macular_degeneration_parents,
            'macular_degeneration_siblings' => $this->macular_degeneration_siblings,
            'macular_degeneration_children' => $this->macular_degeneration_children,
            'retinal_detachment_grand' => $this->retinal_detachment_grand,
            'retinal_detachment_parents' => $this->retinal_detachment_parents,
            'retinal_detachment_siblings' => $this->retinal_detachment_siblings,
            'retinal_detachment_children' => $this->retinal_detachment_children,
            'arthritis_grand' => $this->arthritis_grand,
            'arthritis_parents' => $this->arthritis_parents,
            'arthritis_siblings' => $this->arthritis_siblings,
            'arthritis_children' => $this->arthritis_children,
            'cancer_grand' => $this->cancer_grand,
            'cancer_parents' => $this->cancer_parents,
            'cancer_siblings' => $this->cancer_siblings,
            'cancer_children' => $this->cancer_children,
            'diabetes_grand' => $this->diabetes_grand,
            'diabetes_parents' => $this->diabetes_parents,
            'diabetes_siblings' => $this->diabetes_siblings,
            'diabetes_children' => $this->diabetes_children,
            'heart_disease_grand' => $this->heart_disease_grand,
            'heart_disease_parents' => $this->heart_disease_parents,
            'heart_disease_siblings' => $this->heart_disease_siblings,
            'heart_disease_children' => $this->heart_disease_children,
            'high_blood_pressure_grand' => $this->high_blood_pressure_grand,
            'high_blood_pressure_parents' => $this->high_blood_pressure_parents,
            'high_blood_pressure_siblings' => $this->high_blood_pressure_siblings,
            'high_blood_pressure_children' => $this->high_blood_pressure_children,
            'kidney_disease_grand' => $this->kidney_disease_grand,
            'kidney_disease_parents' => $this->kidney_disease_parents,
            'kidney_disease_siblings' => $this->kidney_disease_siblings,
            'kidney_disease_children' => $this->kidney_disease_children,
            'lupus_grand' => $this->lupus_grand,
            'lupus_parents' => $this->lupus_parents,
            'lupus_siblings' => $this->lupus_siblings,
            'lupus_children' => $this->lupus_children,
            'thyroid_disease_grand' => $this->thyroid_disease_grand,
            'thyroid_disease_parents' => $this->thyroid_disease_parents,
            'thyroid_disease_siblings' => $this->thyroid_disease_siblings,
            'thyroid_disease_children' => $this->thyroid_disease_children,
            'headaches' => $this->headaches,
            'migrains' => $this->migrains,
            'seizures' => $this->seizures,
            'loss_of_vision' => $this->loss_of_vision,
            'blurred_vision' => $this->blurred_vision,
            'distorted_vision' => $this->distorted_vision,
            'loss_of_side_vision' => $this->loss_of_side_vision,
            'double_vision' => $this->double_vision,
            'dryness_vision' => $this->dryness_vision,
            'mucous_discharge' => $this->mucous_discharge,
            'redness' => $this->redness,
            'sandy_gritty_feeling' => $this->sandy_gritty_feeling,
            'itching' => $this->itching,
            'burning' => $this->burning,
            'foreign_body_sensation' => $this->foreign_body_sensation,
            'excess_tearing_watering' => $this->excess_tearing_watering,
            'glare_light_sensitivity' => $this->glare_light_sensitivity,
            'eye_pain_soreness' => $this->eye_pain_soreness,
            'chronic_infection_of_eye_or_lid' => $this->chronic_infection_of_eye_or_lid,
            'sties_chalazion' => $this->sties_chalazion,
            'flashes_floaters_of_vision' => $this->flashes_floaters_of_vision,
            'tired_eyes' => $this->tired_eyes,
        ]);

        $query->andFilterWhere(['like', 'allergies', $this->allergies])
            ->andFilterWhere(['like', 'medications', $this->medications])
            ->andFilterWhere(['like', 'treatments', $this->treatments])
            ->andFilterWhere(['like', 'eyeglasses', $this->eyeglasses])
            ->andFilterWhere(['like', 'eyeglasses_age', $this->eyeglasses_age])
            ->andFilterWhere(['like', 'contact_lens', $this->contact_lens])
            ->andFilterWhere(['like', 'contact_lens_age', $this->contact_lens_age])
            ->andFilterWhere(['like', 'others', $this->others]);

        return $dataProvider;
    }
}
