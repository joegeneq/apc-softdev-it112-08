<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Diagnose;

/**
 * DiagnoseSearch represents the model behind the search form about `frontend\models\Diagnose`.
 */
class DiagnoseSearch extends Diagnose
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'patient_id', 'employee_id'], 'integer'],
            [['patient_signature', 'agreed_date', 'employee_signature', 'complaints'], 'safe'],
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
        $query = Diagnose::find();

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
            'record_id' => $this->record_id,
            'patient_id' => $this->patient_id,
            'employee_id' => $this->employee_id,
            'agreed_date' => $this->agreed_date,
        ]);

        $query->andFilterWhere(['like', 'patient_signature', $this->patient_signature])
            ->andFilterWhere(['like', 'employee_signature', $this->employee_signature])
            ->andFilterWhere(['like', 'complaints', $this->complaints]);

        return $dataProvider;
    }
}
