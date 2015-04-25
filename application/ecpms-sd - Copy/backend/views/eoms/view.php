<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Eoms */

$this->title = $model->eoms_id;
$this->params['breadcrumbs'][] = ['label' => 'Eoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eoms-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->eoms_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->eoms_id], [
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
            'eoms_id',
            'eoms_name',
        ],
    ]) ?>

</div>
