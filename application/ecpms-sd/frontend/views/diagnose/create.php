<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Diagnose */

//$this->title = 'Create Diagnose';
$this->params['breadcrumbs'][] = ['label' => 'Diagnoses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnose-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'evaluation' => $evaluation,
        'prescription' => $prescription,
        'accounting' => $accounting,
        'user' => $user,
    ]) ?>

</div>
