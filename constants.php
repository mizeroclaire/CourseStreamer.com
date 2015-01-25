<?php

// PROJECT ROOT: __DIR__ gets the directory containing this file)
define("ROOT", __DIR__ . "/");
// project boot - bootstrap file needed to load dependencies
define("BOOT", ROOT."app/bootstrap.php");

// COMMON PATHS
define("INI", ROOT."app/classes/Ini.php");

/*this line has been added because Animate_popover has been used with no definition*/
define("ANIMATE_POPOVER", ROOT."app/classes/Animate.Popover.php");
/*ends here  */

// no longer necessary: composer loads these classes automatically
// define("CLASSES", ROOT."app/classes");

define("VIEWS", ROOT."app/views");
define("PUBLIC", ROOT."public");
define("CSS", ROOT."public/css");
define("JS", ROOT."public/js");
define("Ajax", ROOT."public/js/Ajax.js");
define("JsLogin", ROOT."public/js/loginFunctions.js");
define("JsSignUp", ROOT."public/js/signup.js");

// public folders
define("IMGS", ROOT."public/img");
define("VIDS", ROOT."public/videos");