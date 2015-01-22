<?php
// RESTRICT ACCESS


// PROJECT ROOT (__DIR__ gets the directory containing this file)
define("ROOT", __DIR__ . "/");

// COMMON PATHS
define("INI", ROOT."app/classes/Ini.php");
define("AUTH", ROOT."app/classes/Auth.php");
define("BOOT", ROOT."app/bootstrap.php");
define("HEADER", ROOT."app/classes/header.php");
define("FOOTER", ROOT."app/classes/footer.php");
define("Db", ROOT."app/classes/db.php");
/*this line has been added because Animate_popover has been used with no definition*/
define("ANIMATE_POPOVER", ROOT."app/classes/Animate.Popover.php");
/*ends here  */

define("CLASSES", ROOT."app/classes");
define("DATABASE", ROOT."app/db");
define("VIEWS", ROOT."app/views");
define("PUBLIC", ROOT."public");
define("CSS", ROOT."public/css");
define("JS", ROOT."public/js");
define("Ajax", ROOT."public/js/Ajax.js");
define("JsLogin", ROOT."public/js/loginFunctions.js");
define("JsSignUp", ROOT."public/js/signup.js");

define("IMGS", ROOT."public/img");
define("VIDS", ROOT."public/videos");

// START THE APP
include BOOT;

?>