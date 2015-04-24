<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact_lens".
 *
 * @property integer $contact_lens_id
 * @property string $contact_lens_name
 * @property string $contact_lens_description
 *
 * @property User[] $users
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
            [['contact_lens_name'], 'required'],
            [['contact_lens_name', 'contact_lens_description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_lens_id' => 'Contact Lens ID',
            'contact_lens_name' => 'Contact Lens Name',
            'contact_lens_description' => 'Contact Lens Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['contact_lens_id' => 'contact_lens_id']);
    }
}
