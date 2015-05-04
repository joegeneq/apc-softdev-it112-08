<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PatientProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patient Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Patient Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'firstname',
            'lastname',
            'middlename',
            'birthday',
            // 'gender',
            // 'city_id',
            // 'home_address',
            // 'company_address',
            // 'company_name',
            // 'cel',
            // 'tel',
            // 'fb',
            // 'sports:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
