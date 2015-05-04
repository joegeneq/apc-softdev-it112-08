<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Acuity;

/**
 * AcuitySearch represents the model behind the search form about `backend\models\Acuity`.
 */
class AcuitySearch extends Acuity
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acuity_id'], 'integer'],
            [['acuity_name', 'acuity_description'], 'safe'],
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
        $query = Acuity::find();

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
            'acuity_id' => $this->acuity_id,
        ]);

        $query->andFilterWhere(['like', 'acuity_name', $this->acuity_name])
            ->andFilterWhere(['like', 'acuity_description', $this->acuity_description]);

        return $dataProvider;
    }
}
