<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Insurance */

$this->title = 'Update Insurance: ' . ' ' . $model->insurance_id;
$this->params['breadcrumbs'][] = ['label' => 'Insurances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->insurance_id, 'url' => ['view', 'id' => $model->insurance_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="insurance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
