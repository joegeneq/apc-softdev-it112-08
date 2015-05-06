<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */

//$this->title = 'Create Patient';
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-create">

    <h1><?= Html::encode($this->title) ?></h1>

<?php
if(Yii::$app->user->identity->role == 10){
    echo $this->render('/site/say');
}else
    echo $this->render('_form', [
        'model' => $model,
        'medical' => $medical,
    ]) ?>

</div>
