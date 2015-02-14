<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "health_card".
 *
 * @property integer $CARD_ID
 * @property string $CARD_NAME
 */
class HealthCard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'health_card';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CARD_NAME'], 'required'],
            [['CARD_NAME'], 'string', 'max' => 52]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CARD_ID' => 'Card  ID',
            'CARD_NAME' => 'Card  Name',
        ];
    }
}
