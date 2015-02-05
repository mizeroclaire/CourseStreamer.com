<?php

// HOMEPAGE
// WE NEED SERIOS ALGORITHM HERE DEALING WITH HOW TO REDIRECT TO STUDY PAGE AND CUSTOM USER

if(! Sentry::check()){
	include VIEWS.'/index.php';
}
else{
	include VIEWS.'/dashboard.php';
}

?>