<?php
namespace CourseStreamer;
	
class Ini{

	 function Css(){
		?>
         
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="public/css/bootstrap-responsive.css">
            <link rel="stylesheet" type="text/css" href="public/css/StudyPage.css">
            
            <link rel="stylesheet" type="text/css" href="public/css/menu.css">
           
            <link rel="stylesheet" type="text/css" href="public/css/custom.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="public/css/jquery.fancybox-1.3.4.css" media="screen" />
            <script type="text/javascript" src="js/ajax.js"></script>
            <script src="public/js/jquery-1.9.1.min.js"></script>
            <script src="public/js/bootstrap.min.js"></script>
            <script src="public/js/bootstrap.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
              <!--this is for login popup-->
            <script type="text/javascript" src="public/js/jquery.mousewheel-3.0.4.pack.js"></script>
            <script type="text/javascript" src="public/js/jquery.fancybox-1.3.4.pack.js"></script>
		<?php
	}
    
    function menu(){
        $this->load_css();
        ?>
             <div class="navbar navbar-default" style="margin-top:px;width:100%;position:">
                    <div class="col-md-2">
                       <div class="col-md-12 pull-left" style="margin-left:385px;margin-top:10px;">

                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse2" style="position:fixed;">
                            <div></div>
                          <ul class="nav navbar-nav navbar-right" >
                             <li class="active"><a href="index.php">Home</a></li>
                             <li><a href="index.php?action=login" role="button" data-toggle="modal">Login</a></li>
                             <li><a href="index.php?action=signup" role="button" data-toggle="modal">signup</a></li>
                             <li><a href="code.php" role="button" data-toggle="modal">Coding</a></li>  
                           </ul>
                        </div>

                     </div>	
                </div>
        <?php
    }
	function Type()
    {
        ?>
            <!DOCTYPE html>
        <?php
    }
	
}
?>