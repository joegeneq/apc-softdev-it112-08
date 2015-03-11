<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sports;

/**
 * SportsSearch represents the model behind the search form about `backend\models\Sports`.
 */
class SportsSearch extends Sports
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sports_id'], 'integer'],
            [['sports_name', 'sports_description'], 'safe'],
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
        $query = Sports::find();

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
            'sports_id' => $this->sports_id,
        ]);

        $query->andFilterWhere(['like', 'sports_name', $this->sports_name])
            ->andFilterWhere(['like', 'sports_description', $this->sports_description]);

        return $dataProvider;
    }
}
