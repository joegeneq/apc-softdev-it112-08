<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Design */

$this->title = 'Update Design: ' . ' ' . $model->design_id;
$this->params['breadcrumbs'][] = ['label' => 'Designs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->design_id, 'url' => ['view', 'id' => $model->design_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="design-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
