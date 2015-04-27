<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "design".
 *
 * @property integer $design_id
 * @property string $design_name
 * @property string $design_description
 *
 * @property Record[] $records
 */
class Design extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'design';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['design_name'], 'required'],
            [['design_name', 'design_description'], 'string', 'max' => 45],
            [['design_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'design_id' => 'Design ID',
            'design_name' => 'Design Name',
            'design_description' => 'Design Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['design_id' => 'design_id']);
    }
}
