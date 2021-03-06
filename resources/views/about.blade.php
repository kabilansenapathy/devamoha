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
    					<a href="donate">
    						Contribute
    					</a>
    				</li>
    				<li>
						<a href="contact">
							Contact
						</a>
    				</li>
					
		           <!--<li class="hidden-xs hidden-sm">
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
		            </li>-->
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
	                        <h2 class="title">Why We Exist</h2>
	                        <h3 class="about-us-content">At Amoha, we believe education has the power to help every child and student reach his or her potential.With the right guidance we can put students on the right path to graduation, skill development and becoming responsible citizens in the process.</h3>
	                    </div>
	                </div>
		    	</div>
				<div class="rowDividerControl ciModule ms-rtestate-read ms-rte-wpbox"><section class="row-divider--image" style="height:19px;"></section></div>
					<div class="container section text-center section-landing">
	                    <div class="col-md-12 col-md-offset-0">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">Belief</h2>
	                        <h3 class="about-us-content">At Amoha, we believe education has the power to help every child and student reach his or her potential</h3>
	                    </div>
	                </div>
					<div class="rowDividerControl ciModule ms-rtestate-read ms-rte-wpbox"><section class="row-divider--image" style="height:19px;"></section></div>
					<div class="container section text-center section-landing">
	                    <div class="col-md-12 col-md-offset-0">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">Problem</h2>
	                        <h3 class="about-us-content">However, in high-poverty and under privileged communities there are external factors and obstacles students are faced with every day that can interfere with their ability to both get to school and be ready and able to learn. It's these students who need a bit of extra, individualized support. But there’s a gap between the kind of help they need and the support the schools are designed to provide. The result of this gap is a shockingly high dropout rate and unskilled resources in these communities. As a result it not only affects him or her, it also has a lasting effect on our communities and society as a whole. </h3>
	                    </div>
	                </div>
					<div class="rowDividerControl ciModule ms-rtestate-read ms-rte-wpbox"><section class="row-divider--image" style="height:19px;"></section></div>
					<div class="container section text-center section-landing">
	                    <div class="col-md-12 col-md-offset-0">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">Solution</h2>
	                        <h3 class="about-us-content">Within these communities, dropouts and unavailability of resources are often highly concentrated. We are hence able to identify and target the specific schools that are in need of extra support. From there, we can start working to put students on the right path to graduation and becoming responsible citizens—which is where Amoha comes in.</h3>
	                    </div>
	                </div>

					
	      

				<!--<div class="container-fluid mission section text-left section-landing">
					<div class="mission-content col-lg-12 col-xs-12">
						
                        <div class="mission-text">
						<h3 class="text-center"> Mission </h3>
						    <p>Amoha is strongly committed to help students by inculcating the right knowledge and skills in them, besides making them aware of their responsibilities and privileges as citizens of the country.						    </p>
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
				</div>-->
				<!--<div class="rowDividerControl ciModule ms-rtestate-read ms-rte-wpbox"><section class="row-divider--image" style="height:19px;"></section></div>			
				<div class="container section text-center section-landing">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">Our Approach</h2>
	                        <h3 class="about-us-content">Amoha is strongly committed to ensuring all students graduate from middle & high school and be college ready and fully prepared academically for any and all opportunities they choose to pursue.</h3>
	                    </div>
	                </div>
				</div>-->



	        	<!--<div class="section landing-section">
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
 



@endsection