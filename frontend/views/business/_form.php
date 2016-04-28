<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use app\models\Worktypes;

/* @var $this yii\web\View */
/* @var $model app\models\Businesses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="businesses-form">
    <?php $form = ActiveForm::begin(); ?>
    <?php echo $form->errorSummary(array($model, $bWorks)); ?>
    <div class="row">
		<div class="col-md-6">
	<div><h3 class="headline h mykazi_red">Your Business</h4></div>
     <?= $form->field($model, 'name')->textInput(['maxlength' => true])?>
     <?= $form->field($model, 'KRA_PIN')->textInput(['maxlength' => true])?>
     <?= $form->field($model, 'streetAddress')->textInput(['maxlength' => true])?>
     <?= $form->field($model, 'postalCode')->textInput(['maxlength' => true])?>
     <?= $form->field($model, 'noOfEmployees')->dropDownList($no_employees_list) ?>
     
    </div>
		<div class="col-md-6">
	<div><h3 class="headline h mykazi_red">Your Contact Details</h4></div>	
	<?= $form->field($user, 'giveName')->textInput(['maxlength' => true])?>

    <?= $form->field($user, 'familyName')->textInput(['maxlength' => true])?>

    <?= $form->field($user, 'email')->textInput(['maxlength' => true])?>

    <?= $form->field($user, 'mobile')->textInput(['maxlength' => true])?>

    <?= $form->field($user, 'password')->passwordInput(['maxlength' => true])?>
		</div>
	</div>
	<div class="row">
	<div class="col-md-6">
	<div><h3 class="headline h mykazi_red">Your Work</h4></div>
	 <?= $form->field($bWorks, 'workTypeID')->dropDownList(
	 		ArrayHelper::map(Worktypes::find()->all(), 'id', 'name'),
	 		['prompt'=>'', 'multiple'=>'multiple']
	 		)?>
	
	</div>
	</div>

	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Register Now' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
