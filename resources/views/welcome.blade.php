@extends('layout.dashboard')
@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                    <ul class="dropdown-menu drop-menu-right" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <h4 class="page-title">Homepage</h4>
                                <ol class="breadcrumb">
									<li>
										<a href="{{ url('/') }}">GSM Dashboard</a>
									</li>
									<li>
                                    Navigation
									</li>
									<li class="active">
									 Homepage
									</li>
								</ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md  md-account-balance text-primary"></i>
                                    <h2 class="m-0 text-dark counter font-600">50</h2>
                                    <div class="text-muted m-t-5">Sekolah GSM</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md  md-store-mall-directory text-pink"></i>
                                    <h2 class="m-0 text-dark counter font-600">100</h2>
                                    <div class="text-muted m-t-5">Sekolah Terdaftar</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md  md-assignment-ind text-info"></i>
                                    <h2 class="m-0 text-dark counter font-600">100</h2>
                                    <div class="text-muted m-t-5">User</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-account-child text-custom"></i>
                                    <h2 class="m-0 text-dark counter font-600">50</h2>
                                    <div class="text-muted m-t-5">Asessor</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                        	<div class="col-lg-12">
                        		<div class="card-box">
                        			<h4 class="text-dark header-title m-t-0">Peta Persebaran GSM</h4>
                        			<div class="row">
                                        <div id="map"></div>
                        			</div>                        			
                        			<!-- end row -->                      			
                        		</div>                              
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2016. All rights reserved.
                </footer>

            </div>
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        @endsection