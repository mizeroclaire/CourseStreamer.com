<?php 
use CourseStreamer\Ini as Ini;

    $use=new Study();
    class Study extends Ini{
      public  function Study(){
        self::Css();
 ?>
<body id="study">
<div id="center">
    <div id="study" class="col-md-12 mycontainer">
       <div class="grid1 visible-desktop">
            <h1>Notice Board</h1>
            <script type="text/javascript">
            function startIntro(){
                var intro = introJs();
                  intro.setOptions({
                    steps: [
                      { 
                        intro: "Welcome to StrimUp"
                      },
                      {
                        element: document.querySelector('#step1'),
                        intro: "Your course Update will be here."
                      },
                      {
                        element: document.querySelectorAll('#step2')[0],
                        intro: "Ok, wasn't that fun?",
                        position: 'right'
                      },
                      {
                        element: '#step3',
                        intro: 'More features, more fun.',
                        position: 'left'
                      },
                      {
                        element: '#step4',
                        intro: "Another step.",
                        position: 'bottom'
                      },
                      {
                        element: '#step5',
                        intro: 'Get it, use it.'
                      }
                    ]
                  });

                  intro.start();
              }
              introJs().start();
            </script>
             
            <div id="step1" class="span6">I am step one</div>
            <a class="btn btn-large btn-success" href="javascript:void(0);" onclick="startIntro();">Show me how</a>
            
       </div>
       <div class="grid1 visible-desktop">
            <h1>Course Update</h1>
       </div>
       <!--this part is visible to desktop-->
       <div class="grid2 visible-desktop">
            <div id="menu">
                <li><a href="#">Mates</a></li>
                <li><a href="#">Learned</a></li>
            </div>
            <div id="mates" class="activefriend">
                <img src="public/img/allinone.png">
            </div>
            <div class="clear"></div>
            <div class="mate visible-desktop">
                <div id="head">Mates</div>
            </div>
            <div class="clear"></div>
       </div>
       <!--this part is visible to phone-->
       <div class="phone visible-phone col-lg-12">
        <div id="menu">
            <h4 align="right">StrimUp</h4>
        </div>
       </div>      
    </div>
</div>
<div id="study" class="visible-desktop">
    <footer>
        StrimUp &trade;
    </footer>
</div>
<!--this part is visible to phone-->
<div  class="visible-phone">
    <div id="settings">
        <li>Setting|</li>
         <li>Privacy Policy|</li>
          <li>Who to Strim with.</li>
    </div>
    <small style="margin-left:135px;">StrimUp &trade;</small>
</div>
</div>
</body>
</html>
<?php
        }
    }
?>