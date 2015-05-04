<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SolutionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solutions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solutions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solutions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'solutions_name',
            'solutions_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
