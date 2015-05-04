<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WearModeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wear Modes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wear-mode-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wear Mode', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'wear_mode_name',
            'wear_mode_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
