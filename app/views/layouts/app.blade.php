<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="Fun programming lessons" />
  <meta name="keywords" content="strimup, programming, lessons learn platform fun" />
  <meta name="author" content="CourseStreamer.com" />

  <title>Strim Up</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo HOME_URL.'public/favicon.ico'; ?>" type="image/x-icon">

  <!-- grid framework -->
  <link rel="stylesheet" href="<?php echo HOME_URL.'public/vendor/foundation-5.5.0/css/foundation.css'; ?>">

  <!-- my css -->
  <link rel="stylesheet" href="<?php echo HOME_URL.'public/css/general.css'; ?>">
  <link rel="stylesheet" href="<?php echo HOME_URL.'public/css/helpers.css'; ?>">
  <link rel="stylesheet" href="<?php echo HOME_URL.'public/css/app.css'; ?>">

  <!-- modernizr: html5 capabilities -->
  <script src="<?php echo HOME_URL.'public/vendor/foundation-5.5.0/js/vendor/modernizr.js'; ?>" type="text/javascript" charset="utf-8" async defer></script>

</head>
<body class="app">

<div id="container">

	<header class="minibar">
		<div class="row">
			<div class="large-6 columns">
				<hgroup>
					<h1 class="app-name">{{ HTML::link('/', 'Money Trzz') }}</h1>
					<h3 class="app-slogan">That's the perfect place for shade</h3>
				</hgroup>
			</div>
			<div class="large-6 columns">
        <br><br>
				<ul class="inline-list">
					@if($errors->has('errors'))
					<li>{{ HTML::link('welcome', 'HOME_URL') }}</li>
					<li>{{ HTML::link('user/account', 'My Account', array('class' => '')) }}</li>
					<li>{{ HTML::link('user/logout', 'Logout') }}</li>
					@endif
				</ul>
			</div>
		</div>
	</header><!-- /header -->

  <main>
    @yield('content')
  </main>

  <footer>
    <div class="row">
      <div class="large-6 columns">
        <ul class="inline-list">
          <li>{{ HTML::link('legal/terms', 'Terms and conditions') }}</li>
          <li>{{ HTML::link('legal/privacy', 'Privacy policy') }}</li>
        </ul>
      </div>
      <div class="large-6 columns text-right">
        <p class="copyright">Copyright &copy; {{ date('Y') }}, {{ HTML::link('https://appz.meridiansoftech.co', 'Meridian Appz Inc.') }}</p>
      </div>
    </div>
  </footer>

</div>

  <script src="<?php echo HOME_URL.'public/vendor/foundation-5.5.0/js/vendor/jquery.js'; ?>" type="text/javascript" charset="utf-8" async defer></script>
  <script src="<?php echo HOME_URL.'public/vendor/foundation-5.5.0/js/foundation.min.js'; ?>" type="text/javascript" charset="utf-8" async defer></script>
  <script>
  $(document).foundation();
  </script>

</body>
</html>
