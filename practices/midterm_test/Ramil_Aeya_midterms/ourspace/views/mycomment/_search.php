<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MycommentSearch */
/* @var $form yii\widgets\ActiveForm */
use yii\helpers\ArrayHelper;
use app\models\Myaddress;
?>

<div class="mycomment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

<?php
	$addresses=Myaddress::find()->all();
	$listData=ArrayHelper::map($addresses, 'id' , 'lastname');
	echo $form->field($model, 'myaddress_id')->dropDownList(
	['prompt'=>'Select lastname'])
	
	?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'body') ?>

    <?= $form->field($model, 'created_at') ?>
	
	
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
