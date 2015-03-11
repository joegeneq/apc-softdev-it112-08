<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "family_disease".
 *
 * @property integer $family_disease_id
 * @property string $family_disease_name
 * @property string $family_disease_description
 *
 * @property HistoryFamily[] $historyFamilies
 * @property Patient[] $patients
 */
class FamilyDisease extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'family_disease';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['family_disease_name'], 'required'],
            [['family_disease_name', 'family_disease_description'], 'string', 'max' => 45],
            [['family_disease_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'family_disease_id' => 'Family Disease ID',
            'family_disease_name' => 'Family Disease Name',
            'family_disease_description' => 'Family Disease Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoryFamilies()
    {
        return $this->hasMany(HistoryFamily::className(), ['family_disease_id' => 'family_disease_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['patient_id' => 'patient_id'])->viaTable('history_family', ['family_disease_id' => 'family_disease_id']);
    }
}
