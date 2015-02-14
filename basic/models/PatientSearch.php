<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Patient;

/**
 * PatientSearch represents the model behind the search form about `app\models\Patient`.
 */
class PatientSearch extends Patient
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PATIENT_ID', 'PATIENT_CITY', 'PATIENT_COUNTRY_ID', 'PATIENT_COMPANY_NUMBER', 'PATIENT_SPORTS', 'PATIENT_LANDLINE', 'PATIENT_CELL', 'PATIENT_HISTORY_PERSONAL_ID', 'PATIENT_HISTORY_FAMILY_ID', 'PATIENT_PERSONAL_EXPERIENCE', 'PATIENT_HEALTH_CARD'], 'integer'],
            [['PATIENT_NAME_LAST', 'PATIENT_NAME_FIRST', 'PATIENT_NAME_MIDDLE', 'PATIENT_BDAY', 'PATIENT_SEX', 'PATIENT_HOME', 'PATIENT_OCCUPATION', 'PATIENT_COMPANY_NAME', 'PATIENT_EMAIL1', 'PATIENT_EMAIL2', 'PATIENT_FACEBOOK', 'PATIENT_ALLERGIES', 'PATIENT_MEDICATIONS', 'PATIENT_INJURIES_SURGERIES_HOSPITALIZATION', 'PATIENT_REFERRED_BY', 'PATIENT_REGISTRATION'], 'safe'],
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
            'PATIENT_ID' => $this->PATIENT_ID,
            'PATIENT_BDAY' => $this->PATIENT_BDAY,
            'PATIENT_CITY' => $this->PATIENT_CITY,
            'PATIENT_COUNTRY_ID' => $this->PATIENT_COUNTRY_ID,
            'PATIENT_COMPANY_NUMBER' => $this->PATIENT_COMPANY_NUMBER,
            'PATIENT_SPORTS' => $this->PATIENT_SPORTS,
            'PATIENT_LANDLINE' => $this->PATIENT_LANDLINE,
            'PATIENT_CELL' => $this->PATIENT_CELL,
            'PATIENT_HISTORY_PERSONAL_ID' => $this->PATIENT_HISTORY_PERSONAL_ID,
            'PATIENT_HISTORY_FAMILY_ID' => $this->PATIENT_HISTORY_FAMILY_ID,
            'PATIENT_PERSONAL_EXPERIENCE' => $this->PATIENT_PERSONAL_EXPERIENCE,
            'PATIENT_HEALTH_CARD' => $this->PATIENT_HEALTH_CARD,
            'PATIENT_REGISTRATION' => $this->PATIENT_REGISTRATION,
        ]);

        $query->andFilterWhere(['like', 'PATIENT_NAME_LAST', $this->PATIENT_NAME_LAST])
            ->andFilterWhere(['like', 'PATIENT_NAME_FIRST', $this->PATIENT_NAME_FIRST])
            ->andFilterWhere(['like', 'PATIENT_NAME_MIDDLE', $this->PATIENT_NAME_MIDDLE])
            ->andFilterWhere(['like', 'PATIENT_SEX', $this->PATIENT_SEX])
            ->andFilterWhere(['like', 'PATIENT_HOME', $this->PATIENT_HOME])
            ->andFilterWhere(['like', 'PATIENT_OCCUPATION', $this->PATIENT_OCCUPATION])
            ->andFilterWhere(['like', 'PATIENT_COMPANY_NAME', $this->PATIENT_COMPANY_NAME])
            ->andFilterWhere(['like', 'PATIENT_EMAIL1', $this->PATIENT_EMAIL1])
            ->andFilterWhere(['like', 'PATIENT_EMAIL2', $this->PATIENT_EMAIL2])
            ->andFilterWhere(['like', 'PATIENT_FACEBOOK', $this->PATIENT_FACEBOOK])
            ->andFilterWhere(['like', 'PATIENT_ALLERGIES', $this->PATIENT_ALLERGIES])
            ->andFilterWhere(['like', 'PATIENT_MEDICATIONS', $this->PATIENT_MEDICATIONS])
            ->andFilterWhere(['like', 'PATIENT_INJURIES_SURGERIES_HOSPITALIZATION', $this->PATIENT_INJURIES_SURGERIES_HOSPITALIZATION])
            ->andFilterWhere(['like', 'PATIENT_REFERRED_BY', $this->PATIENT_REFERRED_BY]);

        return $dataProvider;
    }
}
