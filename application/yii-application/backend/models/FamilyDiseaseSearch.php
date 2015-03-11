<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FamilyDisease;

/**
 * FamilyDiseaseSearch represents the model behind the search form about `backend\models\FamilyDisease`.
 */
class FamilyDiseaseSearch extends FamilyDisease
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['family_disease_id'], 'integer'],
            [['family_disease_name', 'family_disease_description'], 'safe'],
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
        $query = FamilyDisease::find();

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
            'family_disease_id' => $this->family_disease_id,
        ]);

        $query->andFilterWhere(['like', 'family_disease_name', $this->family_disease_name])
            ->andFilterWhere(['like', 'family_disease_description', $this->family_disease_description]);

        return $dataProvider;
    }
}
