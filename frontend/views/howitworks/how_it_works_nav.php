<?php 
$c_active = "";
$b_active = "";
$action_id = Yii::$app->controller->action->id;

if ($action_id == 'customers') {
	$c_active = "active";
}
 
if($action_id == 'business' || $action_id == 'pricing' || $action_id == 'payments') {
	$b_active = "active";
}
?>
<div class="margin-top">
<ul id="myTab" class="nav nav-tabs">
<li class="<?php echo $c_active ?> h"><a href="<?php echo Yii::$app->urlManager->createUrl('howitworks/customers'); ?>">Customers</a></li>
<li class="<?php echo $b_active ?> h"><a href="<?php echo Yii::$app->urlManager->createUrl('howitworks/business'); ?>">Businesses</a></li>
</ul>
</div>