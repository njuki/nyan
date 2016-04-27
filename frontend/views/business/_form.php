<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Businesses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="businesses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'streetAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postalCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noOfEmployees')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateCreated')->textInput() ?>

    <?= $form->field($model, 'dateModified')->textInput() ?>

    <?= $form->field($model, 'KRA_PIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
