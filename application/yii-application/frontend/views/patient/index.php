<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PatientSearch */
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

            'patient_id',
            'patient_lname',
            'patient_fname',
            'patient_mname',
            'patient_birthday',
            // 'patient_sex',
            // 'patient_facebook',
            // 'patient_landline',
            // 'patient_cel1',
            // 'patient_cel2',
            // 'patient_company',
            // 'patient_add_work',
            // 'patient_contact_work',
            // 'user_id',
            // 'patient_add_street',
            // 'patient_add_town_subd_vill',
            // 'patient_add_number',
            // 'patient_add_city_id',
            // 'patientl_allergies:ntext',
            // 'patient_medications:ntext',
            // 'patient_treatments:ntext',
            // 'patient_pregnant',
            // 'patient_glasses',
            // 'patient_glasses_age',
            // 'patient_contact_lens',
            // 'patient_contact_lens_age',
            // 'contact_lens_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
