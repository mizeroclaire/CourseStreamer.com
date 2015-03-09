<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Fun lessons in programming, learning, social media" />
	<meta name="keywords" content="strimup, programming, fun, lessons, learn, platform" />
	<meta name="author" content="CourseStreamer.com" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/helpers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/foundation.css')}}">
</head>
<title>
	StrimUp|Home
</title>
</head>
<body class="app" style="font-family: Verdana, Arial, Sans-Serif;">

<div id="container">

	<header class="text-center">
		<div class="row">
			<div class="large-12 columns">
				<hgroup>
					<h1 style="font-family: Verdana, Arial, Sans-Seri"class="app-name">Strim Up</h1>
					<h3 style="font-family: Verdana, Arial, Sans-Seri" class="app-slogan">Fun lessons in programming.</h3>
				</hgroup>
			</div>
		</div>
	</header><!-- /header -->
</div>
<main style="background:#AED;">
  <div class="row">
    <div class="large-12 columns">

  <!--middele view that will be extended with yield-->
  <div class="row">
  <div class="large-6 columns">
    <h1>Featured Lesson</h1>
    <p class="summary">
	    (A short summary about this lesson...) 
	    For example: This lesson teaches you how to write a basic Javascript function.
    </p>
    <p><a href="#">link to video</a></p>
  </div>
  <div class="large-6 columns text-center">
    <br>
    <video src="" width="" autobuffer autoloop loop controls poster="{{asset('img/')}}"></video>
    <a href="/play-ground" class="button radius">View here in the Playground</a>
  </div>
</div>
<!--end of middle view-->


    </div>
  </div>
</main>
<div id="container">

  <footer class="text-center">
    <div class="row">
      <div class="large-12 columns">
        <h3>Register an account or Sign In</h3>
        <p><a href="auth/register" class="button radius success">Sign Up</a>
          <a href="auth/login" class="button radius primary">Sign In</a>
        <br>To be able to <b>save videos to playlist, watch premium videos, and so much more</b></p>
        <hr>
        <h6>
        &copy; <?php date_default_timezone_set('UTC'); echo date('Y'); ?>by StrimUp&trade;
        </h6>
      </div>
    </div>
  </footer>
</div>
@yield('content')
  <script src="{{asset('vendor/foundation-5.5.0/js/vendor/jquery.js')}}" type="text/javascript" charset="utf-8" async defer></script>
  <script src="{{asset('vendor/foundation-5.5.0/js/foundation.min.js')}}" type="text/javascript" charset="utf-8" async defer></script>
  <script>
  $(document).foundation();
  </script>
</body>
</html>