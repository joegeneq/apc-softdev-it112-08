<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\WearMode */

$this->title = 'Create Wear Mode';
$this->params['breadcrumbs'][] = ['label' => 'Wear Modes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wear-mode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
