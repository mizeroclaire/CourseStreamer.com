<?php
//Bootstrap classes
	use CourseStreamer\Ini as Ini;
//initialise app
//Basic includes
	require_once(HEADER);
	require_once(FOOTER);
	Ajax; require_once(JsLogin);require_once(JsSignUp);
//use class
	$use=new Header();
	$use=new Body();
	$use=new Footer('0px','#fff;','#000');
//JavaScript
class Body extends Ini{
function Body(){
	?>
		<html>
			<head>
					
			</head>
			<title>
				StrimUp.com
			</title>
			<body>
			<div id="container" class="visible-desktop">
		           <div id="divContent"><img src="public/img/iconslowq.png" width="55" height="44"  alt=""/>
		           	<h4>Socially coraborate with mates</h4>	
		           </div>
		           <div id="divContent2"><img src="public/img/3D Modeling iconlowq.png" width="55" height="64"  alt=""/>
		             <h4>Find cheap Workers</h4>
		           
		           </div> 
		           <div id="divContent3"><img src="public/img/Pencil iconlowq.png" width="47" height="50"  alt=""/>
		             	<h4>Pencil Drawing</h4>
		          		 
		    		</div>
		           <div id="divContent4"><img src="public/img/3D Modeling iconlowq.png" width="55" height="64"  alt=""/>
		            	<h4>3D Modeling</h4>
		           		
		    	   </div>
		     </div>
		     <!--<div class="showAfter" style="display:none">i am login form<div class="closeme">[X]</div></div>-->
		     <script>

		     	login();

		     </script>
			</body>
		</html>
	<?php
	}
}
//session_set_save_handler(open, close, read, write, destroy, gc)
?>