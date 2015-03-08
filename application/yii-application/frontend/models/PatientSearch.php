<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Patient;

/**
 * PatientSearch represents the model behind the search form about `frontend\models\Patient`.
 */
class PatientSearch extends Patient
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'user_id', 'patient_add_city_id', 'patient_glasses_age', 'patient_contact_lens_age', 'contact_lens_id'], 'integer'],
            [['patient_lname', 'patient_fname', 'patient_mname', 'patient_birthday', 'patient_sex', 'patient_facebook', 'patient_landline', 'patient_cel1', 'patient_cel2', 'patient_company', 'patient_add_work', 'patient_contact_work', 'patient_add_street', 'patient_add_town_subd_vill', 'patient_add_number', 'patientl_allergies', 'patient_medications', 'patient_treatments', 'patient_pregnant', 'patient_glasses', 'patient_contact_lens'], 'safe'],
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
        $query = Patient::find();

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
            'patient_id' => $this->patient_id,
            'patient_birthday' => $this->patient_birthday,
            'user_id' => $this->user_id,
            'patient_add_city_id' => $this->patient_add_city_id,
            'patient_glasses_age' => $this->patient_glasses_age,
            'patient_contact_lens_age' => $this->patient_contact_lens_age,
            'contact_lens_id' => $this->contact_lens_id,
        ]);

        $query->andFilterWhere(['like', 'patient_lname', $this->patient_lname])
            ->andFilterWhere(['like', 'patient_fname', $this->patient_fname])
            ->andFilterWhere(['like', 'patient_mname', $this->patient_mname])
            ->andFilterWhere(['like', 'patient_sex', $this->patient_sex])
            ->andFilterWhere(['like', 'patient_facebook', $this->patient_facebook])
            ->andFilterWhere(['like', 'patient_landline', $this->patient_landline])
            ->andFilterWhere(['like', 'patient_cel1', $this->patient_cel1])
            ->andFilterWhere(['like', 'patient_cel2', $this->patient_cel2])
            ->andFilterWhere(['like', 'patient_company', $this->patient_company])
            ->andFilterWhere(['like', 'patient_add_work', $this->patient_add_work])
            ->andFilterWhere(['like', 'patient_contact_work', $this->patient_contact_work])
            ->andFilterWhere(['like', 'patient_add_street', $this->patient_add_street])
            ->andFilterWhere(['like', 'patient_add_town_subd_vill', $this->patient_add_town_subd_vill])
            ->andFilterWhere(['like', 'patient_add_number', $this->patient_add_number])
            ->andFilterWhere(['like', 'patientl_allergies', $this->patientl_allergies])
            ->andFilterWhere(['like', 'patient_medications', $this->patient_medications])
            ->andFilterWhere(['like', 'patient_treatments', $this->patient_treatments])
            ->andFilterWhere(['like', 'patient_pregnant', $this->patient_pregnant])
            ->andFilterWhere(['like', 'patient_glasses', $this->patient_glasses])
            ->andFilterWhere(['like', 'patient_contact_lens', $this->patient_contact_lens]);

        return $dataProvider;
    }
}
