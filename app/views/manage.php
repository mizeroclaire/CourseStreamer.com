<?php
// HOMEPAGE
//WE NEED SERIOS ALGORITHM HERE DEALING WITH HOW TO REDIRECT TO STUDY PAGE AND CUSTOM USER
if(! session_id()){
	//include VIEWS.'/StudyPage.php';
	include VIEWS.'/index.php';
}else{
	include VIEWS.'/StudyPage.php';
}
?>