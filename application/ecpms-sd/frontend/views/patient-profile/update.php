<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientProfile */

//$this->title = 'Update Patient Profile: ' . ' ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Patient Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patient-profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
