<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AccountingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accountings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Accounting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'record_id',
            'professional_fee',
            'frames_price',
            'lenses_price',
            'contacts_price',
            // 'solutions_price',
            // 'ancilliary_procedures',
            // 'others',
            // 'insurance_id',
            // 'senior_citizen',
            // 'person_w_disability',
            // 'total',
            // 'deposit',
            // 'balance',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
