<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AcuitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Acuities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acuity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Acuity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'acuity_id',
            'acuity_name',
            'acuity_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
