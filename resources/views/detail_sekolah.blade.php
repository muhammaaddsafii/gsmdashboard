@extends('layout.form')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('/')}}">GSM Dashboard</a>
                        </li>
                        <li>
                            List
                        </li>
                        <li>
                           Sekolah
                        </li>
                        <li>
                            Detail
                        </li>
                    </ol>
                </div>
            </div>
            
            
              <br>

                <div class="col-lg-12">
                    <div class="panel panel-color panel-custom">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Utama</h3>
                        </div>
                        <div class="panel-body">
                            <h3 id="name"><b></b></h3>
                            <br>
                            <div>
                            <table class="table">
                                     
                                    <tbody> 
                                            <tr>
                                                    <th scope="row" class="col-lg-2">Bentuk</th>
                                                    <td>:</td>
                                                    <td id="bentuk"></td>
                                                    <td> </td>
                                            </tr>
                                            <tr>
                                                    <th scope="row" class="col-lg-2">NPSN</th>
                                                    <td>:</td>
                                                    <td id="nomor"></td>
                                                    <td> </td>
                                            </tr>      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                        <div class="panel panel-color panel-custom">
                            <div class="panel-heading">
                                <h3 class="panel-title">Rincian Data</h3> 
                            </div> 
                            <div class="panel-body"> 
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-20">
                                                    <h5><b>Alamat :</b></h5>
                                                    <p id="alamat" class="text-muted m-b-15 font-13">
                                                   
                                                    <div class="m-t-20">
                                                        <h5><b>Nama Kecamatan :</b></h5>
                                                        <p id="nama_kecamatan" class="text-muted m-b-15 font-13">
                                                        </p>
                                                    </div>

                                                    <div class="m-t-20">
                                                            <h5><b>Kode Kabupaten :</b></h5>
                                                            <p id="kode_kabupaten" class="text-muted m-b-15 font-13">
                                                            </p>
                                                        </div>
                                                    
                                                    <div class="m-t-20">
                                                        <h5><b>Nama Kabupaten :</b></h5>
                                                        <p id="nama_kabupaten" class="text-muted m-b-15 font-13">
                                                            &nbsp;
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                    <div class="p-20">
                                                            <h5><b>Kode Propinsi :</b></h5>
                                                            <p id="kode_prop" class="text-muted m-b-15 font-13">
                                                            </p>
                                                           
                                                            <div class="m-t-20">
                                                                <h5><b>Nama Propinsi :</b></h5>
                                                                <p id="nama_prop" class="text-muted m-b-15 font-13">
                                                                </p>
                                                            </div>

                                                            <div class="m-t-20">
                                                                    <h5><b>Lintang :</b></h5>
                                                                    <p id="lintang" class="text-muted m-b-15 font-13">
                                                                    </p>
                                                                </div>
                                                            
                                                            <div class="m-t-20">
                                                                <h5><b>Bujur :</b></h5>
                                                                <p id="bujur" class="text-muted m-b-15 font-13">
                                                                    &nbsp;
                                                                </p>

                                                            </div>
                                                    </div>
                                            </div>
                                        </div> <!--end row-->
                                        <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card-box">
                                                        <h4 class="m-t-0 m-b-20 header-title"><b>Peta Sekolah</b></h4>
                                                        <div id="map"></div>
                                                    </div>
                                                </div>

                                </div>
                        </div>
                </div>

    </div> <!-- container -->
                   
    </div> <!-- content -->

    <footer class="footer text-right">
        © 2019. Tim skripsi GSM.
    </footer>

</div>

<script>


$(document).ready(function(){
    // Ambil id dari url
    var id = new URLSearchParams(document.location.search.substring(1));
    var ini_id_sekolah = id.get("id");
    console.log(ini_id_sekolah)

    $.ajax({
    type: 'GET',
    url: "http://jendela.data.kemdikbud.go.id/api/index.php/Csekolah/detailSekolahGET?mst_kode_wilayah=010100&bentuk=sd",
    })
    .done(function(data){
    console.log(data)

    for (var i=0;data.data.length>i;i++){
         if (data.data[i].id === ini_id_sekolah){
                // Memasukan data yang didapat dari respon get ke field2 yg ada berdasarkan idnya

                // membuat tag html dengan id name akan menampilkan data name , apabila data.name nilainya null atau undefined maka tidak akan ditampilkan apa2
                document.getElementById('name').innerHTML = data.data[i].sekolah

                // Ini salah satu contoh yang bakal menghasilkan nilai null atau undefined untuk data.ttl, dikarenakan ttl tidak terdapat pada data yang didapatkan
                // (perhatikan struktur data hasil respon GET di console)
                document.getElementById('bentuk').innerHTML = data.data[i].status

                // membuat tag html dengan id email akan menampilkan data email
                document.getElementById('nomor').innerHTML = data.data[i].npsn

                //Tabel 2

                // membuat tag html dengan id kelamin akan menampilkan data kelamin
                document.getElementById('alamat').innerHTML = data.data[i].alamat_jalan

                // membuat tag html dengan id asal sekolah akan menampilkan data asal sekolah
                document.getElementById('nama_kecamatan').innerHTML = data.data[i].kecamatan

                // membuat tag html dengan id status akan menampilkan data status di sekolah
                document.getElementById('kode_kabupaten').innerHTML = data.data[i].kode_kab_kota

                // membuat tag html dengan id pendidikan_terakhir akan menampilkan data pendidikan terakhir
                document.getElementById('nama_kabupaten').innerHTML = data.data[i].kabupaten_kota

                // membuat tag html dengan id kontak akan menampilkan data kontak atau no. hp
                document.getElementById('kode_prop').innerHTML = data.data[i].kode_prop

                // membuat tag html dengan id alamat akan menampilkan data alamat sekolah
                document.getElementById('nama_prop').innerHTML = data.data[i].propinsi

                // membuat tag html dengan id lintang akan menampilkan data lokasi berdasarkan lintang
                document.getElementById('lintang').innerHTML = data.data[i].lintang

                // membuat tag html dengan id bujur akan menampilkan data lokasi berdasarkan bujur
                document.getElementById('bujur').innerHTML = data.data[i].bujur
                }
    }
    
    })
})
</script>

<script>
    function initMap() {
        var id = new URLSearchParams(document.location.search.substring(1));
        var ini_id_sekolah = id.get("id");
        console.log(ini_id_sekolah)

        $.ajax({
        type: 'GET',
        url: "http://jendela.data.kemdikbud.go.id/api/index.php/Csekolah/detailSekolahGET?mst_kode_wilayah=010100&bentuk=sd",
        })
        .done(function(data){
        console.log(data)
        for (var i=0;data.data.length>i;i++){
         if (data.data[i].id === ini_id_sekolah){
            var lokasi = {lat: parseFloat(data.data[i].lintang), lng: parseFloat(data.data[i].bujur)};
            var map = new google.maps.Map(document.getElementById('map'), 
            {zoom: 10, center: lokasi});
            var marker = new google.maps.Marker({position: lokasi, map: map});
            }  
         }
    })    
    }
</script>

    
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAS6ZdI6zn_QX7ceEWJtdFzdCMuHQijNmc
        &callback=initMap">
        </script>

@endsection

