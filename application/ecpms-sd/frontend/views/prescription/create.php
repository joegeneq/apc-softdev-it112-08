<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Prescription */

$this->title = 'Create Prescription';
$this->params['breadcrumbs'][] = ['label' => 'Prescriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prescription-create">

    <h1><?= Html::encode($this->title) ?></h1>

<?php
if(Yii::$app->user->identity->role == 10){
    echo $this->render('/site/say');
}else
    echo  $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
