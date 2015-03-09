@extends('layouts.dashboard')

@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">
                    Jack Don's <small>Profile</small>
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-camera-retro fa-fw"></i> Bio</h3>
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
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Sample Panel</h3>
                    </div>
                    <div class="panel-body">
                        
                        <div class="text-right">
                            <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop