
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TechGorilla &mdash; DIY your Tech today </title>


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<!-- Google Fonts -->
	<link href='#css?family=Open+Sans:400,300,700|Monsterrat:400,700|Merriweather:400,300italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup-->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<!-- Cards -->
	<link rel="stylesheet" href="css/cards.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	<div id="fh5co-page">
		<nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
			<div class="container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 fh5co-logo">
					<a href="#" class="js-fh5co-mobile-toggle fh5co-nav-toggle"><i></i></a>
					<a href="{{ url('/') }}">TechGorilla</a>
				</div>
				<div class="col-lg-6 col-md-5 col-sm-5 text-center fh5co-link-wrap">
					<ul data-offcanvass="yes">
						<li class="active"><a href="{{ url('index/tour') }}">Tour</a></li>
						<li><a href="{{ url('index/work') }}">Gorilla's work</a></li>
						<li><a href="{{ url('index/share') }}">Share</a></li>
						<li><a href="{{ url('index/buyPrice') }}">Buy & Price</a></li>
						<li><a href="{{ url('index/about') }}">About</a></li>
					</ul>
				</div> 
				<div class="col-lg-3 col-md-4 col-sm-4 text-right fh5co-link-wrap">
					<ul class="fh5co-special" data-offcanvass="yes">
					    @if (Route::has('login'))
		                    @if (Auth::check())
		                        <li><a href="{{ url('/home') }}">HomeCenter</a></li>
		                           <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
		                    @else
		    					<li><a href="{{ url('/login') }}">Login</a></li>
								<li><a href="{{ url('/register') }}" class="call-to-action">Get Started</a></li>
		                    @endif
	            		@endif
						 
					</ul>
				</div>
			</div>
		</nav>


		<div class="fh5co-cover fh5co-cover-style-2 js-full-height" data-stellar-background-ratio="0.5" data-next="yes"  style="background-image: url(images/full_1.jpg);">
		  	<span class="scroll-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
				<a href="#">
					<span class="mouse"><span></span></span>
				</a>
			</span>
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover-text">
				<div class="container">
					<div class="row">
						<div class="col-md-push-6 col-md-6 full-height js-full-height">
							<div class="fh5co-cover-intro">
								<h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"> Create your own computer</h1>
								<h2 class="cover-text-sublead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Every computer is animated. TechGorilla provides a range of DIY services for your desktop. </h2>
								<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="#" class="btn btn-primary btn-outline btn-lg">See Our Work</a></p>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>

		
	

		

		<div class="fh5co-blog-style-1">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Recent From Our Members</h2>
						<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</div>
				<div class="row p-b">
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>	
								<div class="fh5co-category"><a href="{{ URL('article/show/1') }}">Tutorial</a></div>	
								<img src="images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
							</div>
							<div class="fh5co-post-text">
								<h3><a href="{{ URL('article/show/1') }}">How to Create Cards</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts...</p>
							</div>
							<div class="fh5co-post-meta">
								<a href="#"><i class="icon-chat"></i> 33</a>
								<a href="#"><i class="icon-clock2"></i> 2 hours ago</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.4s">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>	
								<div class="fh5co-category"><a href="{{ URL('article/show/2') }}">Health</a></div>	
								<img src="images/img_same_dimension_3.jpg" alt="Image" class="img-responsive">
							</div>
							<div class="fh5co-post-text">
								<h3><a href="{{ URL('article/show/2') }}">Drinking Ginger and Lemon Tea</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts...</p>
							</div>
							<div class="fh5co-post-meta">
								<a href="#"><i class="icon-chat"></i> 33</a>
								<a href="#"><i class="icon-clock2"></i> 2 hours ago</a>
							</div>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>	
								<div class="fh5co-category"><a href="{{ URL('article/show/3') }}">Tips</a></div>	
								<img src="images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
							</div>
							<div class="fh5co-post-text">
								<h3><a href="{{ URL('article/show/3') }}">4 Easy Steps to Create a Soup</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts...</p>
							</div>
							<div class="fh5co-post-meta">
								<a href="#"><i class="icon-chat"></i> 33</a>
								<a href="#"><i class="icon-clock2"></i> 2 hours ago</a>
							</div>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
						<a href="{{ url('index/share') }}" class="btn btn-primary btn-lg">View All Post</a>
					</div>
				</div>
			</div>
		</div>


		<div class="fh5co-features-style-1" style="background-image: url(images/full_4.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container" style="z-index: 3; position: relative;">
				<div class="row p-b">
					<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<h2 class="fh5co-heading">We Help Computer Reborn</h2>
					</div>
				</div>
				<div class="row">
					<div class="fh5co-features">
						<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
							<div class="icon"><i class="icon-ribbon"></i></div>
							<h3>Brand Strategy</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						</div>
						<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
							<div class="icon"><i class="icon-image22"></i></div>
							<h3>Design + Idenity</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						</div>
						<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
							<div class="icon"><i class=" icon-monitor"></i></div>
							<h3>Web Development</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						</div>

						<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
							<div class="icon"><i class="icon-video2"></i></div>
							<h3>Video Direction</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						</div>
						<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
							<div class="icon"><i class="icon-bag"></i></div>
							<h3>E-Commerce Integration</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						</div>
						<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">
							<div class="icon"><i class="icon-mail2"></i></div>
							<h3>Email Strategy</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						</div>

					</div>
				</div>
			</div>
		</div>
        
        

		<div class="fh5co-features-style-2">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Why Choose Us</h2>
						<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
					<div class="fh5co-icon"><i class="icon-command"></i></div>
					<div class="fh5co-desc">
						<h3>100% Free</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>	
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
					<div class="fh5co-icon"><i class="icon-eye22"></i></div>
					<div class="fh5co-desc">
						<h3>Retina Ready</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
					<div class="fh5co-icon"><i class="icon-toggle"></i></div>
					<div class="fh5co-desc">
						<h3>Fully Responsive</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
					<div class="fh5co-icon"><i class="icon-archive22"></i></div>
					<div class="fh5co-desc">
						<h3>Lightweight</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>	
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">
					<div class="fh5co-icon"><i class="icon-heart22"></i></div>
					<div class="fh5co-desc">
						<h3>Made with Love</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.6s">
					<div class="fh5co-icon"><i class="icon-umbrella"></i></div>
					<div class="fh5co-desc">
						<h3>Eco Friendly</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				</div>
			</div>
		</div>

		<div class="fh5co-pricing-style-2">
			<div class="container">
				<div class="row">
					<div class="row p-b">
						<div class="col-md-6 col-md-offset-3 text-center">
							<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Our Prices</h2>
							<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">We provide various pricing for you, all of pricings come with door-to-door services, 
								dubugging on-the-spot and 14-day change of mind*. (Conditions apply) </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="pricing">
		            <div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
		                 <h3 class="pricing-title">Upgrade</h3>
		                 <p class="pricing-sentence">Upgrade for your old computers</p>
		                 <div class="pricing-price"><span class="pricing-currency">$</span>59<span class="pricing-period">/ month</span></div>
		                 <ul class="pricing-feature-list">
		                     <li class="pricing-feature">3 upgrade options</li>
		                     <li class="pricing-feature">Bring your own parts</li>
		                     <li class="pricing-feature">1-year remaster service*</li>
		                 </ul>
		                 <button class="btn btn-success btn-outline">Choose plan</button>
		             </div>
		             <div class="pricing-item pricing-item--featured wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
		                 <h3 class="pricing-title">New build</h3>
		                 <p class="pricing-sentence">Customise your new PC</p>
		                 <div class="pricing-price"><span class="pricing-currency">$</span>89<span class="pricing-period">/ month</span></div>
		                 <ul class="pricing-feature-list">
		                     <li class="pricing-feature">All-in-one build</li>
		                     <li class="pricing-feature">5-year online-service</li>
		                     <li class="pricing-feature">Door-to-door service</li>
		                 </ul>
		                 <button class="btn btn-success btn-lg">Choose plan</button>
		             </div>
		             <div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
		                 <h3 class="pricing-title">Remaster</h3>
		                 <p class="pricing-sentence">PC Reborn</p>
		                 <div class="pricing-price"><span class="pricing-currency">$</span>39<span class="pricing-period">/ month</span></div>
		                 <ul class="pricing-feature-list">
		                     <li class="pricing-feature">No upgrade need</li>
		                     <li class="pricing-feature">No potential cost</li>
		                     <li class="pricing-feature">Free brand-new case</li>
		                 </ul>
		                 <button class="btn btn-success btn-outline">Choose plan</button>
		             </div>
		         </div>
		      </div>
			</div>
			<div class="col-md-6 col-md-offset-3 text-center">

							<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">*One free remaster service within 1 year of purchase. 
								For Hyper-customise, open-type cases, superme Liquid-Cooling builds please contact
								our support team. </p>
						</div>
		</div>
		
		

		<div class="fh5co-counter-style-2" style="background-image: url(images/full_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-section-content-wrap">
					<div class="fh5co-section-content">
						<div class="row">
							<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
								<div class="icon">
									<i class="icon-command"></i>
								</div>
								<span class="fh5co-counter js-counter" data-from="0" data-to="3" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Clients Worked With Today</span>
								
							</div>
							<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
								<div class="icon">
									<i class="icon-power"></i>
								</div>
								<span class="fh5co-counter js-counter" data-from="0" data-to="261" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Completed services</span>
							</div>
							<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
								<div class="icon">
									<i class="icon-code2"></i>
								</div>
								<span class="fh5co-counter js-counter" data-from="0" data-to="15" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Queries today</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="fh5co-testimonial-style-2">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Happy Customer</h2>
						<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">The best advertising comes from our customers.</p>
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
							<div class="fh5co-name">
								<img src="images/person_5.jpg" alt="">
								<div class="fh5co-meta">
									<h3>Chris Clark</h3>
									<span class="fh5co-company">XYZ Inc.</span>
								</div>
							</div>
							<div class="fh5co-text">
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</div>
						</div>	
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
							<div class="fh5co-name">
								<img src="images/person_4.jpg" alt="">
								<div class="fh5co-meta">
									<h3>Ian Stewart</h3>
									<span class="fh5co-company">XYZ Inc.</span>
								</div>
							</div>
							<div class="fh5co-text">
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. &rdquo;</p>
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
							<div class="fh5co-name">
								<img src="images/person_3.jpg" alt="">
								<div class="fh5co-meta">
									<h3>Mitch Silk</h3>
									<span class="fh5co-company">XYZ Inc.</span>
								</div>
							</div>
							<div class="fh5co-text">
								<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</div>
						</div>
					</div>
					
					<div class="clearfix visible-lg-block visible-md-block"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
							<div class="fh5co-name">
								<img src="images/person_1.jpg" alt="">
								<div class="fh5co-meta">
									<h3>Beth Glasgow</h3>
									<span class="fh5co-company">XYZ Inc.</span>
								</div>
							</div>
							<div class="fh5co-text">
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. &rdquo;</p>
							</div>
						</div>	
					</div>
					
					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">
							<div class="fh5co-name">
								<img src="images/person_2.jpg" alt="">
								<div class="fh5co-meta">
									<h3>Rob Smith</h3>
									<span class="fh5co-company">XYZ Inc.</span>
								</div>
							</div>
							<div class="fh5co-text">
								
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.6s">
							<div class="fh5co-name">
								<img src="images/person_6.jpg" alt="">
								<div class="fh5co-meta">
									<h3>Colleen Bass</h3>
									<span class="fh5co-company">XYZ Inc.</span>
								</div>
							</div>
							<div class="fh5co-text">
								<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm-block"></div>

				</div>
			</div>	
		</div>
        
        
			
		<div class="fh5co-footer-style-3">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<div class="fh5co-logo"><span class="logo">V</span> TechGorilla</div>
						<p class="fh5co-copyright">&copy; 2016 TechGorilla. <br>All Rights Reserved.  </a>  <br> 

							</p>
					</div>
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
						<h3>Company</h3>
						<ul class="fh5co-links">
							<li><a href="#">How it Works</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
						<h3>Connect</h3>
						<ul class="fh5co-links fh5co-social">
							<li><a href="#"><i class="icon icon-facebook2"></i> Facebook</a></li>
							<li><a href="#"><i class="icon icon-twitter"></i> Twitter</a></li>
							<li><a href="#"><i class="icon icon-dribbble"></i> Dribbble</a></li>
							<li><a href="#"><i class="icon icon-instagram"></i> Instagram</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
						<h3>About</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						<p><a href="{{ url('index/about') }}" class="btn btn-success btn-sm btn-outline">I'm a button</a></p>
						<p><a href="{{ url('admin/login') }}" class="btn btn-success btn-sm btn-outline">master login</a></p>		
					</div>
					<div class="clearfix visible-sm-block"></div>
				</div>
				<div class="row fh5co-made">
					<div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<p>Made with <i class="heart icon-heart"></i> Bootstrap</p>
												 <div class="copyrights">Bootstrap templete paied and collected from  </p>
					</div>
				</div>
			</div>
		</div>
		<!-- END footer -->
		
	</div>
	<!-- END page-->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
   <script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- WOW -->
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
