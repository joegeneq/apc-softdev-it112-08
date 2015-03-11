<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HistorySports;

/**
 * HistorySportsSearch represents the model behind the search form about `frontend\models\HistorySports`.
 */
class HistorySportsSearch extends HistorySports
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sports_id', 'patient_id'], 'integer'],
            [['history_value'], 'safe'],
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
        $query = HistorySports::find();

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
            'patient_id' => $this->patient_id,
        ]);

        $query->andFilterWhere(['like', 'history_value', $this->history_value]);

        return $dataProvider;
    }
}
