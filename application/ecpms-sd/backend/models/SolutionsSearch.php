<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Solutions;

/**
 * SolutionsSearch represents the model behind the search form about `backend\models\Solutions`.
 */
class SolutionsSearch extends Solutions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['solutions_id'], 'integer'],
            [['solutions_name', 'solutions_description'], 'safe'],
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
        $query = Solutions::find();

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
            'solutions_id' => $this->solutions_id,
        ]);

        $query->andFilterWhere(['like', 'solutions_name', $this->solutions_name])
            ->andFilterWhere(['like', 'solutions_description', $this->solutions_description]);

        return $dataProvider;
    }
}
