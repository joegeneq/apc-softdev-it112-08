<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\FamilyDisease */

$this->title = $model->family_disease_id;
$this->params['breadcrumbs'][] = ['label' => 'Family Diseases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-disease-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->family_disease_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->family_disease_id], [
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
            'family_disease_id',
            'family_disease_name',
            'family_disease_description',
        ],
    ]) ?>

</div>
