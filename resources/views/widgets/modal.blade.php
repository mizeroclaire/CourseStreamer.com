 <div modal="showModal" close="cancel()" style="margin-left:85px;margin-top:40px; ">
    <!--<div class="modal-header">
        <h4>Modal Dialog</h4>
    </div>-->
    <div class="modal-body" >
        <div style="background:#fff;color:#000;height:450px;width:94%;margin-left:5px;">
          <div class="col-xs-12" id="choice-model" ng-controller="mainController">

              <!--video from sublime down here-->
              <!--<video id="a240e92d" class="sublime" poster="https://cdn.sublimevideo.net/vpa/ms_800.jpg" width="640" height="360" title="Midnight Sun" data-uid="a240e92d" preload="none">
                  <source src="https://cdn.sublimevideo.net/vpa/ms_360p.mp4" />
                  <source src="https://cdn.sublimevideo.net/vpa/ms_720p.mp4" data-quality="hd" />
                  <source src="https://cdn.sublimevideo.net/vpa/ms_360p.webm" />
                  <source src="https://cdn.sublimevideo.net/vpa/ms_720p.webm" data-quality="hd" />
              </video>-->
          </div>
          <div  style="width:100%;">
              <div class="col-md-7 pull-left" style="margin-left:10px;height:420px;">
                <!--show and render page into ng-preview-->
                <div ng-view style="color:#000;"></div>
              </div>
              <div ng-controller="Reactor" class="col-md-4 pull-left" style="margin-left:10px;height:420px;"></div>
          </div>
        </div>

    </div>
    <!--This is the comment area about lesson or other creativity posts-->
     <div style="background:#fff;color:#000;height:450px;width:94%;margin-left:5px;background: #1abc9c;">

        </div>
    <div class="modal-footer">
      <button class="btn btn-success" ng-click="ok()">Okay</button>
      <button class="btn btn-danger" ng-click="cancel()">Quit</button>
    </div>
</div><!--end of modal preview-->