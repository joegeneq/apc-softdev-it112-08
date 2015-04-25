<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Eoms */

$this->title = 'Update Eoms: ' . ' ' . $model->eoms_id;
$this->params['breadcrumbs'][] = ['label' => 'Eoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eoms_id, 'url' => ['view', 'id' => $model->eoms_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eoms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
