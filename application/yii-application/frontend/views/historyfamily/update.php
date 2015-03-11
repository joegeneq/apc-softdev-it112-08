<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\HistoryFamily */

$this->title = 'Update History Family: ' . ' ' . $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'History Families', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->patient_id, 'url' => ['view', 'patient_id' => $model->patient_id, 'family_disease_id' => $model->family_disease_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="history-family-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
