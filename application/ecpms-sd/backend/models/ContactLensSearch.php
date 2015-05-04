<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ContactLens;

/**
 * ContactLensSearch represents the model behind the search form about `frontend\models\ContactLens`.
 */
class ContactLensSearch extends ContactLens
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_lens_id'], 'integer'],
            [['contact_lens_name', 'contact_lens_description'], 'safe'],
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
        $query = ContactLens::find();

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
            'contact_lens_id' => $this->contact_lens_id,
        ]);

        $query->andFilterWhere(['like', 'contact_lens_name', $this->contact_lens_name])
            ->andFilterWhere(['like', 'contact_lens_description', $this->contact_lens_description]);

        return $dataProvider;
    }
}
