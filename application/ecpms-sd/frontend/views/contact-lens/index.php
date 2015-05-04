<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ContactLensSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact Lens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-lens-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contact Lens', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'contact_lens_id',
            'contact_lens_name',
            'contact_lens_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
