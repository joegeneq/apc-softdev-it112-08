<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\HistorySports */

$this->title = $model->sports_id;
$this->params['breadcrumbs'][] = ['label' => 'History Sports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-sports-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'sports_id' => $model->sports_id, 'patient_id' => $model->patient_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'sports_id' => $model->sports_id, 'patient_id' => $model->patient_id], [
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
            'patientName',
            //'sports_id',
            //'sportsName',
            //'patient_id',
            'history_value',
        ],
    ]) ?>

</div>
