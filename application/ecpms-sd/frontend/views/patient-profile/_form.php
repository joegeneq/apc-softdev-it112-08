<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use backend\models\City;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientProfile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <div style="display: none;">
    <?= $form->field($model, 'user_id')->textInput(array('readonly' => true, 'value' => Yii::$app->user->identity->id)) ?>
    </div>
    <section style="margin: 10px;">
        <fieldset>
                <legend><b> Profile </b> </legend>
            <center><table><tr><td style="width: 300px;"><?= $form->field($model, 'lastname') ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'firstname')->textInput(['maxlength' => 255]) ?></td>
                <td style="width: 300px;"><?= $form->field($model, 'middlename')->textInput(['maxlength' => 255]) ?></td></tr>
            </table></center>
            <center><table>
                <tr><td style="width: 180px;"><?= $form->field($model, 'birthday')->widget(
                DatePicker::className(), [
                    'inline' => false, 
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd'
                    ]
                ]);?></td>
                <td style="width: 180px;"><?= $form->field($model, 'gender')->radioList(array('M'=>'Male','F'=>'Female')); ?></td>
                <td style="width: 180px;"><?= $form->field($model, 'cel')->textInput(['maxlength' => 45]) ?></td>
                <td style="width: 180px;"><?= $form->field($model, 'tel')->textInput(['maxlength' => 45]) ?></td>
                <td style="width: 180px;"><?= $form->field($model, 'fb')->textInput(['maxlength' => 75]) ?></td></tr>
            </table></center>
            <center><table>
                <tr><td style="width: 900px;"><?= $form->field($model, 'sports')->textarea(['rows' => 6]) ?></td></tr>
            </table></center>
            <center><table>
                <tr><td style="width: 300px;"><?php
                    $cities=City::find()->all();
                    $listData=ArrayHelper::map($cities, 'city_id', 'city_name');
                    echo $form->field($model, 'city_id')->dropDownList(
                        $listData,['prompt'=>'-- City --']);
                ?></td>
                <td style="width: 600px;"><?= $form->field($model, 'home_address')->textInput(['maxlength' => 255]) ?></td></tr>
                <td style="width: 300px;"><?= $form->field($model, 'company_address')->textInput(['maxlength' => 255]) ?></td>
                <td style="width: 600px;"><?= $form->field($model, 'company_name')->textInput(['maxlength' => 45]) ?></td>
            </table></center>
        </fieldset>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
