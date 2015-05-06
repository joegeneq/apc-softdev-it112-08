<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Accounting */

$this->title = 'Update Accounting: ' . ' ' . $model->record_id;
$this->params['breadcrumbs'][] = ['label' => 'Accountings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->record_id, 'url' => ['view', 'id' => $model->record_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="accounting-update">

    <h1><?= Html::encode($this->title) ?></h1>

<?php
if(Yii::$app->user->identity->role == 10){
    echo $this->render('/site/say');
}else
    echo  $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
