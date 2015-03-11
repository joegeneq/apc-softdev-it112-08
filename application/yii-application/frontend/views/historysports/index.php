<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HistorySportsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'History Sports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-sports-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create History Sports', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
            'attribute' => 'patient_id',
            'label' => 'Patient',
            'value' => 'patient.patient_lname',
            'filter' => yii\helpers\ArrayHelper::map(frontend\models\Patient::find()->all(),'patient_id','patient_lname')
            ],
            //'sports_id',
            [
            'attribute' => 'sports_id',
            'label' => 'Sports',
            'value' => 'sports.sports_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Sports::find()->all(),'sports_id','sports_name')
            ],
            //'patient_id',
            'history_value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
