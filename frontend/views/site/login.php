<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params ['breadcrumbs'] [] = $this->title;
?>

			<div class="container">
<div id="wrap">
	<div class="main" id="main-no-space">
		<div id="main-page">
			<div id="wrapper">
				<div id="page-content">
					<div>
						<div class="page-header">
							<h1 class="h mykazi_red">Login to My Kazi</h1>
						</div>


						<div class="row-fluid">
							<div class="col-md-3">
						<?=yii\authclient\widgets\AuthChoice::widget ( [ 'baseAuthUrl' => [ 'site/auth' ] ] )?>							
							</div>
							<div class="col-md-2 centered-text">
								<h3>— OR —</h3>
							</div>
							<div class="col-md-6">



								<div class="site-login">

									

									<div class="row">
									<div class="col-lg-10">
									<p>Please fill out the following fields to login:</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username')?>
            <?= $form->field($model, 'password')->passwordInput()?>
            <?= $form->field($model, 'rememberMe')->checkbox()?>
            <div style="color: #999; margin: 1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
            </div>
											<div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button'])?>
            </div>
            <?php ActiveForm::end(); ?>
				</div>
				</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</div>












