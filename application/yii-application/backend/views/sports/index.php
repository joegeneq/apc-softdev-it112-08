<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SportsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sports-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sports', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sports_id',
            'sports_name',
            'sports_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
