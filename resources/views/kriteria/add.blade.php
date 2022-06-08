@extends('index')
@section('title','Tambah Kriteria')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{route('kriteria.add')}}" method="POST" class="col-md-12">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Masukkan Kode <span class="text-danger">*</span></label>
                        <input type="text" name="kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Masukkan Nama Kriteria <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="atribut">Masukkan Atribut <span class="text-danger">*</span></label>
                        <select name="atribut" class="form-control">
                            <option>Silahkan pilih atribut</option>
                            <option value="cost">Cost</option>
                            <option value="benefit">Benefit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Masukkan Bobot <span class="text-danger">*</span></label>
                        <input type="text" name="bobot" class="form-control">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
