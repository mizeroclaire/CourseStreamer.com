@extends('layouts.dashboard')

@section('content')

<div id="page-wrapper" style="margin-left: -10%;">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">
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
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-long-arrow-right fa-fw"></i> Featured lessons
                        </h3>
                    </div>
                    <div class="panel-body">

                        <div class="text-right">
                            <a href="#">All Lessons <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Friends</h3>
                    </div>
                    <div class="panel-body">
                        
                        <div class="text-right">
                            <a href="#">View All Friends <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Business panel</h3>
                    </div>
                    <div class="panel-body">
                        
                        <div class="text-right">
                            <a href="#">View business around <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <button style="margin-left: 42%;margin-top: 40px;width: 200px;" class="btn btn-primary">Jump to...</button>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@stop