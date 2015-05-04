<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PatientProfile;

/**
 * PatientProfileSearch represents the model behind the search form about `frontend\models\PatientProfile`.
 */
class PatientProfileSearch extends PatientProfile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'city_id'], 'integer'],
            [['firstname', 'lastname', 'middlename', 'birthday', 'gender', 'home_address', 'company_address', 'company_name', 'cel', 'tel', 'fb', 'sports'], 'safe'],
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
        $query = PatientProfile::find();

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
            'user_id' => $this->user_id,
            'birthday' => $this->birthday,
            'city_id' => $this->city_id,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'home_address', $this->home_address])
            ->andFilterWhere(['like', 'company_address', $this->company_address])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'cel', $this->cel])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fb', $this->fb])
            ->andFilterWhere(['like', 'sports', $this->sports]);

        return $dataProvider;
    }
}
