<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Eoms */

$this->title = 'Create Eoms';
$this->params['breadcrumbs'][] = ['label' => 'Eoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eoms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
