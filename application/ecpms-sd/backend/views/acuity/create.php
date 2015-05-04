<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Acuity */

$this->title = 'Create Acuity';
$this->params['breadcrumbs'][] = ['label' => 'Acuities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acuity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
