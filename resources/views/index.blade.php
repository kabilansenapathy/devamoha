@extends('template')

@section('title', 'Home')

@section('content')

<body class="landing-page">
    <nav id="navbar" class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="/index.php"><img class="navbar-logo" src="{{{ asset('img/logo.png') }}}"></a>
				<a class="navbar-brand" href="/index.php">Amoha</a>
        	</div>

        	<div class="collapse navbar-collapse no-pad" id="navigation">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
    					<a href="about">
    						About Us
    					</a>
    				</li>
					<li>
    					<a href="team" >
    						Team
    					</a>
    				</li>
					<li>
    					<a href="projects">
    						Our Work
    					</a>
    				</li>
    				<li>
						<a href="contact">
							Contact
						</a>
    				</li>
					<li>
    					<a href="donate">
    						Contribute
    					</a>
    				</li>
		            <li class="hidden-xs hidden-sm">
		                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
		            </li>
		            <li class="hidden-xs hidden-sm">
		                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li class="hidden-xs hidden-sm">
		                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="">
            <div class="container">
                <div class="container">
					<div class="col-md-6">
						<!--<h1 class="title">Amoha</h1>-->
	                    <h4 class="header-text">Amoha is strongly committed to help students by inculcating the right knowledge and skills in them, besides making them aware of their responsibilities and privileges as citizens of the country.</h4>
	                    <br />
	                    <a href="#" class="btn btn-custom btn-raised btn-lg">
							 Learn more
						</a>
					</div>
                </div>
            </div>
        </div>

		<div class="main">
			<div class="">
		    	<div class="container section text-center section-landing">
	                <div class="container">
	                    <div class="col-md-8 col-md-offset-2">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">Mission</h2>
	                        <h3 class="description">At Amoha, we believe education has the power to help every child and student reach his or her potential.With the right guidance we can put students on the right path to graduation, skill development and becoming responsible citizens in the process.</h3>
							<a class="custom" href="/about"><h4><b>Learn More About Amoha</h4></b></a>
	                    </div>
	                </div>
<div class="rowDividerControl ciModule ms-rtestate-read ms-rte-wpbox"><section class="row-divider--image" style="height:19px;"></section></div>
					<div class="features container">
						<div class="container">
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-primary">
										<i class="fa fa-handshake-o"></i>
									</div>
									<h4 class="info-title">Empower</h4>
									<p>Schools & Institutions feel empowered if they have our highly competent teachers on board in areas where they had a deficit.</p>
								</div>
		                    </div>
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-success">
										<i class="material-icons">assignment</i>
									</div>
									<h4 class="info-title">Educate</h4>
									<p>Students gain much more knowledge and become intelligent when they have teachers to provide the required support for them all through.</p>
								</div>
		                    </div>
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-danger">
										<i class="fa fa-users"></i>
									</div>
									<h4 class="info-title">Support</h4>
									<p>They are confident that they always have somebody to help them work through academic challenges during and also after school.</p>
								</div>
		                    </div>
		                </div>
					</div>
	            </div>
<!--<div class="section bg-blue text-center">
						<div class="container">
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-white">
										<i class="fa fa-handshake-o"></i>
									</div>
									<h4 class="info-title">Empower</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
		                    </div>
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-white">
										<i class="material-icons">assignment</i>
									</div>
									<h4 class="info-title">Educate</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
		                    </div>
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-white">
										<i class="fa fa-users"></i>
									</div>
									<h4 class="info-title">Support</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
		                    </div>
		                </div>
					</div>-->
				<div class="parallax">
					<div class="parallax-content col-lg-8 col-xs-12 pull-right">
						<!--<h3 class="title" style="color:#fff;"> Some Heading</h3>-->
						<p class="parallax-p">A government school in Sholayar dam in Valparai did not have the required assistance  to teach their students Math & Science. Now that has been taken care of and the students have successfully taken up their exams.
						</p>
						<a class="btn btn-custom" href="/about">Read more about our work</a>
					</div>
				</div>
				<!--<div class="container section text-center section-landing">
	                <div class="container">
	                    <div class="col-md-8 col-md-offset-2">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">Our Mission</h2>
	                        <h5 class="description">Amoha is strongly committed to ensuring all students graduate from middle & high school and be college ready and fully prepared academically for any and all opportunities they choose to pursue.</h5>
	                    </div>
	                </div>
	            </div>-->

	        	<div class="section landing-section">
	                <div class="container">
	                    <div class="col-md-8 col-md-offset-2">
							<div class="text-center">
								<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        	<h2 class="title">Contribute now to support more schools</h2>
								<h4 class="description">Your donation will help develop educated and responsible citizens.</h4>
							</div>
							<div class="text-center">
	                        <form class="contact-form">
	                            
	                                <div class="col-md-4 col-md-offset-3">
										
											<!--<span class="input-group-addon">
												<i class="fa fa-inr"></i>
											</span>-->
											<div class="form-group is-empty">
												<input type="text" class="custom-input" placeholder="₹ 500">
											</div>
										
	                                </div>
									<div class="col-md-4 btn-contri text-left">
	                                    <button class="btn btn-custom btn-raised">
											Submit
										</button>
	                                </div>
	                                <!--<div class="col-md-6">
										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input type="email" class="form-control">
										</div>
	                                </div>-->
									<!--<div class="col-md-4">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-inr"></i>
											</span>
											<div class="form-group is-empty">
												<input type="text" class="form-control" placeholder="500"><span class="material-input"></span>
											</div>
										</div>
									</div>-->
	                        

								

	                            
	                        </form>
							</div>
	                    </div>
	                </div>

	            </div>
	        </div>

		</div>



	</div>
</body>

	<!--   Core JS Files   -->
	

<script>
	//jQuery("#navbar").removeClass("navbar-absolute");
</script>
	<!--<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>-->
@endsection
