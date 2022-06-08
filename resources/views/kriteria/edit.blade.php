@extends('index')
@section('title','Tambah Kriteria')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Kriteria</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{route('kriteria.update',['id' => Request::segment(3)])}}" method="POST" class="col-md-12">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode <span class="text-danger">*</span></label>
                        <input type="text" name="kode" class="form-control" value="{{$kriteriaData->kode}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Kriteria <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control" value="{{$kriteriaData->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="atribut">Atribut <span class="text-danger">*</span></label>
                        <select name="atribut" class="form-control">
                            <option value="">-- Pilih Atribut --</option>
                            <option value="cost" {{($kriteriaData->atribut =='cost')?'selected':''}}>Cost</option>
                            <option value="benefit" {{($kriteriaData->atribut =='benefit')?'selected':''}}>Benefit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot <span class="text-danger">*</span></label>
                        <input type="text" name="bobot" class="form-control" value="{{$kriteriaData->bobot}}">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
