<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Eoms;

/**
 * EomsSearch represents the model behind the search form about `backend\models\Eoms`.
 */
class EomsSearch extends Eoms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eoms_id'], 'integer'],
            [['eoms_name'], 'safe'],
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
        $query = Eoms::find();

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
            'eoms_id' => $this->eoms_id,
        ]);

        $query->andFilterWhere(['like', 'eoms_name', $this->eoms_name]);

        return $dataProvider;
    }
}
