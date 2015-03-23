<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>StrimUp.com</title>
	<meta charset='utf-8'>
	<link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">


	<link href="{{asset('css/home.blade.css')}}" rel="stylesheet">

    <!----testing--->

    <!-- Custom CSS -->
    <link href="{{ url('/vendor/sb-admin-1.0.2') }}/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ url('/vendor/sb-admin-1.0.2') }}/css/plugins/morris.css" rel="stylesheet">

    <!-- Application CSS -->
    <link href="{{ url('/') }}/css/strimup.main.css" rel="stylesheet">
    <!-- <link href="{{ url('/') }}/css/bootstrap-responsive.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="{{ url('/vendor/sb-admin-1.0.2') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="{{asset('css/community.css')}}">-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!------>





	<!-- Fonts -->
	<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->
    <script src="{{ url('/vendor/sb-admin-1.0.2') }}/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('/vendor/sb-admin-1.0.2') }}/js/bootstrap.min.js"></script>
</head>
<body id="main">
	<!--<nav class="navbar navbar-default container">
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
					<!--<li><a href="/">Home</a></li>
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
	</nav>-->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top container" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Strim Up</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>Muragijimana R</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Muragijimana R <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="main-nav">
            @include('widgets.main_menu')
        </div>
    </nav>
	@yield('content')
	<!-- Scripts -->
	<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
	<script src="{{asset('js/popup/angular.min.js')}}"></script>
	<script src="{{asset('js/popup/angular-route.min.js')}}"></script>
	
    <script src="{{asset('js/popup/angular-ui-bootstrap-modal.js')}}"></script>
    <script src="{{asset('js/popup/app.js')}}"></script>
    <script src="{{asset('js/popup/videoController.js')}}"></script>
</body>
</html>
