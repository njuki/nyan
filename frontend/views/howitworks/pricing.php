<?php 
$this->registerCssFile('@web/css/how-it-works.css');
$this->params ['breadcrumbs'] [] = $this->title;
?>
<!-- Start Wrap--->

<div id="wrap" style="background-color: #efefef">
	<div class="main" id="main-no-space">
		<div id="main-page">
			<div id="wrapper" class="container">

				<div class="col-md-12" style="margin-left: 0">
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
							<h3 class="mykazi_green h">Pricing</h3>


							<div class="well">
								<h4 class="h blue_1">Limited Time Offer:</h4>
								<p>Register NOW and benefit from the following discount:</p>
								<p>Initial registration fee of Ksh 1500/- and 8% success fee on
									jobs won.</p>
								<p>No Platform Fee.</p>
								<p>Offer remains valid for 1-year!</p>
								<a
									href="<?php echo Yii::$app->urlManager->createUrl('businesses/register'); ?>"
									class="btn btn-majoo">Register Now!</a>
							</div>
						</div>
						<div id="page-title">
							<h2>Regular Pricing</h2>
						</div>
						<div class="section ptop0">
							<ul class="pricingla">
								<li>
									<h4 class="featurette-heading">
										1. Registration Price: Ksh 2000/- per person
										</h3>
										<p style="margin-left: 25px">To register on our platform and
											activate your account to receive job requests, a one-off set
											up fee will be charged.</p>
								
								</li>
								<li>
									<h4 class="featurette-heading">
										2. Platform Fee: Ksh 499/- per month
										</h3>
										<p style="margin-left: 25px">To maintain only active accounts
											on our platform, we shall charge a minimal monthly fee of
											Ksh499/- per month.</p>
								
								</li>
								<li>
									<h4 class="featurette-heading">
										3. Success Fee: 9% commission (capped at Ksh 35,000/-)
										</h3>
										<p style="margin-left: 25px">The success of our platform is
											determined by our ability to generate high-­‐ quality
											referrals through intensive marketing on behalf of our
											service providers</p>
										<p style="margin-left: 25px">As such, our commission fee of 9%
											will be charged for successfully referring a paying customer
											to you.</p>
								
								</li>

							</ul>

						</div>
						<div class="section ptop0">
							<h3 class="featurette-heading">Important Notes:</h3>
							<ul class="what_we_do_on_white" style="list-style-type: none">
								<li><h4 class="featurette-heading">a) Service Provider must
										report the 'win' upon selection by customer.</h4>
									<p style="margin-left: 30px">Our system is built on a trust
										relationship that service providers will inform us that they
										successfully received a client through our system. The service
										provider must report this ‘win’ with the associated value of
										the deal, to generate the commission payable.</p></li>
								<li>
									<h4 class="featurette-heading">b) We will suspend professionals
										who avoid our fees.</h4>
									<p style="margin-left: 30px">We shall regularly audit our
										clients and customers to ensure compliance by our rules.
										Service providers that attempt to breach our
										trust-­‐relationship and avoid our success fees shall be
										suspended from our system.</p>
								</li>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- End Wrap -->