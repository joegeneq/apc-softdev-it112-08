<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ContactLens */

$this->title = 'Update Contact Lens: ' . ' ' . $model->contact_lens_id;
$this->params['breadcrumbs'][] = ['label' => 'Contact Lens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->contact_lens_id, 'url' => ['view', 'id' => $model->contact_lens_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-lens-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
