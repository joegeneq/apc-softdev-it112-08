<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Acuity */

$this->title = 'Update Acuity: ' . ' ' . $model->acuity_id;
$this->params['breadcrumbs'][] = ['label' => 'Acuities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->acuity_id, 'url' => ['view', 'id' => $model->acuity_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="acuity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
