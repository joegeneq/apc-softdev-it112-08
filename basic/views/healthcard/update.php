<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HealthCard */

$this->title = 'Update Health Card: ' . ' ' . $model->CARD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Health Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CARD_ID, 'url' => ['view', 'id' => $model->CARD_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="health-card-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
