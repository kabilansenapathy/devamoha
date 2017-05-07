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
			<div class="container section">
		    	<div class="section text-center">
					<img class="navbar-logo" src="{{{asset('img/logo.png')}}}">
	    			<h2 class="title">Our Work</h2>
					<div class="col-lg-4">
						<button onclick="fact_change('valparai')" class="btn btn-custom btn-lg">Valparai</button>
					</div>
					<div class="col-lg-4">
						<button onclick="fact_change('sholayar')" class="btn btn-custom btn-lg">Sholayar Dam</button>
					</div>
					<div class="col-lg-4">
						<button onclick="fact_change('pannimadai')" class="btn btn-custom btn-lg">Pannimadai</button>
					</div>
				</div>
				
			</div>
			<div class="rowDividerControl ciModule ms-rtestate-read ms-rte-wpbox"><section class="row-divider--image" style="height:19px;"></section></div>
			<div class="section facts-section container-fluid">
				<h2 id="fact_title" class="title text-center">Combined Facts</h2>
				<div class="col-lg-5 pull-right">
				<div class="col-lg-6 text-center">
					<img src="img/children.png">
					<p class="project-fact-h">Children Served</p>
					<p id="ch_no">250</p>
				</div>
				<div class="col-lg-6 text-center">
					<img src="img/school.png">
					<p class="project-fact-h">Schools</p>
					<p id="sc_no">250</p>
				</div>
				<div class="col-lg-6 text-center">
					<img src="img/teacher.png">
					<p class="project-fact-h">Teachers Appointed</p>
					<p id="te_no">250</p>
				</div>
				<div class="col-lg-6 text-center">
					<img src="img/classroom.png">
					<p class="project-fact-h">Classrooms</p>
					<p id="cl_no">250</p>
				</div>
				</div>
			</div>
		</div>

    </div>
<script>

	function fact_change(location){
		if(location == "valparai"){
			document.getElementById("fact_title").innerHTML = "Valparai";
			document.getElementById("ch_no").innerHTML = 200;
			document.getElementById("sc_no").innerHTML = 2;
			document.getElementById("te_no").innerHTML = 10;
			document.getElementById("cl_no").innerHTML = 5;
		}
		else if(location == "sholayar"){
			document.getElementById("fact_title").innerHTML = "Sholayar";
			document.getElementById("ch_no").innerHTML = 50;
			document.getElementById("sc_no").innerHTML = 20;
			document.getElementById("te_no").innerHTML = 10;
			document.getElementById("cl_no").innerHTML = 6;
		}
		if(location == "pannimadai"){
			document.getElementById("fact_title").innerHTML = "Pannimadai";
			document.getElementById("ch_no").innerHTML = 56;
			document.getElementById("sc_no").innerHTML = 3;
			document.getElementById("te_no").innerHTML = 10;
			document.getElementById("cl_no").innerHTML = 4;
		}
	}
</script>

</body>
@endsection