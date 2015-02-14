<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HealthCard;

/**
 * HealthCardSearch represents the model behind the search form about `app\models\HealthCard`.
 */
class HealthCardSearch extends HealthCard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CARD_ID'], 'integer'],
            [['CARD_NAME'], 'safe'],
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
        $query = HealthCard::find();

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
            'CARD_ID' => $this->CARD_ID,
        ]);

        $query->andFilterWhere(['like', 'CARD_NAME', $this->CARD_NAME]);

        return $dataProvider;
    }
}
