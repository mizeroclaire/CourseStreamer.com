<?php

// RESTRICT ACCESS


// PROJECT ROOT
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/richard457-CourseStreamer/");

// COMMON PATHS
define("INI", ROOT."app/classes/Ini.php");
define("AUTH", ROOT."app/classes/Auth.php");
define("BOOT", ROOT."app/bootstrap.php");

define("CLASSES", ROOT."app/classes");
define("DATABASE", ROOT."app/db");
define("VIEWS", ROOT."app/views");
define("PUBLIC", ROOT."public");
define("CSS", ROOT."public/css");
define("JS", ROOT."public/js");
define("IMGS", ROOT."public/img");
define("VIDS", ROOT."public/videos");

define("ANIMATE_POPOVER", ROOT."app/classes/Animate.Popover.php");

// START THE APP
include BOOT;

?>