<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DiagnoseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diagnose';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnose-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Diagnose', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'record_id',
            'patient_id',
            'employee_id',
            'patient_signature',
            'agreed_date',
            // 'employee_signature',
            // 'complaints:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
