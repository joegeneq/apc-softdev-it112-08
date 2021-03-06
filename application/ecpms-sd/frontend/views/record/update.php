<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Record */

$this->title = 'Update Record: ' . ' ' . $model->record_id;
$this->params['breadcrumbs'][] = ['label' => 'Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->record_id, 'url' => ['view', 'id' => $model->record_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="record-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
if(Yii::$app->user->identity->role == 10){
	echo $this->render('/site/say');
}else
	echo 
    $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
