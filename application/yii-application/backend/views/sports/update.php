<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sports */

$this->title = 'Update Sports: ' . ' ' . $model->sports_id;
$this->params['breadcrumbs'][] = ['label' => 'Sports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sports_id, 'url' => ['view', 'id' => $model->sports_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sports-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
