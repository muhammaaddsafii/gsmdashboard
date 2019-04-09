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

								<h4 class="page-title">List User</h4>
								<ol class="breadcrumb">
									<li>
										<a href="{{ url('/') }}">GSM Dashboard</a>
									</li>
									<li>
                                        List
									</li>
									<li class="active">
									 User
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
								<table id="datatable-editable" class="table table-striped " cellspacing="0" width="100%">
										<thead>
										<tr>
												<th>Nama User</th>
												<th>Email</th>
												<!-- Ini aku kasih Role(harusnya sekolah) 
												karena data sekolahnya ada yang belum ada,
												 nanti bakal eror klo manggil data tapi ngk ada -->
	                                            <th>Role</th>
	                                            <th>Actions</th>
										</tr>
										</thead>
									</table>

									<!-- Ini adalah input text yang nilainya adalah id, nilai id ini berubah rubah dan  
										didapatkan saat  admin menekan tombol add to assesor yang akan mentrigger
									fungsi add_to_assesor  -->
									<input type="text" id="id_user" style="display:none">


									   <!-- bagian modal  -->
									   <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<h4 class="modal-title">Penambahan Assesor</h4>
												</div>
												<div class="modal-body">
												  <div id="add_wisata_manual"class="row">
													<div class="col-md-12">
				
															<div class="form-group">
																<p for="field" class="control-label">Apakah anda yakin ingin menambah user ini sebagai assesor ?</p>
															</div>
													</div>
												  </div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tidak</button>
													<!-- onclick ini akan memanggil/mentrigger fungsi add_to_assesor_confirmation -->
													<!-- Kalau ini diklik untuk sementara waktu ngk bakal terjadi apa-apa karena eror, eror disebabkan karena request post gagal karena api yang dituliskan tidak benar -->
													<button  type="button" onclick="add_to_assesor_confirmation()" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Ya, tambahkan</button>
												</div>
											</div>
										</div>
									</div>
									<!-- bagian modal  -->

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
			<script>
			  $(document).ready(function(){
				$("#datatable-editable").DataTable();
					$.ajax({
					type: 'GET',
					url: "http://localhost/elearning/public/api/v1/users",
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
						var length = data.message.length;	

						// Perulangan for untuk memasukan data ke variable, akan diulang sekian kali sesuai length nya
						for (var i = 0; i < length; i++) {
						
						// data name urutan ke i
						var a=data.message[i].name;
						// data email sekolah urutan ke i
						var b=data.message[i].email;
						// data asal sekolah urutan ke i
						var c=data.message[i].role;
						
						// Ini membuat tombol edit yang diklik akan dialihkan ke page detail by id  dan tombol add to assesr yg ketika diklik dia akan memanggil fungsi add to assesor dengan parameternya id dari data itu sendiri
						var action = "<a href='detail_user?id="+data.message[i]._id+"'>Detail</a>&nbsp&nbsp&nbsp"+"<a href='#' onclick=add_to_assesor('"+data.message[i]._id+"') data-toggle='modal' data-target='#con-close-modal'>Add To Assesor</a>";
						$('#datatable-editable').dataTable().fnAddData([
						a,
						b,
						c,
						action
						]);
						}
					}

					// Ini adalah function add to assesor, bekerja bila tombol "add to assesro" di klik 
					function add_to_assesor(id){
						// Memasukan id ke dalam text input dengan id : id_user
						document.getElementById('id_user').value = id;
					}

					// Ini adalah function add_to_assesor_confirmation, bekerja bila tombol "ya, tambahkan" di klik
					function add_to_assesor_confirmation(){
						// Membentuk data yang ingin dikirimkan dengan metode post 
						var data_user = {
							// Didalam ini kita buat datanya (sesuaikan dengan body dari reques POST itu sendiri di API)
						}
						// Melakukan post ke api 
						$.ajax({
						type: 'POST',
						data : data_user, 
						// ini urlnya kurang lengkap karena api belum disediakan 
						url: "http://localhost/elearning/public/api/"
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
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        @endsection