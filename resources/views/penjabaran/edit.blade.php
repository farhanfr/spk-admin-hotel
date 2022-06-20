@extends('index')
@section('title','Ubah Data Crip Alternatif')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Data Crip Alternatif</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{route('penjabaran.update',['id' => Request::segment(4)])}}" method="POST" class="col-md-12">
                    @csrf
                    @foreach($kriterias as $kriteria)
                        <div class="form-group">
                            <label for="{{$kriteria->kode}}">{{$kriteria->nama}}</label>
                            <select name="{{$kriteria->kode}}" class="form-control">
                                <option value="">-- Pilih {{$kriteria->nama}}--</option>
                                @foreach($kriteria->crip as $crip)
                                    <option value="{{$crip->id}}" {{(in_array($crip->id,$selected_crip))?'selected':''}}>{{$crip->nama_crip}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endforeach
                    <div class="float-right">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
            </div>
        </div>
    </div>
@endsection
