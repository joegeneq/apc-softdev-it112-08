<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact_lens".
 *
 * @property integer $contact_lens_id
 * @property string $contact_lens_value
 * @property string $contact_lens_description
 *
 * @property Patient[] $patients
 */
class ContactLens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_lens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_lens_value'], 'required'],
            [['contact_lens_value', 'contact_lens_description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_lens_id' => 'Contact Lens ID',
            'contact_lens_value' => 'Contact Lens Value',
            'contact_lens_description' => 'Contact Lens Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['contact_lens_id' => 'contact_lens_id']);
    }
}
