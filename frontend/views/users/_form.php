<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'giveName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'familyName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternativeMobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userType')->dropDownList([ 'B' => 'B', 'F' => 'F', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'businessID')->textInput() ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isActive')->textInput() ?>

    <?= $form->field($model, 'isStaff')->textInput() ?>

    <?= $form->field($model, 'isSuperAdmin')->textInput() ?>

    <?= $form->field($model, 'lastLogin')->textInput() ?>

    <?= $form->field($model, 'dateCreated')->textInput() ?>

    <?= $form->field($model, 'dateModified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
