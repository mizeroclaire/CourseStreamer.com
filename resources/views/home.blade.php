@extends('app')
@section('content')
<div class="row col-lg-12" style="width:90%;margin-left:45px;">
  <div class="visible-phone" style="background:#00baff;">
      <img class="img-circle" style="width:60px;height:70px;" src="{{asset('img/team-3.jpg')}}">
  </div>
  <div class="row col-md-1 settings visible-desktop" style="margin-left:0px;">
    <div class="row setting-options">
        <div class="profile">
            <button>Upload your profile picture</button>
        </div>
        <p style="margin-left:-150px;">Edit profile</p>
        <p class="setting progress">10%</p>
        <div class="col-md-8" ng-app="StrimUp">
            <li><span class="glyphicon glyphicon-exclamation-sign"></span><a style="color:#2B587A;" href="#">My portifolo</a></li>
            <li><span class="glyphicon glyphicon-user"></span><a style="color:#2B587A;" href="#">My mates</a>&nbsp;&nbsp;&nbsp;</li>
            <li><span class="glyphicon glyphicon-link"></span><a style="color:#2B587A;" href="#">My links</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><span class="glyphicon glyphicon-star"></span><a style="color:#2B587A;" href="#">Community</a></li>
            <li><span class="glyphicon glyphicon-comment"></span>thinking post</li>
            <div class="row top-service-indicator"  ng-controller="ModalCtrl">
              <a  ng-click="open()" href="#"><button class="jump-class btn btn form-control" id="4eYSpIz2FjU" >Jump to...</button></a>
              <!--
                this below are model to show after
              -->
              
                <div modal="showModal" close="cancel()">
                  <div class="modal-header">
                      <h4>Modal Dialog</h4>
                  </div>
                  <div class="modal-body">
                      <div style="background:#fff;color:#000;height:450px;width:800px;margin-left:185px;">
                        <div class="col-md-8" id="choice-model" ng-controller="mainController">
                          <!--this is to control pages to be shown on a modal-->
                          <li><a style="color:#000" href="#index">Notice</a></li>
                          <li><a style="color:#000" href="#learn">Tutorials</a></li>
                          <li><a style="color:#000" href="#Community">Community</a></li>

                        </div>
                        <div  style="width:100%;">
                            <div class="col-md-7 pull-left" style="margin-left:10px;height:420px;">
                              <!--show and render page into ng-preview-->
                              <div ng-view style="color:#000;"></div>
                            </div>
                            <div ng-controller="Reactor" class="col-md-4 pull-left" style="margin-left:10px;height:420px;">hello&nbsp;{data.name}</div>
                        </div>
                      </div>

                  </div>
                  <!--This is the comment area about lesson or other creativity posts-->
                   <div style="background:#fff;color:#000;height:450px;width:800px;margin-left:205px;">
                        
                      </div>
                  <div class="modal-footer">
                    <button class="btn btn-success" ng-click="ok()">Okay</button>
                    <button class="btn btn-danger" ng-click="cancel()">Quit</button>
                  </div>
                </div><!--end of modal preview-->
            </div>
        </div>
    </div>
  </div>

      
    <div class="col-md-5 chat-area chat-textarea single-chat" style="margin-left:-40px;">
      <div class="row" style="background:#00baff;min-height:280px;color:#fff;border-bottom:4px solid #fff;">
          <!--<iframe src="https://player.vimeo.com/video/120893601?portrait=0" width="560" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/120893601">Me &amp; You</a> from <a href="https://vimeo.com/jacktew">Jack Tew</a> on <a href="https://vimeo.com">Vimeo</a>.</p>-->
          <!--<iframe width="560" height="428"
                  src="http://www.youtube.com/embed/LGzYSHW9URo">
          </iframe>-->
      </div>
      <div class="row" style="background:#;min-height:280px;color:#fff;border-bottom:4px solid #fff;">
        Muragijimana's Portifolio
        <div>
            <p style="color:#000">Job Status&nbsp;<span>Currently employed @StrimUp&trade;  </span></p>  
            <p style="color:#000">Answer rating(2)</p>  
            <p style="color:#000">Contributions to open project</p>  
            <p style="color:#000">Sociability&nbsp;<span>Good</span></p>  
        </div>
      </div>
       <div class="row" style="background:#00baff;min-height:84.5px;color:#fff;border-bottom:4px solid #fff;">
        My special link
        
      </div>
  </div>
  <div class="col-md-2 visible-desktop" style=";width:23.3%;min-height:650px;margin-left:18px;">    
     <div class="row" style="background:#fff;min-height:180px;">
        
     </div> 
     <div class="row" style="background:#00baff;min-height:180px;border-bottom:8px solid #fff;">
        <p align="center" style="color:#fff;">Featured lessons</p>
     </div> 
     <div class="row" style="background:#00baff;min-height:180px;border-bottom:8px solid #fff;">
        <p align="center" style="color:#fff;">  Business you follow</p> 
     </div> 
     <div class="row" style="background:#00baff;min-height:99.9px;">
     
        <p align="center" style="color:#fff;">Mates's tags</p> 
     </div> 
  </div>
</div>
@endsection
