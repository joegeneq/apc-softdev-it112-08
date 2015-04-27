<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Discount;

/**
 * DiscountSearch represents the model behind the search form about `backend\models\Discount`.
 */
class DiscountSearch extends Discount
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['discount_id'], 'integer'],
            [['discount_name', 'discount_description'], 'safe'],
            [['discount_percentage'], 'number'],
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
        $query = Discount::find();

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
            'discount_id' => $this->discount_id,
            'discount_percentage' => $this->discount_percentage,
        ]);

        $query->andFilterWhere(['like', 'discount_name', $this->discount_name])
            ->andFilterWhere(['like', 'discount_description', $this->discount_description]);

        return $dataProvider;
    }
}
