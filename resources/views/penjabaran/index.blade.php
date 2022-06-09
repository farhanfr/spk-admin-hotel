@extends('index')
@section('title','Penjabaran Nilai')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Penjabaran Nilai</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama</th>
                            @foreach($kriteria as $kr)
                                <th>{{$kr->nama}}</th>
                            @endforeach
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alternatif as $at)
                            <tr>
                                <td>{{$at->kode_alternatif}}</td>
                                <td>{{$at->nama_alternatif}}</td>
                                @foreach($at->crip as $crip)
                                <td>
                                    {{$crip->nama_crip}}
                                </td>
                                @endforeach
                                <td>
                                    <a href="{{route('penjabaran.formedit',['id' => $at->id])}}" class="btn btn-block btn-success">Ubah</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
