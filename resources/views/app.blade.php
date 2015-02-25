<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>StrimUp.com</title>

	<link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.css">
	<link href="/css/home.blade.css" rel="stylesheet">
	<!-- Fonts -->
	<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body id="main">
	<nav class="navbar navbar-default container">
		<div class="container-fluid" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">StrimUp mix</a>
				<a class="navbar-brand" href="#">Business</a>
				<a class="navbar-brand" href="#">Education</a>
				<a class="navbar-brand" href="#">Notifications(200)</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
				<ul class="nav navbar-nav">
					<!--<li><a href="/">Home</a></li>-->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
								<li><a href="/settings">Settings</a></li>
								<li><a href="/privacy">Privacy&amp;Policy</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')
	<!-- Scripts -->
	<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
	<script  src="/js/ajax.js"></script>
	<script src="/js/youtube/bootstrap.youtubepopup.js"></script>
	<script src="/js/youtube/bootstrap.youtubepopup.min.js"></script>
	<script  src="/js/message/message.poster.js"></script>
	<script src="/js/jquery-1.10.2.js"></script>
</body>
</html>
