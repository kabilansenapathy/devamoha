@extends('template')


@section('title', 'Contact Us')

@section('content')
<body class="profile-page">
	<nav id="navbar" class="navbar navbar-custom navbar-contact navbar-absolute">
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

        	<div class="collapse navbar-collapse no-pad" id="navigation-example">
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

<div id="map" class="map"></div>

	<div class="main main-raised">
		<div class="contact-content">
    		<div class="container">
            	<h2 class="title">Send us a message</h2>
				<div class="row">
					<div class="col-md-6">
						<p class="description"><br><br>
						</p>
						<form role="form" id="contact-form" method="post">
							<div class="form-group label-floating">
								<label class="control-label">Your name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group label-floating">
								<label class="control-label">Email address</label>
								<input type="email" name="email" class="form-control"/>
							</div>
							<div class="form-group label-floating">
								<label class="control-label">Phone</label>
								<input type="text" name="phone" class="form-control"/>
							</div>
							<div class="form-group label-floating">
								<label class="control-label">Your message</label>
								<textarea name="message" class="form-control" id="message" rows="6"></textarea>
							</div>
							<div class="submit text-center">
								<input type="submit" class="btn btn-custom btn-raised btn-round" value="Send" />
							</div>
						</form>
					</div>
                	<div class="col-md-4 col-md-offset-2">
    		        	<div class="info info-horizontal">
    						<div class="icon icon-custom">
    							<i class="material-icons">pin_drop</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">Find us at the office</h4>
    							<p> 44, Address Line 1<br/>
                                    Adress Line 2<br/>
                                    Coimbatore 641018<br/>
                                    Phone : +91-98765-04321
    							</p>
    						</div>
    		        	</div>
                        
    		        	
				    </div>
               </div>
            </div>
		</div>
    </div>


        <script>
      function initMap() {
        var uluru = {lat: 11.01 , lng: 76.97};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt-vkHly4wAQeOFYWJZfnzXFM7RKOQ56k&callback=initMap"></script>
</body>
@endsection