<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="Fun lessons in programming" />
  <meta name="keywords" content="strimup, programming, fun, lessons, learn, platform" />
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

	<header class="text-center">
		<div class="row">
			<div class="large-12 columns">
				<hgroup>
					<h1 class="app-name">Strim Up</h1>
					<h3 class="app-slogan">Fun lessons in programming</h3>
				</hgroup>
			</div>
		</div>
	</header><!-- /header -->

</div>

<main>
  <div class="row">
    <div class="large-12 columns">

    <?php include VIEWS.'home.php'; ?>

    </div>
  </div>
</main>

<div id="container">

  <footer class="text-center">
    <div class="row">
      <div class="large-12 columns">

        <h3>Register an account</h3>
        <p><a href="<?php echo HOME_URL.'signup' ?>" class="button radius success">Sign Up</a>
        <br>To be able to <b>save videos to playlist, watch premium videos, and so much more</b></p>

        <hr>

        <h6>
        &copy; <?php date_default_timezone_set('UTC'); echo date('Y'); ?>
        </h6>
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
