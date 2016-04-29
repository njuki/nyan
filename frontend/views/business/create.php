<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Businesses */

$this->title = 'Register your Interest';
$this->params['breadcrumbs'][] = ['label' => 'Businesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="businesses-create container">

    <h1 class="h mykazi_green"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    	'user' => $user,
    	'bWorks' => $bWorks,
    	'no_employees_list' => $no_employees_list
    ]) ?>

</div>
