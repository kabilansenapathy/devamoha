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
	        <div class="container">
	            <nav class="pull-left">
	                <ul>
	                    <li>
	                        <a href="/">
	                            Amoha
	                        </a>
	                    </li>
						<li>
	                        <a href="/about">
	                           About Us
	                        </a>
	                    </li>
	                    <li>
	                        <a href="#">
	                           Blog
	                        </a>
	                    </li>
	                    <li>
	                        <a href="contact">
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


    <!--   Core JS Files   -->
	<script src="{{{mix('js/all.js')}}}" type="text/javascript"></script>


</html>