<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Patient', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PATIENT_ID',
            'PATIENT_NAME_LAST',
            'PATIENT_NAME_FIRST',
            'PATIENT_NAME_MIDDLE',
            'PATIENT_BDAY',
            // 'PATIENT_SEX',
            // 'PATIENT_HOME',
            // 'PATIENT_CITY',
            // 'PATIENT_COUNTRY_ID',
            // 'PATIENT_OCCUPATION',
            // 'PATIENT_COMPANY_NAME',
            // 'PATIENT_COMPANY_NUMBER',
            // 'PATIENT_SPORTS',
            // 'PATIENT_EMAIL1:email',
            // 'PATIENT_EMAIL2:email',
            // 'PATIENT_FACEBOOK',
            // 'PATIENT_LANDLINE',
            // 'PATIENT_CELL',
            // 'PATIENT_ALLERGIES',
            // 'PATIENT_MEDICATIONS',
            // 'PATIENT_INJURIES_SURGERIES_HOSPITALIZATION',
            // 'PATIENT_HISTORY_PERSONAL_ID',
            // 'PATIENT_HISTORY_FAMILY_ID',
            // 'PATIENT_PERSONAL_EXPERIENCE',
            // 'PATIENT_REFERRED_BY',
            // 'PATIENT_HEALTH_CARD',
            // 'PATIENT_REGISTRATION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
