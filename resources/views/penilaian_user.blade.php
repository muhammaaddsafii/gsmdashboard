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

								<h4 class="page-title">Penilaian User</h4>
								<ol class="breadcrumb">
									<li>
										<a href="{{ url('/') }}">GSM Dashboard</a>
									</li>
									<li class="active">
									 Penilain User
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
                                            <th>Id User</th>
	                                            <th>Nama User</th>
                                                <th>Kategori / Aspek</th>
                                                <th>Level</th>
                                                <th>Title</th>
	                                            <th>Actions</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr class="gradeC">
	                                            <td>43344</td>
                                                <td>Moch. Safii</td>
                                                <td>Penciptaan Lingkungan Positif</td>
                                                <td>Basic</td>
                                                <td>Cara menjadi guru yang menyenangkan</td>
	                                            <td class="actions">
	                                                <a href="#" class="on-default edit-row">View</a>
                                                    <a href="#" class="on-default edit-row">Details</a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>43343</td>
                                                <td>Ahmadi Ahmar Ar Rayyan</td>
                                                <td>Pendidikan Karakter</td>
                                                <td>Basic</td>
                                                <td>Cara mendidik siswa</td>
	                                            <td class="actions">
	                                                <a href="#" class="on-default edit-row">View</a>
                                                    <a href="#" class="on-default edit-row">Details</a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>43300</td>
                                                <td>Muhammad Ghifari</td>
                                                <td>Pembelajaran Berbasis Problem</td>
                                                <td>Basic</td>
                                                <td>Studi Kasus</td>
	                                            <td class="actions">
	                                                <a href="#" class="on-default edit-row">View</a>
                                                    <a href="#" class="on-default edit-row">Details</a>
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