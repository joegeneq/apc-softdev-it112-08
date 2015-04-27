<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Solutions */

$this->title = 'Update Solutions: ' . ' ' . $model->solutions_id;
$this->params['breadcrumbs'][] = ['label' => 'Solutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->solutions_id, 'url' => ['view', 'id' => $model->solutions_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solutions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>