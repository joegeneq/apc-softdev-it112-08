<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'record_id',
            'patient_signature',
            'agreed_date',
            'employee_signature',
            // 'complaints:ntext',
            // 'professional_fee',
            // 'frames_price',
            // 'lenses_price',
            // 'contacts_price',
            // 'solutions_price',
            // 'ancilliary_procedures',
            // 'others',
            // 'insurance_id',
            // 'senior_citizen',
            // 'person_w_disability',
            // 'deposit',
            // 'balance',
            // 'diagnostic_result:ntext',
            // 'management:ntext',
            // 'plan_TCB:ntext',
            // 'plan_next_visit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
