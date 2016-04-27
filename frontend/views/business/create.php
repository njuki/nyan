<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Businesses */

$this->title = 'Create Businesses';
$this->params['breadcrumbs'][] = ['label' => 'Businesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="businesses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
