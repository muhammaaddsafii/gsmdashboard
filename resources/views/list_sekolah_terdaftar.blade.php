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

								<h4 class="page-title">List Sekolah Terdaftar di E-Learning</h4>
								<ol class="breadcrumb">
									<li>
										<a href="{{ url('/') }}">GSM Dashboard</a>
									</li>
									<li>
                                        List
									</li>
									<li class="active">
										Sekolah
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
	                                            <th>Nama Sekolah</th>
	                                            <th>Alamat</th>
												<th>Kabupaten/Kota</th>
												{{-- <th>Status</th> --}}
	                                            <th>Actions</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr class="gradeC">
	                                            <td>SD Negeri A</td>
	                                            <td>Jl. Sejahtera No. 01, Sleman, Yogyakarta</td>
												<td>Sleman</td>
												{{-- <td>Negeri</td> --}}
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="{{url('/detail_sekolah')}}" class="">Details</a>
	                                                <a href="#" class="on-default remove-row" style="color:greenyellow">Add To GSM</i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>SD Negeri B</td>
	                                            <td>Jl. Langit No.02, Depok, Yogyakarta</td>
												<td>Depok</td>
												{{-- <td>Negeri</td> --}}
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                    <a href="{{url('/detail_sekolah')}}" class="">Details</a>
	                                                <a href="#" class="on-default remove-row" style="color:greenyellow">Add To GSM</i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeU">
	                                            <td>SD Negeri C</td>
	                                            <td>Jl. Kebangsaan No.03, Bantul, Yogyakarta</td>
												<td>Bantul</td>
												{{-- <td>Negeri</td> --}}
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                    <a href="{{url('/detail_sekolah')}}" class="">Details</a>
	                                                <a href="#" class="on-default remove-row" style="color:greenyellow">Add to GSM</i></a>
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