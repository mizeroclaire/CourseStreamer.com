<?php

// Bootstrap classes

class Home extends Ini{

	public function main(){
		ini::load_css();
		ini::html_type();
        ini::menu();
		?>	
			<body>
				<div class="col-sm-9 col-md-9 col-lg-9 content">
					<div class="col-sm-5 col-md-5 col-lg-5 basicinfo">
                    <div class="col-md-4">
						<video width="400"  controls>
						     <source src="../public/videos/The Life Of A Young Entrepreneur - Documentary.mp4" type="video/mp4">	
						</video>
                    </div>    
						<div class="col-sm-4 col-md-4 col-lg-4">
							<!--this is current class and basic hints-->
							<h5 class="col-md-6 hints pull-right">
								Be with coursestreamer.com and explore more
							</h5>
							<div class="col-sm-6 col-md-6 col-lg-6" style="margin-left:180px;width:100%;">
								<span>Class:</span>
								<a  class="btn btn-danger" href="#">html</a>
								<a  class="btn btn-info " href="#">Php</a>
								<a  class="btn btn-warning" href="#">Jquery</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 lectures">
					<h5 align="center">Courses</h5>
                    <div class="col-sm-3 col-md-3 col-lg-3 lesson btn btn-danger">
                       <h3>PHP</h3>
                    </div>
					<div class="col-sm-3 col-md-3 col-lg-3 lesson lesson btn btn-info">
                       <h5>JQUERY</h5>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 lesson lesson btn btn-warning">
                       <h4>HTML</h4> 
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 lesson lesson btn btn-info">
                       <h3>CSS</h3> 
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 lesson lesson btn btn-info">
                       <h6>Android</h6>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 lesson lesson btn btn-info">
                       <h3>java</h3>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 lesson lesson btn btn-info">
                       <h3>C++</h3>
                    </div> 
                    <div class="col-sm-3 col-md-3 col-lg-3 lesson lesson btn btn-info">
                       <h3>Ios</h3>
                    </div> 
				</div>
                <div class="col-sm-12 col-md-12 col-lg-12 "style="height:40px;"></div>
                <div class="col-sm-12 col-md-12 col-lg-12 tutorials">
                  <div class="col-sm-8 col-md-8 col-lg-8 magnifier">
                     <div class="col-sm-1 col-md-1 col-lg-1">
                        <img src="public/img/you.png">
                     </div>
                     <div class="col-sm-3 col-md-3 col-lg-3">
                         <h4 style="margin-left:120px;color:black;width:100%">This is some description about this tutor</h4>
                     </div>
                  </div>
                    
                    
                </div>
			</body>
		<?php
	}
}
$use_home=new home();
$use_home->main();
$use_home->set_footer('0','#fff;');

?>