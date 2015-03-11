<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sports".
 *
 * @property integer $sports_id
 * @property string $sports_name
 * @property string $sports_description
 *
 * @property HistorySports[] $historySports
 * @property Patient[] $patients
 */
class Sports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sports_name'], 'required'],
            [['sports_name', 'sports_description'], 'string', 'max' => 45],
            [['sports_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sports_id' => 'Sports ID',
            'sports_name' => 'Sports Name',
            'sports_description' => 'Sports Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorySports()
    {
        return $this->hasMany(HistorySports::className(), ['sports_id' => 'sports_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['patient_id' => 'patient_id'])->viaTable('history_sports', ['sports_id' => 'sports_id']);
    }
}
