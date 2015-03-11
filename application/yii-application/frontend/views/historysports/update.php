<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\HistorySports */

$this->title = 'Update History Sports: ' . ' ' . $model->sports_id;
$this->params['breadcrumbs'][] = ['label' => 'History Sports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sports_id, 'url' => ['view', 'sports_id' => $model->sports_id, 'patient_id' => $model->patient_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="history-sports-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
