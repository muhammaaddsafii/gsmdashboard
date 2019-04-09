@extends('layout.list_table')
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
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                    <ul class="dropdown-menu drop-menu-right" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

								<h4 class="page-title">List Permintaan Assesor</h4>
								<ol class="breadcrumb">
									<li>
										<a href="{{ url('/') }}">GSM Dashboard</a>
									</li>
									<li>
                                    List
									</li>
									<li class="active">
									 Assesor
									</li>
								</ol>
							</div>
						</div>

                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                                
                                <div class="">
                                	<table class="table table-striped" id="datatable-editable">
	                                    <thead>
	                                        <tr>
	                                            <th>Nama Assesor</th>
	                                            <th>Asal Sekolah</th>
	                                            <th>Level</th>
	                                            <th>Actions</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr class="gradeC">
	                                            <td>Arga Wirawan</td>
	                                            <td>SD Negeri Karangmloko 2</td>
	                                            <td>10</td>
	                                            <td class="actions">
	                                                <a href="#" class="on-default edit-row">Details</a>
                                                    <a href="#" class="on-default remove-row" style="color:red">Remove</i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>Moch Safii</td>
	                                            <td>SD Negeri Krangmloko 1</td>
	                                            <td>9</td>
	                                            <td class="actions">
                                                    <a href="#" class="on-default edit-row">Details</a>
                                                    <a href="#" class="on-default remove-row" style="color:red">Remove</i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeU">
	                                            <td>Dedy Kurniawan Santoso</td>
	                                            <td>SD Negeri Condongcatur 1</td>
	                                            <td>1</td>
	                                            <td class="actions">
                                                    <a href="#" class="on-default edit-row">Details</a>
                                                    <a href="#" class="on-default remove-row" style="color:red">Remove</i></a>
	                                            </td>
	                                        </tr>
	                                    </tbody>
	                                </table>
                                </div>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->
                        
                        
                        


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                    © 2016. All rights reserved.
                </footer>

            </div>
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        @endsection