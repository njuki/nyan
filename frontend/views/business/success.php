<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Businesses */

$this->title = 'Congratulations ' . $model->name . ' !!';
$this->params['breadcrumbs'][] = ['label' => 'Businesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="businesses-view container">

    <h1 class='h mykazi_green'><?= Html::encode($this->title) ?></h1>
    <h3>Dear Josiah, </h3>
    <p style="font-size: 20px">You have successfully registered <b><?php echo $model->name ?> </b> on <b class='h mykazi_red'>My Kazi</b>. To view view jobs that have been posted, please log in
    with your email as the username and the password you have registered with.</p>

    <p>
        <?= Html::a('Login Now', ['/site/login'], ['class' => 'h btn btn-primary']) ?>
        <?= Html::a('Take me to Homepage', ['/site'], [
            'class' => 'h btn btn-danger'
        ]) ?>
    </p>
</div>
<br/>
<br/>
