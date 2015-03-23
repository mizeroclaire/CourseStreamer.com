@extends('layouts.dashboard')

@section('content')
<div id="page-wrapper"  ng-app="StrimUp">

    <div class="col-lg-12">
        <!--video loader--><!--<script type="text/javascript" src="//cdn.sublimevideo.net/js/23bfegdw.js"></script><!--video loader script-->

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-9 pull-left">
                <div class="panel panel-default">
                    <!--<div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-camera-retro  fa-2x fa-fw"></i> Bio</h3>
                    </div>-->
                    <div class="panel-body">
                        <div class="col-md-7 pull-left" style="border-right: 0px solid #ccc;">
                            <div class="col-md-4">
                                <img class="img-circle pull-left" src="http://placehold.it/80x80" alt="Avatar">
                            </div>
                            <div class="col-md-8">
                                <p>Muragijimana Richard</p>
                                 <p>Programmer at youthoughts</p>
                                <a href="#" class="btn btn-default">Setting</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                                Connections
                                <hr class="#ccc;">
                                12 new school wait for you to connect
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 panel panel-default" style="margin-top:-15px;min-height:45px;">
                    <div class="col-md-5">
                      <span>some quotes here</span>
                    </div>
                    <div class="col-md-5">
                        <span>some quotes here</span>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>

            <div class="col-md-3 panel panel-default" style="min-height:180px;margin-left:-5px;">
                   show mates current instutions he/she is getting knowledge from
            </div>

        </div>
        <div class="col-lg-9 panel panel-default pull-left" style="min-height:300px;width:75.3%;margin-left: -15px;">
            <div class="col-lg-9">
                Notes and assignment here as pdf, ppt or other format with direct link of download(show as well where mates is getting this notes )
            </div>
        </div>
        <div class="col-md-3 panel panel-default pull-left" style="margin-left:10px;min-height:300px;">
            show current mates and current lequested tut for help and direct post answer link for a requested help from friends
        </div>
        <!-- /.row -->


        <!-- /.row -->
        <div class="row top-service-indicator"  ng-controller="ModalCtrl">
              <a  ng-click="open()" href="#"><button class="jump-class jump_to btn btn-primary"  id="4eYSpIz2FjU" >Jump to...</button></a>
              <!--
                this below are model to show after
              -->

                <div modal="showModal" close="cancel()" style="margin-left:85px;margin-top:40px; ">
                  <!--<div class="modal-header">
                      <h4>Modal Dialog</h4>
                  </div>-->
                  <div class="modal-body" >
                      <div style="background:#fff;color:#000;height:450px;width:94%;margin-left:5px;">
                        <div class="col-lg-12" id="choice-model" ng-controller="mainController">

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
            </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@stop