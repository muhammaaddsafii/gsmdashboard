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

								<h4 class="page-title">List Materi Advanced</h4>
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
									<input type="text" id="id_modul" style="display:none">
							   	<!-- bagian modal  -->
							   	<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<h4 class="modal-title">Delete Modul</h4>
												</div>
												<div class="modal-body">
												  <div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<p for="field" class="control-label">Apakah anda yakin ingin menghapus modul ini?</p>
															</div>
														</div>
												  </div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tidak</button>
													<!-- onclick ini akan memanggil/mentrigger fungsi add_to_assesor_confirmation -->
													<!-- Kalau ini diklik untuk sementara waktu ngk bakal terjadi apa-apa karena eror, eror disebabkan karena request post gagal karena api yang dituliskan tidak benar -->
													<button type="button" onclick="delete_modul_confirmation()" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Iya</button>
												</div>
											</div>
										</div>
									</div> <!-- bagian modal  -->

                </div> <!-- end: page -->

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
						url: "http://localhost/elearning/public/api/v1/modul/grade/advanced",
						})
						.done(function(data){
							// Ini Untuk melihat respon yang didapatkan setelah melakukan req GET
							console.log(data)

<<<<<<< HEAD
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
						var action = "<a href='edit_materi_advance?id="+data[i]._id+"'>edit</a>&nbsp&nbsp&nbsp"+"<a href='#' onclick=add_to_assesor('"+data[i]._id+"') data-toggle='modal' data-target='#con-close-modal'>delete</a>";
						$('#datatable-editable').dataTable().fnAddData([
						a,
						b,
						c,
						action
						]);
						}
					}
=======
							// Memasukan respon data dari api ke dalam variable baru : myJsonData
							myJsonData = data;

							// Ini memanggil fungsi populateDataTable dengan parameter yang diisi dengan data dari myJsonData
							populateDataTable(myJsonData);
>>>>>>> 1eed75326ce7d28af37aab24e7218c6a893d365e

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
							var action = "<a href='detail_modul?id="+data[i]._id+"'>edit</a>&nbsp&nbsp&nbsp"+"<a href='#' onclick=delete_modul('"+data[i]._id+"') data-toggle='modal' data-target='#con-close-modal'>delete</a>";
							$('#datatable-editable').dataTable().fnAddData([
							a,
							b,
							c,
							action
							]);
							}
						}
					});
				</script>
				<script>
					function delete_modul(id){
						document.getElementById('id_modul').value = id;
					}

					function delete_modul_confirmation(){
						$.ajax({
						type: 'DELETE',
						url: "http://localhost/elearning/public/api/v1/modul/"+document.getElementById('id_modul').value
						})
						.done(function(data){
							console.log(data);
							alert(data.message);
							window.location.reload();
						})
					}
				</script>

@endsection
