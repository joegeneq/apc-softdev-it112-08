<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Province */

$this->title = $model->province_id;
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'province_id' => $model->province_id, 'region_id' => $model->region_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'province_id' => $model->province_id, 'region_id' => $model->region_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'province_id',
            'province_code',
            'province_description',
            //'region_id',
            'regionName',
            //['attribute' => 'region', 'value' => 'region.region_code'],
        ],
    ]) ?>

</div>
