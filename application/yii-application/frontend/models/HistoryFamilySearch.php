<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HistoryFamily;

/**
 * HistoryFamilySearch represents the model behind the search form about `frontend\models\HistoryFamily`.
 */
class HistoryFamilySearch extends HistoryFamily
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'family_disease_id', 'relationship_id'], 'integer'],
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
        $query = HistoryFamily::find();

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
            'family_disease_id' => $this->family_disease_id,
            'relationship_id' => $this->relationship_id,
        ]);

        return $dataProvider;
    }
}
