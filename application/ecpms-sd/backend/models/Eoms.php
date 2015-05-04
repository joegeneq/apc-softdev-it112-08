<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "eoms".
 *
 * @property integer $id
 * @property string $eoms_name
 * @property string $eoms_description
 *
 * @property Evaluation[] $evaluations
 */
class Eoms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eoms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eoms_name'], 'required'],
            [['eoms_name', 'eoms_description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'eoms_name' => 'Eoms Name',
            'eoms_description' => 'Eoms Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluations()
    {
        return $this->hasMany(Evaluation::className(), ['eoms_id' => 'id']);
    }
}
