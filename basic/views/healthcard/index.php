<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HealthCardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Health Cards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-card-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Health Card', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CARD_ID',
            'CARD_NAME',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
