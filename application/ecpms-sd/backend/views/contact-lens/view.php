<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ContactLens */

$this->title = $model->contact_lens_id;
$this->params['breadcrumbs'][] = ['label' => 'Contact Lens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-lens-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->contact_lens_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->contact_lens_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'contact_lens_id',
            'contact_lens_name',
            'contact_lens_description',
        ],
    ]) ?>

</div>
