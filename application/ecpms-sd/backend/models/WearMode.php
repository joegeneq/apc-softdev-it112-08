<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "wear_mode".
 *
 * @property integer $wear_mode_id
 * @property string $wear_mode_name
 * @property string $wear_mode_description
 *
 * @property Record[] $records
 */
class WearMode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wear_mode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wear_mode_name'], 'required'],
            [['wear_mode_name', 'wear_mode_description'], 'string', 'max' => 45],
            [['wear_mode_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wear_mode_id' => 'Wear Mode ID',
            'wear_mode_name' => 'Wear Mode Name',
            'wear_mode_description' => 'Wear Mode Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['wear_mode_id' => 'wear_mode_id']);
    }
}
