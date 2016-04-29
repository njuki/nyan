<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Worktypes;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jobs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobs-form row">
<div class="col-md-8">

    <?php $form = ActiveForm::begin(); ?>
<?php echo $form->errorSummary(array($model)); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'streetAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workTypeID')->dropDownList(
	 		ArrayHelper::map(Worktypes::find()->all(), 'id', 'name'),
	 		['prompt'=>'']
	 		)?>
	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Get Quotes »' : 'Apply Changes', ['class' => $model->isNewRecord ? 'btn btn-lg btn-warning' : 'btn btn-lg btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
