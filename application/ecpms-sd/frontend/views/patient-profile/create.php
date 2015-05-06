<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PatientProfile */

$this->title = 'Create Patient Profile';
$this->params['breadcrumbs'][] = ['label' => 'Patient Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
if(Yii::$app->user->identity->role == 10){
    echo $this->render('/site/say');
}else
    echo  $this->render('_form', [
			'model' => $model,
        //'patient' => $patient,
    ]) ?>

</div>
