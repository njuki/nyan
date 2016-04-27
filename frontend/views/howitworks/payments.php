<?php 
$this->registerCssFile('@web/css/how-it-works.css');
$this->params ['breadcrumbs'] [] = $this->title;
?>
<!-- Start Wrap--->

<div id="wrap" style="background-color: #efefef">
	<div class="main" id="main-no-space">
		<div id="main-page">
			<div id="wrapper" class="container">

				<div class="span12" style="margin-left: 0">
					<div class="headline" id="page-title">
						<h2 class="mykazi_red h">How it works?</h2>
					</div>
					<?php echo $this->render('how_it_works_nav')?>

				</div>
				<div class="container">
					<h3 class="blue_1 h">Business / Professional</h3>
				</div>
				<div class="container">
					<?php echo $this->render('business_side_bar')?>

					<div class="col-md-9 card">
						<div class="section ptop0">
							<h3 class="mykazi_green h">Getting Paid</h3>
							<div id="page-title">
								<h2 class="">Customer - Service Provider</h2>
							</div>
							<p class="medium-text">The service provider may use all available
								options to arrange payments from his/her customer.</p>
						</div>
						<div class="section ptop0">
							<div id="page-title">
								<h2 class="">Service Provider - MyKazi.co.ke</h2>
							</div>
							<p class="medium-text">The service provider may use one of the following options to
								settle invoices for success fees generated through our system:</p>
							<ul class="pricingla">
								<li>
									<h4 class="featurette-heading">1. M-pesa Payment</h4>
									<p  style="margin-left: 25px"></p>
								</li>
								<li>
									<h4 class="featurette-heading">2. Direct Bank Transfer</h4>
									<p style="margin-left: 25px"></p>
								<li>
									<h4 class="featurette-heading">3. Cash Payment</h4>
									<p style="margin-left: 25px"></p>
								</li>

							</ul>
						</div>


					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- End Wrap -->