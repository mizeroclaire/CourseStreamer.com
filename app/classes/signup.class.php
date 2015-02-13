<?php
	/*  class signup by M richard @ richard@youthoughts.com please use this class for signup purpose if you
	want to add more parameters you should be aware of modifying used queries in processForm method enjoy forks
	NB: used table named accounts is not defined in our db let's assume that it is there since we have to decide*/
	include 'class/ini.php';
	class signup extends ini
	{
		public function signmeUp($username,$pass,$location){
			if(isset($username) AND isset($pass) AND isset($location)){
				self::ProcessForm($username,$pass,$location);
				if(self::Error()){
					?>
						<script>
							alert('Error occured please try again creating account');
						</script>
					<?php
				}else{
					?>
						<script>
							alert('Account created with success');
						</script>
					<?php
				}
			}		
		}
		public function ProcessForm($username,$pass,$location){
			self::connect();
			$existance=mysql_query('SELECT * FROM accounts WHERE user_name="'.$username.'"');
			if($check=mysql_num_rows($existance)==1){
				?>
					<script>
						alert('A user exist is you?');
					</script>
				<?php
				//self::url();
				exit();	
			}else{
			$sql=mysql_query('INSERT INTO accounts(user_name,user_password,user_location) VALUES("'.$username.'","'.$pass.'","'.$location.'")')or die(mysql_error());
			$select=mysql_query('SELECT * FROM accounts WHERE user_name="'.$username.'"');
			if($check=mysql_num_rows($select)==1){
				return true;
			}else{
				$error=self::Error();
			}
		}
	}
		public function Error(){
			return false;
		}
		public function url($url='coursestreamer.com'){
			header('location:'.$url);
		}
	}
	$obj= new signUp();
	$obj->signmeUp("muragijimana","richardPass","kigali");
?>