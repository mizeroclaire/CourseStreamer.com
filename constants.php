<?php

// PROJECT ROOT - __DIR__ gets the directory containing this file)
define("ROOT", __DIR__ . "/");

// home directory
define("HOME_URL", 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);

// project boot - bootstrap file needed to load dependencies
define("BOOT", ROOT."app/bootstrap.php");

// public folders
define("CSS_ROOT", ROOT."public/css");
define("JS_ROOT", ROOT."public/js");
define("IMG_ROOT", ROOT."public/img");
define("VIDS_ROOT", ROOT."public/videos");
define("DL_ROOT", ROOT."public/dl");

// composer vendor folder
define("COMPOSER", ROOT."vendor"."/");

// views
define("VIEWS", ROOT."app/views"."/");

// COMMON PATHS
define("INI", ROOT."app/classes/Ini.php");

/*this line has been added because Animate_popover has been used with no definition*/
define("ANIMATE_POPOVER", ROOT."app/classes/Animate.Popover.php");
/*ends here  */

// no longer necessary since composer loads these classes automatically
// define("CLASSES", ROOT."app/classes");

define("Ajax", ROOT."public/js/Ajax.js");
define("JsLogin", ROOT."public/js/loginFunctions.js");
define("JsSignUp", ROOT."public/js/signup.js");