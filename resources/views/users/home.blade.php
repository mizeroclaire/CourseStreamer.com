@extends('layouts.dashboard')

@section('content')
<div id="page-wrapper" style="margin-left: -10%;"ng-app="StrimUp">

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" ng-controller="mainController">
                    Richard richie's <small>Profile</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-camera-retro  fa-2x fa-fw"></i> Bio</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-lg-3">
                                <figure>
                                    <img src="http://placehold.it/200x200" alt="Avatar">
                                    <figcaption>
                                        <br><a href="#" class="btn btn-default">Edit Profile</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-lg-4">
                                <article>
                                    <ul>
                                        <li>Job Status &raquo; Currently employed at @StrimUp</li>
                                        <li>Answers ratings</li>
                                        <li>Contributions</li>
                                        <li>Sociability &raquo; Good</li>
                                    </ul>
                                </article>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #95a5a6;color: #ffffff;">
                        <h3 class="panel-title">
                            <i class="fa fa-long-arrow-right fa-fw"></i> Featured lessons
                        </h3>
                    </div>
                    <div class="panel-body" style="border: 1px solid #ffffff;box-shadow:2px 8px 5px #888888;">

                        <div class="text-right">
                            <a href="#">All Lessons <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading"  style="background: #95a5a6;color: #ffffff;">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Friends</h3>
                    </div>
                    <div class="panel-body" style="border: 1px solid #ffffff;box-shadow:2px 8px 5px #888888;">

                        <div class="text-right">
                            <a href="#">View All Friends <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading"  style="background: #95a5a6;color: #ffffff;">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Business panel</h3>
                    </div>
                    <div class="panel-body"  style="border: 1px solid #ffffff;box-shadow:2px 8px 5px #888888;">

                        <div class="text-right">
                            <a href="#">View business around <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                      <div style="background:#fff;color:#000;height:450px;width:94%;margin-left:5px;background:#ccc">
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
                   <div style="background:#fff;color:#000;height:450px;width:94%;margin-left:5px;background:#ccc">
                        
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