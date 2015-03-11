<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "relationship".
 *
 * @property integer $relationship_id
 * @property string $relationship_name
 * @property string $relationship_description
 *
 * @property HistoryFamily[] $historyFamilies
 */
class Relationship extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relationship';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['relationship_name'], 'required'],
            [['relationship_name', 'relationship_description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'relationship_id' => 'Relationship ID',
            'relationship_name' => 'Relationship Name',
            'relationship_description' => 'Relationship Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoryFamilies()
    {
        return $this->hasMany(HistoryFamily::className(), ['relationship_id' => 'relationship_id']);
    }
}
