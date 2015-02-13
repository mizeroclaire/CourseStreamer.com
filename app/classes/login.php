<?php
	include 'ini.php';
	class popover extends ini
	{
		public function Popover_bottom(){
			self::load_css();
			?>
				<button type="button" class="btn btn-success" title="Popover title"  
			      data-container="body" data-toggle="popover" data-placement="bottom" 
			      data-content="Some content in Popover on bottom">
			      Popover on bottom
			   </button>
			   <script>
			   $(function () 
			      { $("[data-toggle='popover']").popover();
			      });
			   </script>
			<?php
		}
		public function Popover_top(){
			self::load_css();
			?>
				<button type="button" class="btn btn-primary" title="Popover title"  
			      data-container="body" data-toggle="popover" data-placement="top" 
			      data-content="Some content in Popover on top">
			      Popover on top
			   </button>
			<?php
		}
	}
$obj= new popover();
$obj->Popover_bottom();
?>