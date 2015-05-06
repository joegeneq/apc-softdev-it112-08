<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Accounting */

$this->title = 'Create Accounting';
$this->params['breadcrumbs'][] = ['label' => 'Accountings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounting-create">

    <h1><?= Html::encode($this->title) ?></h1>

<?php
if(Yii::$app->user->identity->role == 10){
    echo $this->render('/site/say');
}else
    echo  $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
