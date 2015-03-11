<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\HistoryFamily */

$this->title = $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'History Families', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-family-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'patient_id' => $model->patient_id, 'family_disease_id' => $model->family_disease_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'patient_id' => $model->patient_id, 'family_disease_id' => $model->family_disease_id], [
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
            //'patient_id',
            'patientName',
            'family_disease_id',
            'relationship_id',
        ],
    ]) ?>

</div>
