<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "eoms".
 *
 * @property integer $eoms_id
 * @property string $eoms_name
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
            [['eoms_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eoms_id' => 'Eoms ID',
            'eoms_name' => 'Eoms Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluations()
    {
        return $this->hasMany(Evaluation::className(), ['m_eoms_id' => 'eoms_id']);
    }
}
