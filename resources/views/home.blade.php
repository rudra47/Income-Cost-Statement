@extends('web.layouts.master')

@section('content')
    <!--Start Dashboard-->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="panel panel-default">
                            <header class="panel-heading panel-heading-transparent">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                            </header>
                            <div class="panel-body">
                                <div class="content table-responsive table-full-width">
                                    <div class="timeline timeline-simple mt-xlg mb-md">
                                        <h1 class="text-center mb25">Hi, <big>{{ Auth::user()->name }}</big></h1><hr>
                                        <h2 class="text-center mt30 mb30">Welcome to<br>Our Employee Panel</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Dashboard -->   
@endsection
