@extends('template')


@section('title', 'About')

@section('content')
<body class="profile-page">
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
    					<a href="team">
    						Team
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
		<div class="header header-filter about-background"></div>

		<div class="main main-raised">
			<div class="">
		    	<div class="container section text-center section-landing">
	                <div class="row">
	                    <div class="col-md-12 col-md-offset-0">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">About Us</h2>
	                        <h5 class="about-us-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h5>
	                    </div>
	                </div>

					
	            </div>

				<div class="container-fluid section text-center section-landing">
					<div class="parallax-content col-lg-6 col-xs-12">
						<h3 class="text-center"> Mission </h3>
                        <div class="mission-text">
						    <p>Description of something -  a 2 liner or more Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
						    </p>
                        </div>
						
					</div>
                    <div class="parallax-content col-lg-6 col-xs-12">
						<h3 class="text-center">Vission</h3>
						 <div class="mission-text">
						    <p>Description of something -  a 2 liner or more Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
						    </p>
                        </div>
					</div>
				</div>
				
				<div class="container section text-center section-landing">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">Our Approach</h2>
	                        <h5 class="description">Amoha is strongly committed to ensuring all students graduate from middle & high school and be college ready and fully prepared academically for any and all opportunities they choose to pursue.</h5>
	                    </div>
	                </div>
				</div>
				<div class="container section text-center section-landing">
					<div class="row">
						<div class="col-lg-4">
							<h4 class="title">Belief</h4>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
						</div>
						<div class="col-lg-4">
							<h4 class="title">Problem</h4>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
						</div>
						<div class="col-lg-4">
							<h4 class="title">Solution</h4>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
						</div>
					</div>
	            </div>



	        	<div class="section landing-section">
	                <div class="container">
	                    <div class="col-md-8 col-md-offset-2">
							<div class="text-center">
								<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        	<h2 class="text-center title">Send Us a Message</h2>
								<h4 class="text-center description">Convince me more with a sentence</h4>
							</div>
	                        <form class="contact-form">
	                            <div class="row">
	                                <div class="col-md-6">
										<div class="form-group label-floating">
											<label class="control-label">Your Name</label>
											<input type="text" class="form-control">
										</div>
	                                </div>
	                                <div class="col-md-6">
										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input type="email" class="form-control">
										</div>
	                                </div>
									<div class="col-md-12">
										
											<div class="form-group is-empty">
												<textarea type="text" class="form-control" placeholder="Message"></textarea>
											</div>
											
									</div>
	                            </div>

								

	                            <div class="row">
	                                <div class="col-md-4 col-md-offset-4 text-center">
	                                    <button class="btn btn-custom btn-raised">
											Submit
										</button>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>

	            </div>
	        </div>
		</div>

    </div>
 


</body>
@endsection