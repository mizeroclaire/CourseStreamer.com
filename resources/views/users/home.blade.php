@extends('layouts.dashboard')

@section('content')
<div id="page-wrapper" class=""  ng-app="StrimUp" style="background:#ecf0f1;width:1100px;margin-left:125px;">

    <div class="col-xs-12"  ng-controller="ModalCtrl">
        <!--video loader--><!--<script type="text/javascript" src="//cdn.sublimevideo.net/js/23bfegdw.js"></script><!--video loader script-->

        <!-- /.row -->
        <div class="row">
            <div class="col-xs-9 pull-left">
                <div class="panel panel-default">
                    <!--<div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-camera-retro  fa-2x fa-fw"></i> Bio</h3>
                    </div>-->
                    <div class="panel-body">
                        <div class="col-md-7 pull-left" style="border-right: 0px solid #ccc;">
                            <div class="col-md-4 relativein">
                                <img class="img-circle pull-left" src="{{url('img/user.png')}}" alt="Avatar">
                                <span  class="icon-camera fa fa-fw fa-camera " role="presentation"></span>
                            </div>
                            <div class="col-xs-8">
                                <p>Muragijimana Richard</p>
                                 <p>Programmer at youthoughts</p>
                                <a style="color: #008cc9;" href="#" class="btn btn-default">Setting</a>
                            </div>
                        </div>
                        <div class="col-xs-5">
                                Connections
                                <hr class="#ccc;">
                                12 new school wait for you to connect ...
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 panel panel-default" style="margin-top:-15px;min-height:45px;">
                    <div class="col-md-5">
                      <span>some quotes here</span>
                    </div>
                    <div class="col-xs-5">
                        <span>some quotes here</span>
                    </div>
                    <div class="col-xs-2">

                    </div>
                </div>
            </div>

            <div class="col-md-3 panel panel-default" style="min-height:220px;width:25%">
                   show mates current instutions he/she is getting knowledge from
              <div style="margin-top:110px;">
                <button style="border-color:#008cc9;color:#008cc9;" class="btn btn-default">Strim in</button>
                <button style="border-color:#008cc9;color:#008cc9;" class="btn btn-default">Comment</button>
              </div>
            </div>

        </div>
        <div class="col-md-7 panel panel-default pull-left" style="min-height:190px;margin-left:125px;width:655px;">
            <div class="col-md-1 instructor_img" style="margin-left:-165px;">
                <img src="{{url('img/pic2.png')}}" />
            </div>
            <div class="col-xs-9">
                Notes and assignment here as pdf, ppt or other format with direct link of download(show as well where mates is getting this notes )
                <a  ng-click="open()" href="#"><button style="margin-top:110px;color: #008cc9;;"  class="jump-class jump_to btn btn-default"  id="4eYSpIz2FjU" >Learn now</button></a>
            </div>

        </div>
        <div class="col-md-7 panel panel-default pull-left" style="min-height:190px;margin-left:125px;width:655px;">
            <div class="col-md-1 instructor_img" style="margin-left:-165px;">
                <img src="{{url('img/team-1.jpg')}}" />
            </div>
            <div class="col-xs-9">
                Notes and assignment here as pdf, ppt or other format with direct link of download(show as well where mates is getting this notes )
            </div>

        </div>
        <div class="col-md-7 panel panel-default pull-left" style="min-height:190px;margin-left:125px;width:655px;">
            <div class="col-md-1 instructor_img" style="margin-left:-165px;">
                <img src="{{url('img/team-4.jpg')}}" />
            </div>
            <div class="col-xs-9">
                Notes and assignment here as pdf, ppt or other format with direct link of download(show as well where mates is getting this notes )
            </div>

        </div>
        <div class="col-md-4 panel panel-default" style="margin-left:800px;width:280px;min-height:300px;position:fixed;">
            show current mates and current lequested tut for help and direct post answer link for a requested help from friends
            <div style="margin-top:180px;">
                <button style="background:#069;color:#fff;" class="btn btn-default"><span  class="fa fa-fw fa-plus"></span>Follow</button>
            </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <div class="row top-service-indicator">
              
             <!--modal-->
                @include('widgets.modal')
             <!--modal end-->  
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@stop