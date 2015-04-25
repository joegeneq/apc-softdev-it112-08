<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Insurance;

/**
 * InsuranceSearch represents the model behind the search form about `backend\models\Insurance`.
 */
class InsuranceSearch extends Insurance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['insurance_id'], 'integer'],
            [['insurance_name', 'insurance_description'], 'safe'],
            [['insurance_percentage'], 'number'],
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
        $query = Insurance::find();

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
            'insurance_id' => $this->insurance_id,
            'insurance_percentage' => $this->insurance_percentage,
        ]);

        $query->andFilterWhere(['like', 'insurance_name', $this->insurance_name])
            ->andFilterWhere(['like', 'insurance_description', $this->insurance_description]);

        return $dataProvider;
    }
}
