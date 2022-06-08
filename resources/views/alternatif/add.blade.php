@extends('index')
@section('title','Tambah Alternatif')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Alternatif</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{route('alternatif.add')}}" method="POST" class="col-md-12">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Masukkan Kode  <span class="text-danger">*</span></label>
                        <input type="text" required name="kode_alternatif" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Masukkan Nama  <span class="text-danger">*</span></label>
                        <input type="text" required name="nama_alternatif" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Masukkan Keterangan <span class="text-danger">*</span></label>
                        <textarea name="keterangan" required class="form-control"></textarea>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
