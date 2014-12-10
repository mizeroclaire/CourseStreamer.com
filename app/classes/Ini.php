<?php
namespace CourseStreamer;
	
class Ini{

	public function load_css(){
		?>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
            <script type="text/javascript" src="js/ajax.js"></script>
            <script src="public/js/jquery-1.9.1.min.js"></script>
            <script src="public/js/bootstrap.min.js"></script>
            <script src="public/js/bootstrap.js"></script>
             <link rel="stylesheet" type="text/css" href="public/css/login.css">
            <link rel="stylesheet" type="text/css" href="public/css/footer.css">
            <link rel="stylesheet" type="text/css" href="public/css/colors.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="public/css/bootstrap-responsive.css">
            <link rel="stylesheet" type="text/css" href="public/css/custom.css">
            <link rel="stylesheet" type="text/css" href="public/css/styles.css">
		<?php
	}
    
    public function menu(){
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
	 public static function html_type()
    {
        ?>
            <!DOCTYPE html>
        <?php
    }
	 public function set_footer($aligne,$color)
    {
        ini::load_css();
        ini::html_type();
        ?>
            <footer class="footer col-sm-12 col-lg-12 col-md-12 visible-desktop" align="center" style="margin-top:<?php echo$aligne; ?>%;background:#2d3033;height:190px;color:<?php echo $color;  ?>">
               
                <script type="text/javascript">
                $(document).ready(function(){
                    $("#featured").tabs({fx:[{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
                        show: function(event, ui){
                            $('#featured .ui-tabs-panel .info').hide();
                            var infoheight=$('.info', ui.panel).height();
                            $('.info', ui.panel).css('height', '0px').animate({ 'height': infoheight }, 500);
                        }
                    }).tabs("rotate", 5000, true);
                    $('#featured').hover(
                        function(){ $('#featured').tabs('rotate', 0, true); },
                        function(){ $('#featured').tabs('rotate', 5000, true); }
                    );
                    $('#featured .ui-tabs-panel a.hideshow').click(function(){
                        if($(this).text()=='Hide'){
                            $(this).parent('.info').animate({ 'height': '0px' }, 500);
                            $(this).text('Show');
                        }
                        else{
                            $(this).parent('.info').animate({ 'height': '70px' }, 500);
                            $(this).text('Hide');
                        }
                        return false;
                    });
                });
            </script>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <p>Course streamer school is<br> an online school that teach programming<br> and many other related concepts<br> it has been created to spread knowledge to all people at low or free cost if you need to invest with us <a href="mailto:richard@youthoughts.com">richard@youthoughts.com</a></p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    this is about school and share
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    this is about school and share
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 copy">
                     &copy; 2014 by youthoughts group ltd
                </div>
            </footer>
        <?php
    }
}
?>