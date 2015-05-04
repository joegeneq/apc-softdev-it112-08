<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Accounting;

/**
 * AccountingSearch represents the model behind the search form about `frontend\models\Accounting`.
 */
class AccountingSearch extends Accounting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'insurance_id'], 'integer'],
            [['professional_fee', 'frames_price', 'lenses_price', 'contacts_price', 'solutions_price', 'ancilliary_procedures', 'others', 'senior_citizen', 'person_w_disability', 'total', 'deposit', 'balance'], 'number'],
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
        $query = Accounting::find();

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
            'total' => $this->total,
            'deposit' => $this->deposit,
            'balance' => $this->balance,
        ]);

        return $dataProvider;
    }
}
