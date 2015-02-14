<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HealthCard */

$this->title = 'Create Health Card';
$this->params['breadcrumbs'][] = ['label' => 'Health Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="health-card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
