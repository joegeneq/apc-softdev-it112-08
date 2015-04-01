<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FamilyDiseaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Family Diseases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-disease-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Family Disease', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'family_disease_id',
            'family_disease_name',
            'family_disease_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
