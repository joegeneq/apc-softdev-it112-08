<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FamilyDisease */

$this->title = 'Create Family Disease';
$this->params['breadcrumbs'][] = ['label' => 'Family Diseases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-disease-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
