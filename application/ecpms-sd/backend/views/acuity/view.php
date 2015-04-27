<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Acuity */

$this->title = $model->acuity_id;
$this->params['breadcrumbs'][] = ['label' => 'Acuities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acuity-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->acuity_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->acuity_id], [
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
            'acuity_id',
            'acuity_name',
            'acuity_description',
        ],
    ]) ?>

</div>
