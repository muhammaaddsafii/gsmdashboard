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
                           User
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
                            <h3><b>Nama User</b></h3>
                            <br>
                            <div>
                            <table class="table">

                                    <tbody>
                                            <tr sty>
                                                    <th scope="row" class="col-lg-4">Nama</th>
                                                    <td>:</td>
                                                    <td id="name"></td>
                                                    <td> </td>
                                            </tr>
                                            <tr>
                                                    <th scope="row" class="col-lg-4">Tempat, Tanggal Lahir</th>
                                                    <td>:</td>
                                                    <td id="ttl"></td>
                                                    <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Email</th>
                                                <td>:</td>
                                                <td id="email"></td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Jenis Kelamin</th>
                                                <td>:</td>
                                                <td id="kelamin"></td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Asal Sekolah</th>
                                                <td>:</td>
                                                <td id="asal_sekolah"></td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Status/Jabatan di Sekolah</th>
                                                <td>:</td>
                                                <td id="status"></td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Pendidikan Terakhir</th>
                                                <td>:</td>
                                                <td id="pendidikan_terakhir"></td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="col-lg-4">Kontak / No. HP :</th>
                                                <td>:</td>
                                                <td id="kontak"></td>
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
                                <h3 class="panel-title">Progress User</h3>
                            </div>
                            <div class="panel-body">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-20">
                                                    <h5><b>Alamat :</b></h5>
                                                    <p id="alamat" class="text-muted m-b-15 font-13">
                                                    <div class="m-t-20">
                                                        <h5><b>Nama Kecamatan :</b></h5>
                                                        <p id="kecamatan" class="text-muted m-b-15 font-13">
                                                        </p>
                                                    </div>

                                                    <div class="m-t-20">
                                                            <h5><b>Kode Kabupaten :</b></h5>
                                                            <p id="kota" class="text-muted m-b-15 font-13">
                                                            </p>
                                                        </div>

                                                    <div class="m-t-20">
                                                        <h5><b>Nama Kabupaten :</b></h5>
                                                        <p id="kabupaten" class="text-muted m-b-15 font-13">
                                                            &nbsp;
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                    <div class="p-20">
                                                            <h5><b>Kode Propinsi :</b></h5>
                                                            <p id="kode_prov" class="text-muted m-b-15 font-13">
                                                            </p>

                                                            <div class="m-t-20">
                                                                <h5><b>Nama Propinsi :</b></h5>
                                                                <p id="nama_prov" class="text-muted m-b-15 font-13">
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
    var ini_id_user = id.get("id");

    $.ajax({
    type: 'GET',
    url: "http://localhost/elearning/public/api/v1/users/"+ini_id_user,
    })
    .done(function(data){
    console.log(data)
    // Memasukan data yang didapat dari respon get ke field2 yg ada berdasarkan idnya

    // membuat tag html dengan id name akan menampilkan data name , apabila data.name nilainya null atau undefined maka tidak akan ditampilkan apa2
    document.getElementById('name').innerHTML = data.name

    // Ini salah satu contoh yang bakal menghasilkan nilai null atau undefined untuk data.ttl, dikarenakan ttl tidak terdapat pada data yang didapatkan
    // (perhatikan struktur data hasil respon GET di console)
    document.getElementById('ttl').innerHTML = data.detail.birthdate

    // membuat tag html dengan id email akan menampilkan data email
    document.getElementById('email').innerHTML = data.email

    // membuat tag html dengan id kelamin akan menampilkan data kelamin
    document.getElementById('kelamin').innerHTML = data.detail.gender

    // membuat tag html dengan id asal sekolah akan menampilkan data asal sekolah
    document.getElementById('asal_sekolah').innerHTML = data.school.sekolah

    // membuat tag html dengan id status akan menampilkan data status di sekolah
    document.getElementById('status').innerHTML = data.detail.job_title

    // membuat tag html dengan id pendidikan_terakhir akan menampilkan data pendidikan terakhir
    document.getElementById('pendidikan_terakhir').innerHTML = data.detail.last_education

    // membuat tag html dengan id kontak akan menampilkan data kontak atau no. hp
    document.getElementById('kontak').innerHTML = data.detail.phone

    //Tabel 2

    // membuat tag html dengan id alamat akan menampilkan data alamat sekolah
    document.getElementById('alamat').innerHTML = data.school.alamat_jalan

    // membuat tag html dengan id kecamatan akan menampilkan data kecamatan
    document.getElementById('kecamatan').innerHTML = data.school.kecamatan

    // membuat tag html dengan id kode_kab_kota akan menampilkan data kode kabupaten/kota
    document.getElementById('kota').innerHTML = data.school.kode_kab_kota

    // membuat tag html dengan id kabupaten_kota akan menampilkan data nama kabupaten/kota
    document.getElementById('kabupaten').innerHTML = data.school.kabupaten_kota

    // membuat tag html dengan id kode_prov akan menampilkan data kode provinsi
    document.getElementById('kode_prov').innerHTML = data.school.kode_prop

    // membuat tag html dengan id propinsi akan menampilkan data nama propinsi
    document.getElementById('nama_prov').innerHTML = data.school.propinsi

    // membuat tag html dengan id lintang akan menampilkan data lokasi berdasarkan lintang
    document.getElementById('lintang').innerHTML = data.school.lintang

    // membuat tag html dengan id bujur akan menampilkan data lokasi berdasarkan bujur
    document.getElementById('bujur').innerHTML = data.school.bujur


    })
})
</script>

@endsection
