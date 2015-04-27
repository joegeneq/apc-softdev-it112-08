<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Instruction */

$this->title = 'Update Instruction: ' . ' ' . $model->instruction_id;
$this->params['breadcrumbs'][] = ['label' => 'Instructions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->instruction_id, 'url' => ['view', 'id' => $model->instruction_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="instruction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
