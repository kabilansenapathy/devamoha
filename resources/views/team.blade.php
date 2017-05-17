@extends('template')


@section('title', 'Team')

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
		    	

				

                <div class="container team-container">
				
	        	<div class="section text-center">
                    <img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                <h2 class="title">Team</h2>

					<div class="team">
					<div class="grid">
						<div class="row">
						<div class="col-lg-4">
							<figure class="effect-lily">
								<img src="/img/profile/anand.jpg" class="img-raised" alt="img01"/>
								<figcaption>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									<a href="#">View more</a>
								</figcaption>			
								<h4 class="title">Anand S.K<br />
									<small class="text-muted">Chairman</small>
								</h4>
							</figure>
						</div>
						<div class="col-lg-4">
							<figure class="effect-lily">
								<img src="/img/profile/ganesh.jpg" class="img-raised" alt="img01"/>
								<figcaption>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									<a href="#">View more</a>
								</figcaption>			
								<h4 class="title">Ganesh Jagadheeshan<br />
									<small class="text-muted">Vice Chairman</small>
								</h4>
							</figure>
						</div>
						<div class="col-lg-4">
							<figure class="effect-lily">
								<img src="/img/profile/ram.jpg" class="img-raised" alt="img01"/>
								<figcaption>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									<a href="#">View more</a>
								</figcaption>			
								<h4 class="title">Ramprakash Jagadheeshan<br />
									<small class="text-muted">Secretary</small>
								</h4>
							</figure>
						</div>
						</div>
						<div class="row">
						<div class="col-lg-4">
							<figure class="effect-lily">
								<img src="/img/profile/madhu.jpg" class="img-raised" alt="img01"/>
								<figcaption>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									<a href="#">View more</a>
								</figcaption>			
								<h4 class="title">Madhu Damodaran<br />
									<small class="text-muted">Treasurer</small>
								</h4>
							</figure>
						</div>
						<div class="col-lg-4">
							<figure class="effect-lily">
								<img src="/img/profile/njain.jpg" class="img-raised" alt="img01"/>
								<figcaption>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									<a href="#">View more</a>
								</figcaption>			
								<h4 class="title">Nirmal Jain<br />
									<small class="text-muted">Trustee</small>
								</h4>
							</figure>
						</div>
						<div class="col-lg-4">
							<figure class="effect-lily">
								<img src="/img/profile/adhi.jpg" class="img-raised" alt="img01"/>
								<figcaption>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									<a href="#">View more</a>
								</figcaption>			
								<h4 class="title">Adhithya<br />
									<small class="text-muted">Trustee</small>
								</h4>
							</figure>
						</div>
						
					
			                
			            
					</div>
							
					</div>

	            </div>
                </div>



	        </div>
		</div>

    </div>


@endsection