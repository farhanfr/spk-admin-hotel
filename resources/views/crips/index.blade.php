@extends('index')
@section('title','Crips')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Crips</h6>
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
                <h4>Kriteria tersedia :</h4>
                @if($kriteria->isEmpty())
                    <h5>Silahkan isi kriteria terlebih dahulu</h5>
                    @else
                            <div style="float: left;margin-right: 10px">
                                <form action="{{route('crip')}}" method="get">
                                @foreach($kriteria as $kr)
                                <button type="submit" name="kriteria" class="btn btn-warning" onclick="{{request('kriteria')}}" value="{{$kr->id}}">{{$kr->kode}} - {{$kr->nama}}</button>
                                @endforeach
                                </form>
                            </div>
                    @endif
                    <div>
                <br/><br/>
                    </div>
                <hr/>
                <div class="table-responsive">
                    <a href="{{route('crip.formadd')}}" class="btn btn-success">Tambah Crips</a>
                    <br/><br/>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kriteria</th>
                            <th>Sub Kriteria</th>
                            <th>Nilai</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($crips as $c)
                            <tr>
                                <td>{{$c->kriteria->nama}}</td>
                                <td>{{$c->nama_crip}}</td>
                                <td>{{$c->nilai_crip}}</td>
                                <td>
                                    <a href="{{route('crip.formedit',['id' => $c->id])}}" class="btn btn-block btn-info">Ubah</a>
                                    <hr/>
                                    <form action="{{route('crip.delete',['id' => $c->id])}}" method="POST">
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
