<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'My Kazi | Find a tradesman - Electricians, Plumbers,
	Painters and more...';
?>

<div class="jumbotron">
      <div class="container">
      <div class="row">
      <div class="col-md-8">
        <h1 id="main-text" style="color: #C0504D">Find <span id="service_carousel" style="position: relative; display: inline-block;">Electricians</span></h1>
        <h3 class="h">The easy way...</h3>
        <p>
        <?= Html::a('Get a Quote Now »', [''], ['class' => 'btn btn-success btn-lg h']) ?>
        <?= Html::a('Register Business', ['/business/create'], ['class' => 'btn btn-primary btn-lg h']) ?>
      </div>
 
      <div class="col-md-4">
      <img src="/mykazi/themes/mykazi/static/images/slides/draw.png" alt="image">
           </div>
      </div>
    </div>
    </div>

<div class="container grey_section section">
		<div class="container">
			<h3 class="mykazi_green h">What we do</h3>
			<ul class="what_we_do">
				<li>We connect you to professionals available to do your job on your
					terms.</li>
				<li>From local Fundis to Accountants, Landscape Artists to Graphic
					Designers, and everything in between. Get ANYTHING done, ANYTIME,
					ANYWHERE.</li>
				<li>It is 100% Free, with no obligation.</li>
			</ul>
		</div>
	</div>

<div class="container white_section section">
		<div class="container">
			<h3 class="mykazi_green h">How It Works</h3>
			<div class="row">
				<!-- Project -->
				<div class="col-md-4">
					<div class="item-description">
						<h4>
							TELL US ONCE
						</h4>
						<p>No Hassle. Tell us what you need done online, or over the
							phone.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-description">
						<h4>
							THEY CONTACT YOU
						</h4>
						<p>Get multiple quotes from the professionals that want your job.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-description">
						<h4>
						YOU PICK THE BEST
						</h4>
						<p>Use quotes, feedback and online profiles to select the right
							provider for you.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="container grey_section section">
		<div class="container">
			<h3 class="mykazi_green h">Why MyKazi.co.ke?</h3>
			<div class="row">
				<!-- Project -->
				<div class="col-md-4">
					<div class="item-description">
						<h4>Every Shilling Counts</h4>
						<p>All professionals that want your job must submit a quotation.</p>
						<p>With multiple quotations, you’ll always have a better
							approximation to fair pricing.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-description">
						<h4>Trustworthy Professionals</h4>
						<p>Find Trusted local Freelancers and businesses on system.</p>
						<p>
							We have a <span class="mykazi_green"><em>"Two Complaints and
									You're Out"</em></span> policy, and on-going compliance checks
							to build confidence in our system.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-description">
						<h4>Be More Inform</h4>
						<p>Our customers leave feedback about their experience, so that
							everyone can make an informed decision about who to hire.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="container white_section section">
		<div class="container">
			<h3 class="mykazi_green h">Popular Services</h3>
			<div class="row popular_services">
				<!-- Project -->
				<div class="col-md-4">
					<div class="item-description">
						<ul>
							<li>Air Condition Installation</li>
							<li>Architects</li>
							<li>Carpet Cleaning</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-description">
						<ul>
							<li>Electricians</li>
							<li>Fencing</li>
							<li>Gardening</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-description">
						<ul>
							<li>Painter</li>
							<li>Plumber</li>
							<li>Removalists</li>
						</ul>
					</div>
				</div>
			</div>
			<a class="blue_1 btn btn-default" style="font-size: 20px; font-weight: 700">See All
				Services</a>
		</div>
	</div>