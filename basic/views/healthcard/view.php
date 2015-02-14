<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HealthCard */

$this->title = $model->CARD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Health Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-card-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CARD_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CARD_ID], [
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
            'CARD_ID',
            'CARD_NAME',
        ],
    ]) ?>

</div>
