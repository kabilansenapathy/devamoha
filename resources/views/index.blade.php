@extends('template')

@section('title', 'Home')

@section('content')

<body class="landing-page">
    <nav id="navbar" class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="/index.php"><img class="navbar-logo" src="{{{ asset('img/logo.png') }}}"></a>
				<a class="navbar-brand" href="/index.php">Amoha</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
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
						<a href="contact">
							Contact
						</a>
    				</li>
					<li>
    					<a href="donate">
    						Contribute
    					</a>
    				</li>
		            <li>
		                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
		            </li>
		            <li>
		                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li>
		                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('img/05-full.jpg');">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<h1 class="title">Amoha</h1>
	                    <h4>Small tagline/ description preferably a 2-3 liner</h4>
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
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">WHO & WHY</h2>
	                        <h5 class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h5>
	                    </div>
	                </div>

					<div class="features">
						<div class="row">
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-primary">
										<i class="fa fa-handshake-o"></i>
									</div>
									<h4 class="info-title">Empower</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
		                    </div>
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-success">
										<i class="material-icons">assignment</i>
									</div>
									<h4 class="info-title">Educate</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
		                    </div>
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-danger">
										<i class="fa fa-users"></i>
									</div>
									<h4 class="info-title">Support</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
		                    </div>
		                </div>
					</div>
	            </div>

				<div class="parallax">
					<div class="parallax-content col-lg-8 col-xs-12 pull-right">
						<h3 class="title" style="color:#fff;"> Some Heading</h3>
						<p class="parallax-p">Description of something -  a 2 liner or more Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
						</p>
						<a class="custom" href="#">Learn more</a>
					</div>
				</div>
				<div class="container section text-center section-landing">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
							<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        <h2 class="title">Our Mission</h2>
	                        <h5 class="description">Amoha is strongly committed to ensuring all students graduate from middle & high school and be college ready and fully prepared academically for any and all opportunities they choose to pursue.</h5>
	                    </div>
	                </div>
	            </div>

	        	<div class="section landing-section">
	                <div class="container">
	                    <div class="col-md-8 col-md-offset-2">
							<div class="text-center">
								<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	                        	<h2 class="title">Contribute</h2>
								<h4 class="description">Convince me more with a sentence</h4>
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

	    <footer class="footer">
	        <div class="container">
	            <nav class="pull-left">
	                <ul>
	                    <li>
	                        <a href="#">
	                            Amoha
	                        </a>
	                    </li>
						<li>
	                        <a href="#">
	                           About Us
	                        </a>
	                    </li>
	                    <li>
	                        <a href="#">
	                           Blog
	                        </a>
	                    </li>
	                    <li>
	                        <a href="#">
	                            Contact
	                        </a>
	                    </li>
	                </ul>
	            </nav>
	            <div class="copyright pull-right">
	                &copy; 2017 Amoha
	            </div>
	        </div>
	    </footer>

	</div>
</body>

	<!--   Core JS Files   -->
	<script src="js/all.js" type="text/javascript"></script>

<script>
	$(window).scroll(function() {
		jQuery("#navbar").removeClass("navbar-absolute");
            $("#navbar").addClass("navbar-custom");
            $("#navbar").addClass("navbar-fixed-top");
        if ($("#navbar").offset().top > 100) {
            $("#navbar").removeClass("navbar-absolute");
            $("#navbar").addClass("navbar-custom");
            $("#navbar").addClass("navbar-fixed-top");
        } else {
             $("#navbar").removeClass("navbar-custom");
        }
    });
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
