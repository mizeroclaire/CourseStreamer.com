<?php
	use CourseStreamer\Ini as Ini;
	require_once(Db);
class Header extends Ini{
	function Header(){
		self::Css();
			?>
			<div class="col-md-12 col-sm-12 col-lg-12">
				<div class="nothing">
					<div id="nav" class="grid_12 omega">
						<small>StrimUp<?php   $use=new Db();  ?></small>
						<ul class="navigation">
							<li data-slide="1"><a href="index.php">Home</a></li>
							<li data-slide="2" ><a class="login" href="studyPage.php">Login</a></li>
							<li data-slide="3"><a href="index.php">SignUp</a></li>
							<!--<li data-slide="4">Report a bugs</li>-->
						</ul>
					</div>
				</div>
			</div>
			<?php
		}
	}
?>