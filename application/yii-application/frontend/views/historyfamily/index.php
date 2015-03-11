<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HistoryFamilySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'History Families';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-family-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create History Family', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'patient_id',
            [
            'attribute' => 'patient_id',
            'label' => 'Patient',
            'value' => 'patient.patient_lname',
            'filter' => yii\helpers\ArrayHelper::map(frontend\models\Patient::find()->all(),'patient_id','patient_lname')
            ],
            'family_disease_id',
            'relationship_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
