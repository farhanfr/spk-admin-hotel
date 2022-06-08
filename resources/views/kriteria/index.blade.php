@extends('index')
@section('title','Kriteria')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Kriteria</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                @if (session()->get('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Sukses !!</strong> {{session()->get('msg')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <a href="{{route('kriteria.formadd')}}" class="btn btn-success">Tambah Kriteria</a>
                <hr/>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Bobot</th>
                            <th>Benefit / Cost</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kriteriaData as $kd)
                            <tr>
                                <td>{{$kd->kode}}</td>
                                <td>{{$kd->nama}}</td>
                                <td>{{$kd->bobot}}</td>
                                <td>{{$kd->atribut}}</td>
                                <td>
                                    <a href="{{route('kriteria.edit',['id' => $kd->id])}}" class="btn btn-block btn-info">Ubah</a>
                                    <hr/>
                                    <form action="{{route('kriteria.delete',['id' => $kd->id])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-block btn-danger">Hapus</button>
                                    </form>
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
