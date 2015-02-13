<?php

# autoload classes with composer
require COMPOSER.'autoload.php';

# load app classes,namespaces as aliases
// use Strimup\Ini as Ini;
// use Strimup\Auth as Auth;
// use Strimup\Animate as Animate;

# load composer classes as aliases
class_alias('Cartalyst\Sentry\Facades\Native\Sentry', 'Sentry'); // Sentry alias

// load main view
include ROOT."app/views/layouts/app.blade.php";

?>