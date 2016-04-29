<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="row-fluid">
	<div class="col-md-6">



		<div class="site-login">
			<div class="row">
				<div class="col-lg-10">



					<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>
	<div class="row">
	<?php echo $form->errorSummary($model)?>
							<div class="col-lg-6">
	<?= $form->field($model, 'giveName')->textInput(['maxlength' => true])?>
	</div>
							<div class="col-lg-6">
	<?= $form->field($model, 'familyName')->textInput(['maxlength' => true])?>
	</div>

						</div>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true])?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true])?>
    
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create Account' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



				</div>
			</div>
		</div>

	</div>
	<div class="col-md-6">
		<blockquote>
			<h4>Do you run a business?</h4>
			<p>
				Service Central finds quality referrals for your business, and <strong>we
					can guarantee work</strong>.
			</p>
			<p style="margin-top: 12px;">
					  <?= Html::a('Register Your Business!', ['/business/create'], ['class' => 'btn btn-lg btn-success'])?>
 
			</p>
		</blockquote>

		<blockquote>
			<h4>Do you use Facebook or Gmail? Login with:</h4>
			<?=yii\authclient\widgets\AuthChoice::widget ( [ 'baseAuthUrl' => [ 'site/auth' ] ] )?>							
		</blockquote>






	</div>

</div>
























