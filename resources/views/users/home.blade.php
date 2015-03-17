@extends('layouts.dashboard')

@section('content')
<div id="page-wrapper" style="margin-left: -10%;"ng-app="StrimUp">

    <div class="container-fluid">
        <!--video loader--><script type="text/javascript" src="//cdn.sublimevideo.net/js/23bfegdw.js"></script><!--video loader script-->
        <!-- Page Heading -->
       <!-- <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" ng-controller="mainController">
                    Richard richie's <small>Profile</small>
                </h1>
            </div>
        </div>-->
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-9 pull-left">
                <div class="panel panel-default">
                    <!--<div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-camera-retro  fa-2x fa-fw"></i> Bio</h3>
                    </div>-->
                    <div class="panel-body">
                        <div class="row pull-left" >
                            <div class="col-md-4">
                                <img class="img-circle pull-left" src="http://placehold.it/80x80" alt="Avatar">
                            </div>
                            <div class="col-md-8">
                                <p>Muragijimana Richard</p>
                                 <p>Programmers at youthoughts</p>
                                <a href="#" class="btn btn-default">Setting</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                                connections
                                <hr class="#ccc;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 panel panel-default" style="margin-top:-10px;min-height:45px;">
                    <div class="col-md-5">
                        <span style="color:#8e44ad;font-size:60px;">&ldquo;</span><p style="margin-top:-70px;margin-left:25px;">Love cost nothing</p>
                    </div>
                    <div class="col-md-5">
                         <span style="color:#8e44ad;font-size:60px;">&ldquo;</span><p style="margin-top:-70px;margin-left:25px;">Love cost nothing</p>
                    </div>
                    <div class="col-md-2">
                        
                    </div>
                </div>
            </div>

            <div class="col-md-3 panel panel-default" style="min-height:180px;margin-left:-5px;">
                    here
            </div>

        </div>
        <div class="col-lg-9 panel panel-default pull-left" style="min-height:300px;width:74%;">
            <div class="col-lg-3">

            </div>
        </div>
        <div class="col-md-3 panel panel-default pull-left" style="margin-left:10px;min-height:300px;">
            
        </div>
        <!-- /.row -->

        
        <!-- /.row -->
        <div class="row top-service-indicator"  ng-controller="ModalCtrl">
              <a  ng-click="open()" href="#"><button class="jump-class btn btn-primary" style="margin-left:400px;width:300px;" id="4eYSpIz2FjU" >Jump to...</button></a>
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