<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Record */

$this->title = $model->record_id;
$this->params['breadcrumbs'][] = ['label' => 'Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->record_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->record_id], [
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
            'id',
            'record_id',
            'patient_signature',
            'agreed_date',
            'employee_signature',
            'complaints:ntext',
            'professional_fee',
            'frames_price',
            'lenses_price',
            'contacts_price',
            'solutions_price',
            'ancilliary_procedures',
            'others',
            'insurance_id',
            'senior_citizen',
            'person_w_disability',
            'deposit',
            'balance',
            'diagnostic_result:ntext',
            'management:ntext',
            'plan_TCB:ntext',
            'plan_next_visit',
        ],
    ]) ?>

</div>
