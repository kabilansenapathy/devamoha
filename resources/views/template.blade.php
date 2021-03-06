<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Amoha - @yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <script>
          window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
          ]); ?>
        </script>
		

	<!-- CSS Files -->
	
    <link href="{{{ mix('css/all.css') }}}" rel="stylesheet" />

</head>
    @yield('content')
	    <footer class="footer">

			<div class="footer-main">
				<div class="container">
					<div class="col-lg-4">
						<h3>Address</h3>
						
						<p>1050 Damodar Centre 3rd floor<br/>
						Avinashi Road Coimbatore - 641018<br/>
						Tamilnadu India<br>	
						
						<br></p>
					</div>
					<div class="col-lg-4">
						<h3>Contact</h3>
						<p>Tel: 04224392131 <br>
						Email: info@amohagt.org</p>
					</div>
					<div class="col-lg-4">
						<h3>Stay Informed</h3>
						<p>Join our mailing list to receive updates</p>
						<input type="text" class="custom-input" placeholder="Your Email">
						<button class="btn btn-custom btn-newsl btn-raised">
											Submit
										</button>
					</div>
				</div>
			
</div>
	
	    </footer>


    <!--   Core JS Files   -->
	<script src="{{{mix('js/all.js')}}}" type="text/javascript"></script>

</html>