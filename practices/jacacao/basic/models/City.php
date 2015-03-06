<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $city_id
 * @property string $city_description
 * @property string $city_code
 * @property integer $province_id
 *
 * @property Province $province
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_id'], 'required'],
            [['province_id'], 'integer'],
            [['city_description', 'city_code'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'city_description' => 'City Description',
            'city_code' => 'City Code',
            'province_id' => 'Province',
            'provinceName' => Yii::t('app', 'Province'),
            'region_id' => 'Region',
            'regionName' => Yii::t('app', 'Region'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()//for province_id
    {
        return $this->hasOne(Province::className(), ['region_id' => 'province_id']);
    }
        public function getProvinceName(){//for province_code
        return $this->province->province_code;
    }
    public function getRegion()//for region_id
    {
        return $this->hasOne(Province::className(), ['province_id' => 'city_id']);
    }
    public function getRegionName(){//for region_code
        return $this->region->region_code;
    }
}
