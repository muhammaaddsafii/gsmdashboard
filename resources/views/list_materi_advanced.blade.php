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

								<h4 class="page-title">List Materi Advance</h4>
								<ol class="breadcrumb">
									<li>
										<a href="{{ url('/') }}">GSM Dashboard</a>
									</li>
									<li>
                                        List
									</li>
									<li class="active">
										Materi
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
														<th>Judul</th>
														<th>Kategori</th>
														<th>Deskripsi</th>
														<th style="width:100px;">Actions</th>
													</tr>
												</thead>
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

			<script>
			  $(document).ready(function(){
				$("#datatable-editable").DataTable();
					$.ajax({
					type: 'GET',
					url: "http://localhost/elearning/public/api/v1/modul/grade/basic",
					})
					.done(function(data){
						// Ini Untuk melihat respon yang didapatkan setelah melakukan req GET
						console.log(data)

						// Memasukan respon data dari api ke dalam variable baru : myJsonData
						myJsonData = data;
						
						// Ini memanggil fungsi populateDataTable dengan parameter yang diisi dengan data dari myJsonData 
						populateDataTable(myJsonData);
			
					})

					// Ini adalah function javascript yang sebelumnya dipanggil dengan data sebagai nama parameternya
					function populateDataTable(data) {
						$("#datatable-editable").DataTable().clear();

						// Ini digunakan untuk menghitung jumlah data yang ada di parameter data, 
						// karena parameter data yang dimasukan adalah myJsonData maka jumlah data yang
						// akan dihitung adalah jumlah data myJsonData itu sendiri 
						var length = data.length;	

						// Perulangan for untuk memasukan data ke variable, akan diulang sekian kali sesuai length nya
						for (var i = 0; i < length; i++) {
						
						// data name urutan ke i
						var a=data[i].title;
						// data email sekolah urutan ke i
						var b=data[i].aspect;
						// data asal sekolah urutan ke i
						var c=data[i].description;
						
						// Ini membuat tombol edit yang diklik akan dialihkan ke page detail by id  dan tombol add to assesr yg ketika diklik dia akan memanggil fungsi add to assesor dengan parameternya id dari data itu sendiri
						var action = "<a href='#?id="+data[i]._id+"'>edit</a>&nbsp&nbsp&nbsp"+"<a href='#' onclick=add_to_assesor('"+data[i]._id+"') data-toggle='modal' data-target='#con-close-modal'>delete</a>";
						$('#datatable-editable').dataTable().fnAddData([
						a,
						b,
						c,
						action
						]);
						}
					}

					// Ini adalah function add to assesor, bekerja bila tombol "add to assesro" di klik 
					function delete_modul(id){
						// Memasukan id ke dalam text input dengan id : id_user
						document.getElementById('id_user').value = id;
					}

					// Ini adalah function add_to_assesor_confirmation, bekerja bila tombol "ya, tambahkan" di klik
					function delete_modul_confirmation(){
						// Membentuk data yang ingin dikirimkan dengan metode post 
						var data_user = {
							// Didalam ini kita buat datanya (sesuaikan dengan body dari reques POST itu sendiri di API)
						}
						// Melakukan post ke api 
						$.ajax({
						type: 'DELETE',
						// ini urlnya kurang lengkap karena api belum disediakan 
						url: "http://localhost/elearning/public/api/v1/modul"
						})

						// Done function ini tidak akan berfungsi karena terjadi error yang disebabkan oleh api yang tidak benar
						.done(function(data){
							if(data.error==false){
								alert("Berhasil Menambahkan Assesor")
							}else{
								alert("Gagal Menambahkan Assesor")
							}
						})
					}
				});
			</script>


        @endsection