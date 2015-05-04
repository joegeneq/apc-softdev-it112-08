<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Diagnose */

$this->title = $model->record_id;
$this->params['breadcrumbs'][] = ['label' => 'Diagnoses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnose-view">

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
            'record_id',
            'patient_id',
            'employee_id',
            'patient_signature',
            'agreed_date',
            'employee_signature',
            'complaints:ntext',

            'evaluation.gross_exam:ntext',
        ],/*'evaluation' => $evaluation,
            'attributes' => [
            'record_id',
            'color_test',
            'stereo_w4d',
            'confrontation_avf',
            'gross_exam:ntext',
            'diagnostic_result:ntext',
            'management:ntext',
            'plan_TCB:ntext',
            'plan_next_visit',],
            [
            'attribute' => 'record_id',
            'label' => 'Evaluation',
            'value' => 'Evaluation.gross_exam',
            'filter' => yii\helpers\ArrayHelper::map(frontend\models\Evaluation::find()->all(),'record_id','gross_exam')
            ],*/

    ]) ?>

</div>
