<?php
	use CourseStreamer\Ini as Ini;
	class Footer extends Ini{
		 public function Footer($aligne,$color,$bg)
    {
        ?>
            <footer class="footer col-sm-12 col-lg-12 col-md-12 visible-desktop" align="center" style="margin-top:<?php echo$aligne; ?>%;background:<?php echo $bg;  ?>;height:190px;color:<?php echo $color;  ?>">
              StrimUp.com  &trade;
            </footer>
             <footer style="background:#000;" class="footer  visible-phone" align="center" style="margin-top:<?php echo$aligne; ?>%;background:<?php echo $bg;  ?>;height:190px;color:<?php echo $color;  ?>">
                StrimUp.com &trade;
            </footer>
        <?php
    }
	}
?>