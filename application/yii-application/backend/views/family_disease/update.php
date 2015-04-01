<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FamilyDisease */

$this->title = 'Update Family Disease: ' . ' ' . $model->family_disease_id;
$this->params['breadcrumbs'][] = ['label' => 'Family Diseases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->family_disease_id, 'url' => ['view', 'id' => $model->family_disease_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="family-disease-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
