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
		<div class="header header-filter about-background"></div>

		<div class="main main-raised">
			<div class="">
		    	



                <div class="container">
	        	<div class="section text-center">
                    <img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                <h2 class="title">Details</h2>
					<div class="col-lg-3">
						<button class="btn btn-custom btn-newsl btn-raised">
											₹ 100
						</button>
						<button class="btn btn-custom btn-newsl btn-raised">
											₹ 500
						</button>
						<button class="btn btn-custom btn-newsl btn-raised">
											₹ 1000
						</button>
					</div>
					<div class="col-lg-3">
						<div style="padding-top:7px;">
							<input type="text" class="custom-input" placeholder="₹ 500">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="col-lg-6">
							<input type="text" class="custom-input donate-input" placeholder="First Name">
						</div>
						<div class="col-lg-6">
							<input type="text" class="custom-input donate-input" placeholder="Last Name">
						</div>
						<div class="col-lg-12" style="padding-top:10px;">
							<input type="text" class="custom-input donate-input" placeholder="Address Line 1">
						</div>
						<div class="col-lg-12"style="padding-top:10px;">
							<input type="text" class="custom-input donate-input" placeholder="Address Line 1">
						</div>
						<div class="col-lg-6"style="padding-top:10px;">
							<input type="text" class="custom-input donate-input" placeholder="City">
						</div>
						<div class="col-lg-6"style="padding-top:10px;">
							<input type="text" class="custom-input donate-input" placeholder="State">
						</div>
						<div class="col-lg-12"style="padding-top:10px;">
							<input type="text" class="custom-input donate-input" placeholder="Email Id">
						</div>
						<div class="col-lg-12 text-center">
							<button class="btn btn-custom btn-newsl btn-raised">
											Donate Now
						</button>
						</div>
					</div>


	            </div>
                </div>

<!--
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

	            </div>-->
	        </div>
		</div>

    </div>


</body>
@endsection