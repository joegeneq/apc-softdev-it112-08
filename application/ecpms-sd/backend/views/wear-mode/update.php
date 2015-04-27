<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WearMode */

$this->title = 'Update Wear Mode: ' . ' ' . $model->wear_mode_id;
$this->params['breadcrumbs'][] = ['label' => 'Wear Modes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wear_mode_id, 'url' => ['view', 'id' => $model->wear_mode_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wear-mode-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
