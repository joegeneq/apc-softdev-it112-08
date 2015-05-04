<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ContactLens */

$this->title = 'Create Contact Lens';
$this->params['breadcrumbs'][] = ['label' => 'Contact Lens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-lens-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
