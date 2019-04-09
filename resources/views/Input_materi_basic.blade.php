@extends('layout.form')
@section('content')
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
    
                                    <h4 class="page-title">Input Materi Basic</h4>
                                    <ol class="breadcrumb">
                                        <li>
                                            <a href="{{ url('/') }}">GSM Dashboard</a>
                                        </li>
                                        <li>
                                        Input Materi
                                        </li>
                                        <li class="active">
                                         Basic
                                        </li>
                                    </ol>
                                </div>
                            </div>

            <!-- Forms -->
            <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-6">
                                        <form role="form">
                                        <div class="form-group">
                                            <label for="">Judul Materi</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori Materi</label>
                                            <select class="selectpicker" data-live-search="true"  data-style="btn-white">
                                                <option disabled>Pilih Kategori</option>
                                                <option>Penciptaan Ekosistem Positif di Sekolah</option>
                                                <option>Pembelajaran Berbasis Riset</option>
                                                <option>Pengembagana Karakter</option>
                                                <option>Tri Sentra Pendidikan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi Materi</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </form>
                                    <div class="row">
                                            <div class="col-sm-12">
                                                    <label for="">Tantangan</label>
                                                <div class="card-box">
                                                   
                                                        <textarea id="elm1" name="area"></textarea>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="col-md-6">
                                        <form role="form">
                                        <div class="form-group">
                                            <label for="">Upload URL Video</label>
                                            <input type="text" class="form-control" id="video_0" name="url_video[]" placeholder="Masukan URL Video">
                                            <div id="field_url_video" >
                                             <hr>
                                            </div>
                                            <div style="text-align:right;" class="col-md-12">
                                            <button id="add_video"  name="add_video" class="btn btn-purple waves-effect waves-light" >Add</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Upload URL Dokumen</label>
                                            <input type="text" class="form-control" id="dokumen_0" name="url_dokumen[]" placeholder="Masukan URL Dokumen">
                                            <div id="field_url_dokumen" >
                                            <hr>
                                            </div>
                                            <div style="text-align:right;" class="col-md-12">
                                            <button id="add_dokumen" style="margin-top:10px" name="add_dokumen" class="btn btn-purple waves-effect waves-light" >Add</button>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Upload Gambar</label>
                                            <input type="file" class="filestyle" data-iconname="fa fa-cloud-upload">
                                            <button id="gambar" style="margin-top:10px" name="upload_gambar" class="btn btn-purple waves-effect waves-light" >Upload Gambar</button>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div> <!-- container -->
    </div> <!-- content -->
    <footer class="footer">
            © 2016. All rights reserved.
        </footer>
</div>
<script>
$(document).ready(function(){
 $('#add_video').click(function(event ){
    event.preventDefault();
    var row = document.getElementsByName('url_video[]').length;
    console.log(row);
    $('#field_url_video').append(
    '<div style="margin-left:-10px;margin-top:10px;margin-bot:10px" id="row'+row+'" class="col-md-12">'+
    '<input type="text" class="form-control" id="video_0" name="url_video[]" placeholder="Masukan URL Video">'+
    '<button  style="display:inline;margin-top:10px;" name="remove" id="'+row+'" class="btn btn-danger btn_remove">Delete</button>'+
    '</div>'
    );
  });
$(document).on('click', '.btn_remove', function(){
  var button_id = $(this).attr("id");
  $('#row'+button_id+'').remove();
  });

  $('#add_dokumen').click(function(event ){
    event.preventDefault();
    var row = document.getElementsByName('url_dokumen[]').length;
    console.log(row);
    $('#field_url_dokumen').append(
    '<div style="margin-left:-10px;margin-top:10px;margin-bot:10px" id="row_dokumen'+row+'" class="col-md-12">'+
    '<input type="text" class="form-control" id="dokumen_0" name="url_dokumen[]" placeholder="Masukan URL Dokumen">'+
    '<button  style="display:inline;margin-top:10px;" name="remove" id="'+row+'" class="btn btn-danger btn_remove2">Delete</button>'+
    '</div>'
    );
  });
$(document).on('click', '.btn_remove2', function(){
  var button_id = $(this).attr("id");
  $('#row_dokumen'+button_id+'').remove();
  });


})
</script>
@endsection