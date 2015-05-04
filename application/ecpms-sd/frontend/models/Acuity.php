<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "acuity".
 *
 * @property integer $acuity_id
 * @property string $acuity_name
 * @property string $acuity_description
 */
class Acuity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acuity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acuity_name'], 'required'],
            [['acuity_name', 'acuity_description'], 'string', 'max' => 45],
            [['acuity_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'acuity_id' => 'Acuity ID',
            'acuity_name' => 'Acuity Name',
            'acuity_description' => 'Acuity Description',
        ];
    }
}
