@extends('index')
@section('title','Ubah Alternatif')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Alternatif</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{route('alternatif.update',['id' => Request::segment(3)])}}" method="POST" class="col-md-12">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode <span class="text-danger">*</span></label>
                        <input type="text" name="kode_alternatif" class="form-control" value="{{$alternatifData->kode_alternatif}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama <span class="text-danger">*</span></label>
                        <input type="text" name="nama_alternatif" class="form-control" value="{{$alternatifData->nama_alternatif}}">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan <span class="text-danger">*</span></label>
                        <textarea name="keterangan" class="form-control">{{$alternatifData->keterangan}}</textarea>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
