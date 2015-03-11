<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\HistoryFamily */

$this->title = 'Create History Family';
$this->params['breadcrumbs'][] = ['label' => 'History Families', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-family-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
