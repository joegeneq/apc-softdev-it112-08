<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Patient;
use backend\models\Relationship;
use backend\models\FamilyDisease;

/* @var $this yii\web\View */
/* @var $model frontend\models\HistoryFamily */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="history-family-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'patient_id')->textInput() ?>-->
	<?php
        $patients=Patient::find()->all();
        $listData=ArrayHelper::map($patients, 'patient_id', 'patient_lname');
        echo $form->field($model, 'patient_id')->dropDownList(
            $listData,['prompt'=>'Select Patient']);
    ?>

    <!--<?= $form->field($model, 'family_disease_id')->textInput() ?>-->
    <?php
        $diseases=FamilyDisease::find()->all();
        $listData=ArrayHelper::map($diseases, 'family_disease_id', 'family_disease_name');
        echo $form->field($model, 'family_disease_id')->dropDownList(
            $listData,['prompt'=>'Select Desease']);
    ?>
    <!--<?= $form->field($model, 'relationship_id')->textInput() ?>-->
    <?php
        $relations=Relationship::find()->all();
        $listData=ArrayHelper::map($relations, 'relationship_id', 'relationship_name');
        echo $form->field($model, 'relationship_id')->dropDownList(
            $listData,['prompt'=>'Select Relation']);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
