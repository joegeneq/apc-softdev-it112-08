<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Diagnose */

$this->title = 'Update Diagnose: ' . ' ' . $model->record_id;
$this->params['breadcrumbs'][] = ['label' => 'Diagnoses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->record_id, 'url' => ['view', 'id' => $model->record_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diagnose-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
