@extends('index')
@section('title','Dashboard')
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kriteria</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countKriteria}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Nilai Crips</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countCrips}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Alternatif
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countAlternatif}}</div>
                            </div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countUser}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <h5>Selamat datang di Admin Panel Sistem Pendukung Keputusan Rekomendasi Kost Wilayah Surabaya Menggunakan Metode TOPSIS</h5>

                <h5><b>Cara penggunaan dashboard admin :</b></h5>
            <ol>
                <li>Mengisi kriteria terlebih dahulu dengan masukkan data berupa kode kriteria, nama kriteria,
                    atribut kriteria (benefit/cost) dan bobot kriteria (tipe nilai bobot koma) pada menu Kriteria</li>
                <li>Mengisi nilai crips pada setiap kriteria yang telah ditambahkan sebelumnya dengan memasukkan
                    data kriteria, nama crips dan nilai crips pada menu Nilai Crips (Subkriteria)</li>
                <li>Mengisi alternatif dengan memasukkan kode alternatif, nama alternatif dan keterangan
                    pada menu Alternatif</li>
                <li>Setelah mengisi alternatif, kriteria & crips, maka anda bisa melihat penjabaran data
                    untuk mempermudah melihat data yang telah diinputkan sebelumnya & anda juga bisa mengubah nilai
                    crips setiap alternatif pada menu Penjabaran Data</li>
                <li>Anda dapat melihat perhitungan TOPSIS pada menu Perhitungan</li>
            </ol>
            </div>
        </div>
    </div>

    @endsection
