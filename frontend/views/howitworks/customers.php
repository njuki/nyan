<?php 
use yii\helpers\Url;

$this->registerCssFile('@web/css/how-it-works.css');
$this->params ['breadcrumbs'] [] = $this->title;
?>
<!-- Start Wrap--->
<div class="site-about">
<div id="wrap" style="background-color: #efefef">
	<div class="main" id="main-no-space">
		<div id="main-page">
			<div id="wrapper" class="container">

				<div class="span12" style="margin-left:0">
					<div class="headline" id="page-title">
						<h2 class="mykazi_red h">How it works?</h2>
					</div>
					<?php echo $this->render('how_it_works_nav'); ?>

				</div>
				
				<h3 class="blue_1 h">Customers</h3>
					<div class="row customers" id="piece-of-this">
						<!-- <div class="span6 mb20">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe allowfullscreen="" class="embed-responsive-item"
									frameborder="0" height="400" mozallowfullscreen=""
									src="https://player.vimeo.com/video/59108621"
									webkitallowfullscreen="" width="550"></iframe>
							</div>
						</div>-->
						<div class="container">
						<div class="span12 mb20" id="need-a-job-done">
							<h2 class="lh14 mb20">Need a Job Done Now?</h2>
							<h3>Just a few simple steps to start getting quote:</h3>
							<div class="row mb20">
								<div class="col-xs-1">
									<div class="linum">1</div>
								</div>
								<div class="col-xs-10" style="line-height: 2.5em">
									<h4>Let us know, either online or via phone, the details of
										your job.</h4>
									<p style="line-height: 20px">Be sure to be as detailed as
										possible and provide ample information to allow our registered
										professionals to make informed decisions in their quatation.</p>
								</div>
							</div>
							<div class="row mb20">
								<div class="col-xs-1">
									<div class="linum">2</div>
								</div>
								<div class="col-xs-10" style="line-height: 2.5em">
									<h4>Your profile will be automatically created, and you'll be
										ready to start receiving quotes now.</h4>
										
									<div class="col-xs-8" style="line-height: 2.5em; padding-left: 0">
									<p style="line-height: 20px">Wait sufficient time to receive
										multiple competitive quotations.</p>
									<p style="line-height: 20px">
										Compare a range of quotes from our registered professionals,
										but if you don't like any of them, there is <span
											class="text-red"><b>no obligation to hire</b></span>. Just
										close your job and walk away.
									</p>
									
								</div>	
									<div class="col-xs-3">
									<img src="<?php echo Url::to('@web/images/risk.png') ?>" class="risk"/>
								</div>
										
										
										</div>
		
							</div>
							<div class="row mb20">
								<div class="col-xs-1">
									<div class="linum">3</div>
								</div>
								<div class="col-xs-10" style="line-height: 2.5em">
									<h4>Simply choose the right professional for the job.</h4>
									<p style="line-height: 20px">Be sure to look at the
										professionals’ profile, his/her reviews, and also contact them
										to ensure that they have a full understanding of the job.</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="container section grey_section">
				<div class="container">
					<h3 class="mykazi_green h">Note the following Instructions</h3>
					<ul class="what_we_do main">
						<li>a) You must select 'Hire Professional', in order to finalise
							the selection on your end.</li>
						<li>b) The professional will have the final say in 'Accepting the
							Job' and commencing a binding contract to carry out the work.</li>
						<li>c) Upon completion of the job, and payment, you will be able
							to leave feedback for service provider.</li>
					</ul>
					<p class="medium-text">Should any problems arise, please contact our customer service
						team who would be happy to assist.</p>
				</div>
			</div>
			<div class="container white_section section">
				<div class="container">
					<h3 class="mykazi_green h">Safeguard our Marketplace from Doggy
						Professionals</h3>
					<p class="medium-text">We take complaints very seriously. We have a very strict "two
					complain ts and you're out" policy.</p>
					<p class="medium-text">If a business / professional
					receives two serious complaints, we terminate their account. It's
					as simple as that.</p>

				</div>
			</div>


		</div>


	</div>
</div>
</div>

<!-- End Wrap -->