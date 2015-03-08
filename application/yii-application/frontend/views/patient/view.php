<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */

$this->title = $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->patient_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->patient_id], [
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
            'patient_id',
            'patient_lname',
            'patient_fname',
            'patient_mname',
            'patient_birthday',
            'patient_sex',
            'patient_facebook',
            'patient_landline',
            'patient_cel1',
            'patient_cel2',
            'patient_company',
            'patient_add_work',
            'patient_contact_work',
            'user_id',
            'patient_add_street',
            'patient_add_town_subd_vill',
            'patient_add_number',
            'patient_add_city_id',
            'patientl_allergies:ntext',
            'patient_medications:ntext',
            'patient_treatments:ntext',
            'patient_pregnant',
            'patient_glasses',
            'patient_glasses_age',
            'patient_contact_lens',
            'patient_contact_lens_age',
            'contact_lens_id',
        ],
    ]) ?>

</div>
