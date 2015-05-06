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
        
    </p>
<?php
if(Yii::$app->user->identity->role == 10){
    echo $this->render('/site/say');
}else
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'record_id',
            'patient_id',
            'employee_id',
            //'patient_signature',
            //'agreed_date',
            // 'employee_signature',
            // 'complaints:ntext',
            /*[
            'attribute' => 'patient_id',
            'label' => 'User',
            'value' => 'user.role',
            'filter' => yii\helpers\ArrayHelper::map(frontend\models\User::find()->all(),'id','role')
            ],
            [
            'attribute' => 'patient_id',
            'label' => 'Patient',
            'value' => 'user.role',
            'filter' => yii\helpers\ArrayHelper::map(frontend\models\User::find()->all(),'id','role')
            ],*/
            //'patientName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
