<?php
<<<<<<< HEAD
// This file manages the display of views in the application


=======
>>>>>>> 402b42fa9627696ad998682ba3b83875298eb177
// HOMEPAGE
//WE NEED SERIOS ALGORITHM HERE DEALING WITH HOW TO REDIRECT TO STUDY PAGE AND CUSTOM USER
if(! session_id()){
	//include VIEWS.'/StudyPage.php';
	include VIEWS.'/index.php';
}else{
	include VIEWS.'/StudyPage.php';
}
?>