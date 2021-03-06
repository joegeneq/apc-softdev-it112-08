<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WearMode */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wear Modes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wear-mode-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'wear_mode_name',
            'wear_mode_description',
        ],
    ]) ?>

</div>
