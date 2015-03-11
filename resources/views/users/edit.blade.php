@extends('layouts.dashboard')

@section('content')

<div id="page-wrapper" style="margin-left: -10%;">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">
                    Jack Don <small>Edit Profile</small>
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-camera-retro fa-fw"></i> Profile Details</h3>
                    </div>
                    <div class="panel-body">

                        <form action="{{ url('users/1') }}" method="PUT" accept-charset="utf-8">
                            <input type="text" name="username" placeholder="username">   
                        </form>
                        
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