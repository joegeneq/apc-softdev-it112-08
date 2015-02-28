<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Region;
//use app\models\Region;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProvinceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Provinces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Province', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'province_id',
            'province_code',
            'province_description',
            //'region_id',
            //'regionName',
            [
            'attribute' => 'region_id',
            'label' => 'Region',
            'value' => 'region.region_code',
            'filter' => yii\helpers\ArrayHelper::map(app\models\Region::find()->all(),'region_id','region_code')
        ],
            //'region.region_code',
/*            [
                'attribute'=>'region_id',
                'value'=>$model->region->region_code,
                'type'=>DetailView::INPUT_SELECT2,
                'widgetOptions'=>[
                    'data'=>ArrayHelper::map(Region::find()->orderby('region_code')->asArray()->all(), 'region_id', 'region_code'),
                ]
            ],

*/
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
