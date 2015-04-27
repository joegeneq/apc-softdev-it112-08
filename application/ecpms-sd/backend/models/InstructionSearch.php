<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Instruction;

/**
 * InstructionSearch represents the model behind the search form about `backend\models\Instruction`.
 */
class InstructionSearch extends Instruction
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instruction_id'], 'integer'],
            [['instruction_name', 'instruction_description'], 'safe'],
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
        $query = Instruction::find();

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
            'instruction_id' => $this->instruction_id,
        ]);

        $query->andFilterWhere(['like', 'instruction_name', $this->instruction_name])
            ->andFilterWhere(['like', 'instruction_description', $this->instruction_description]);

        return $dataProvider;
    }
}
