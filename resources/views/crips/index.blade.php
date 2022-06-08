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

{{--                <a href="{{route('alternatif.formtambah')}}" class="btn btn-success">Tambah Alternatif</a>--}}
{{--                <hr/>--}}
{{--                <div class="table-responsive">--}}
{{--                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Kode</th>--}}
{{--                            <th>Nama</th>--}}
{{--                            <th>Deskripsi</th>--}}
{{--                            <th>Aksi</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($alternatifData as $ad)--}}
{{--                            <tr>--}}
{{--                                <td>{{$ad->kode_alternatif}}</td>--}}
{{--                                <td>{{$ad->nama_alternatif}}</td>--}}
{{--                                <td>{{$ad->keterangan}}</td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('alternatif.formedit',['id' => $ad->id])}}" class="btn btn-block btn-info">Ubah</a>--}}
{{--                                    <hr/>--}}
{{--                                    <form action="{{route('alternatif.delete',['id' => $ad->id])}}" method="POST">--}}
{{--                                        @csrf--}}
{{--                                        <button type="submit" class="btn btn-block btn-danger">Hapus</button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
