<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DiscountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Discounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discount-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Discount', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'discount_id',
            'discount_name',
            'discount_description',
            'discount_percentage',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
