<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\HistorySports */

$this->title = 'Create History Sports';
$this->params['breadcrumbs'][] = ['label' => 'History Sports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-sports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
