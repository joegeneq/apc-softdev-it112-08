<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Record;

/**
 * RecordSearch represents the model behind the search form about `frontend\models\Record`.
 */
class RecordSearch extends Record
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'record_id', 'insurance_id'], 'integer'],
            [['patient_signature', 'agreed_date', 'employee_signature', 'complaints', 'diagnostic_result', 'management', 'plan_TCB', 'plan_next_visit'], 'safe'],
            [['professional_fee', 'frames_price', 'lenses_price', 'contacts_price', 'solutions_price', 'ancilliary_procedures', 'others', 'senior_citizen', 'person_w_disability', 'deposit', 'balance'], 'number'],
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
        $query = Record::find();

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
            'id' => $this->id,
            'record_id' => $this->record_id,
            'agreed_date' => $this->agreed_date,
            'professional_fee' => $this->professional_fee,
            'frames_price' => $this->frames_price,
            'lenses_price' => $this->lenses_price,
            'contacts_price' => $this->contacts_price,
            'solutions_price' => $this->solutions_price,
            'ancilliary_procedures' => $this->ancilliary_procedures,
            'others' => $this->others,
            'insurance_id' => $this->insurance_id,
            'senior_citizen' => $this->senior_citizen,
            'person_w_disability' => $this->person_w_disability,
            'deposit' => $this->deposit,
            'balance' => $this->balance,
            'plan_next_visit' => $this->plan_next_visit,
        ]);

        $query->andFilterWhere(['like', 'patient_signature', $this->patient_signature])
            ->andFilterWhere(['like', 'employee_signature', $this->employee_signature])
            ->andFilterWhere(['like', 'complaints', $this->complaints])
            ->andFilterWhere(['like', 'diagnostic_result', $this->diagnostic_result])
            ->andFilterWhere(['like', 'management', $this->management])
            ->andFilterWhere(['like', 'plan_TCB', $this->plan_TCB]);

        return $dataProvider;
    }
}
