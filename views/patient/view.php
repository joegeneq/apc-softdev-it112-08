<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */

$this->title = $model->PATIENT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PATIENT_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PATIENT_ID], [
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
            'PATIENT_ID',
            'PATIENT_NAME_LAST',
            'PATIENT_NAME_FIRST',
            'PATIENT_NAME_MIDDLE',
            'PATIENT_BDAY',
            'PATIENT_SEX',
            'PATIENT_HOME',
            'PATIENT_CITY',
            'PATIENT_COUNTRY_ID',
            'PATIENT_OCCUPATION',
            'PATIENT_COMPANY_NAME',
            'PATIENT_COMPANY_NUMBER',
            'PATIENT_SPORTS',
            'PATIENT_EMAIL1:email',
            'PATIENT_EMAIL2:email',
            'PATIENT_FACEBOOK',
            'PATIENT_LANDLINE',
            'PATIENT_CELL',
            'PATIENT_ALLERGIES',
            'PATIENT_MEDICATIONS',
            'PATIENT_INJURIES_SURGERIES_HOSPITALIZATION',
            'PATIENT_HISTORY_PERSONAL_ID',
            'PATIENT_HISTORY_FAMILY_ID',
            'PATIENT_PERSONAL_EXPERIENCE',
            'PATIENT_REFERRED_BY',
            'PATIENT_HEALTH_CARD',
            'PATIENT_REGISTRATION',
        ],
    ]) ?>

</div>
