<?php 
$b_active = "";
$price_active = "";
$pay_active = "";

$action_id = Yii::$app->controller->action->id;

if($action_id == 'business') {
	$b_active = "active";
}

if ($action_id == 'pricing') {
	$price_active = "active";
}

if ($action_id == 'payments') {
	$pay_active = "active";
}

?>
<div class="col-md-3 pdl0" style="margin-left: 0;" id="how_it_works_businesses">

	<div class="business-sub-pages-2" id="business-sub-pages">
		<ul>
			<li  class="<?php echo $b_active; ?>"><a href="<?php echo Yii::$app->urlManager->createUrl('howitworks/business'); ?>">Overview</a></li>
			<li class="<?php echo $price_active; ?>"><a href="<?php echo Yii::$app->urlManager->createUrl('howitworks/pricing'); ?>">Pricing</a></li>
			<li class="<?php echo $pay_active; ?>"><a href="<?php echo Yii::$app->urlManager->createUrl('howitworks/payments'); ?>">Getting Paid</a></li>
		
			<!-- <li class="<?php echo $pay_active; ?>"><a href="/how-it-works/businesses/payments">Getting
					Paid<span class="badge badge-success"><div class="small normal">
							<new>New!</new>
						</div></span>
			</a></li>-->
		</ul>
	</div>
</div>
