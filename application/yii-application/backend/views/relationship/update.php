<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Relationship */

$this->title = 'Update Relationship: ' . ' ' . $model->relationship_id;
$this->params['breadcrumbs'][] = ['label' => 'Relationships', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->relationship_id, 'url' => ['view', 'id' => $model->relationship_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="relationship-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
