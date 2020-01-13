<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- css links -->
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
        <title>{{config('app.name', 'Betewat Casting Agent')}}</title>
        <style type="text/css">
        /*navbar*/
            .navbar{
                min-height: 33px !important;
                margin-bottom:0;
                border-radius:0;
                background: #00f7f7 !important;

            }
            a{
                color:#000;
            }
            a:hover{
                background: #fff;
                color: #666;
            }

            .navbar-nav > li > a, .navbar-brand{
                padding-top: 6px !important;
                padding-bottom: 0 !important;
                height: 33px !important;
                color: #fff !important;
            }

            .activenav{
                color: #fff !important;
                background: #62d474 !important;
            }

            .main-color-bg{
                background: #00f7f7 !important;
                color: #fff !important;
            }
            /*header*/
            #header{
                background: #f59013;
                color: #fff;
                padding: 10px;
                margin-bottom: 15px;
            }

            #header .create{
                padding-top: 20px;
            }

            .breadcrumb{
                background: #ccc;
                color: #333;
            }

            .breadcrumb a{
                color: #333;
            }
            /*progress-bar*/
            .progress-bar{
                background: #333;
                color: #fff;
            }

            .dash-box{
                text-align: center;
            }
            img{
                width:100px; height: 100px; border-radius: 100%;
            }
            #btn-add{
                background: #00954A;
                color: #fff;
                margin-bottom: 2%;
                margin-right: 10%;
            }
            #btn{
                background: #00954A;
                color: #fff;
            }
            .navbar-right li{
                display: inline!important;
            }
        </style>
    </head>
    <body onload="spinner()">
        @include('included.admin-include.admin-nav') 
        @include('included.messages') 
        <section id="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li>
                        Dashboard
                    </li>
                </ol>
            </div>

            <div id="main">
                <div class="container">
                    <div class="row">
                        @include('included.admin-include.admin-left')
                        <div class="col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                    <h3 class="panel-title">Over View</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="well dash-box">
                                                <h2>
                                                    <span class="fa fa-envelope" aria-hidden></span>
                                                    
                                                    12
                                                    
                                                </h2>
                                                <h6>Contact Messages</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="well dash-box">
                                                <h2>
                                                    <span class="fa fa-envelope" aria-hidden></span>
                                                    
                                                    12
                                                    
                                                </h2>
                                                <h6>Contact Messages</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="well dash-box">
                                                <h2>
                                                    <span class="fa fa-envelope" aria-hidden></span>
                                                    
                                                    12
                                                    
                                                </h2>
                                                <h6>Contact Messages</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="well dash-box">
                                                <h2>
                                                    <span class="fa fa-envelope" aria-hidden></span>
                                                    
                                                    12
                                                    
                                                </h2>
                                                <h6>Contact Messages</h6>
                                            </div>
                                        </div>                              

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                    <h3 class="panel-title">Home Page Slider</h3>
                                </div>
                                <div class="row panel-body">
                                    
                                    <div class="col-md-3">
                                        <div class="well dash-box">
                                            <h2><img src="/storage/HomePage_slider/454"></h2>
                                            <h6><small>Caption:</small> ljfnslnsldflsn</h6>
                                        </div>
                                        <div align="center">
                                            <button class="btn" id="btn-add">
                                                <span class="fa fa-edit fa-lg" data-toggle="modal" data-target="#editHomePageModal"></span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="well dash-box">
                                            <h2><img src="/storage/HomePage_slider/454"></h2>
                                            <h6><small>Caption:</small> ljfnslnsldflsn</h6>
                                        </div>
                                        <div align="center">
                                            <button class="btn" id="btn-add">
                                                <span class="fa fa-edit fa-lg" data-toggle="modal" data-target="#editHomePageModal"></span>
                                            </button>
                                        </div>
                                    </div>

                                
                                </div>
                                <br>
                                <div align="right">
                                    <button class="btn" id="btn-add"  data-toggle="modal" data-target="#homepagemodal"><span class="fa fa-plus fa-lg"></span>ADD</button>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                    <h3 class="panel-title">Our Partners</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-hover">
                                        <tr>
                                            <th>Image</th>
                                            <th>Work Type Caption</th>
                                            <th>Operation</th>
                                        </tr>
                                        
                                        
                                            <tr>
                                                <td><img src="/storage/companies_logo/" style="width: 100px; height: auto; border-radius: 0%"></td>
                                                <td>Abebe</td>
                                                <td><button class="btn" style="color: #fff; background: red;"><span class="fa fa-trash" data-toggle="modal" data-target="#deleteTeamModal"></span></button> | <button class="btn btn-info" style="color: #fff;"><span class="fa fa-edit" data-toggle="modal" data-target="#editTeamModal"></span></button></td>
                                            </tr>
                                      
                                    </table>
                                    <div align="right">
                                        <button class="btn" id="btn-add"  data-toggle="modal" data-target="#teamModal"><span class="fa fa-plus fa-lg"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                    <h3 class="panel-title">Team Members</h3>
                                </div>
                                <div class="panel-body">
                                  
                                    <div class="col-lg-3 col-md-3">
                                        <div class="well dash-box">
                                            <h2><img src="/storage/staff_members/" title=""></h2>
                                            <h6>dfkdfkfsdlkfj</h6>
                                        </div>
                                        <div align="center">
                                            <div align="left" class="col-md-6">
                                                <label class="btn btn-danger fa fa-trash fa-lg" data-toggle="modal" data-target="#deleteStaffModal"></label>
                                            </div>
                                            <div align="right" class="col-md-6">
                                                <label class="btn btn-info fa fa-edit fa-lg" data-toggle="modal" data-target="#editStaffModal"></label>
                                            </div>
                                        </div>
                                    </div>

                                
                                </div>
                                <br>
                                <div align="right">
                                    <button class="btn" id="btn-add" data-toggle="modal" data-target="#partnersModal"><span class="fa fa-plus fa-lg"></span></button>
                                </div>
                            </div>
                            <!-- end oflast for loop -->
                        </div>

                    </div>
                </div>
            </div>   

            <!--modal links-->
            <div class="modal fade" id="homepagemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title" id="exampleModalLabel">Add Slider</label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                <div class = "form-group row add">
                                    {{Form::label('caption', 'Add Caption',['class' => 'control-label col-sm-6'])}}
                                    <div class="col-sm-11">
                                        <label>Name</label>
                                        {{Form::text('caption', '', ['class' => 'form-control', 'placeholder' => 'Image Caption'])}}
                                        <label>Image</label><br>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            {{Form::submit('Post', ['class' => 'btn btn-success'])}}
                        </div>
                        {!!Form::close()!!}
                    </div>

                </div>

            </div>
        </section>

        <!-- js links -->
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>