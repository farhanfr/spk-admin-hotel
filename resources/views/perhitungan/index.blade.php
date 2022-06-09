@extends('index')
@section('title','Perhitungan ')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Perhitungan</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <h4>Data Kriteria</h4>
                <div class="table-responsive">
                    <table class="table table-bordered"width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Bobot</th>
                            <th>Benefit / Cost</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kriterias as $kd)
                            <tr>
                                <td>{{$kd->kode}}</td>
                                <td>{{$kd->nama}}</td>
                                <td>{{$kd->bobot}}</td>
                                <td>{{$kd->atribut}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Data Alternatif</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alternatif as $ad)
                            <tr>
                                <td>{{$ad->kode_alternatif}}</td>
                                <td>{{$ad->nama_alternatif}}</td>
                                <td>{{$ad->keterangan}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Data Penjabaran Nilai Alternatif</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama</th>
                            @foreach($kriterias as $kr)
                                <th>{{$kr->nama}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($penjabaran as $at)
                            <tr>
                                <td>{{$at->kode_alternatif}}</td>
                                <td>{{$at->nama_alternatif}}</td>
                                @foreach($at->crip as $crip)
                                    <td>
                                        {{$crip->nama_crip}}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Data Penjabaran Nilai Alternatif Berdasarkan nilai crips</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama</th>
                            @foreach($kriterias as $kr)
                                <th>{{$kr->nama}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($penjabaran as $at)
                            <tr>
                                <td>{{$at->kode_alternatif}}</td>
                                <td>{{$at->nama_alternatif}}</td>
                                @foreach($at->crip as $crip)
                                    <td>
                                        {{$crip->nilai_crip}}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Normalisasi</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Kode Kriteria & Alternatif</th>
                            <?php $bobot = [] ?>
                            @foreach($kriterias as $krit)
                                <?php $bobot[$krit->id] = $krit->bobot ?>
                                <th class="text-center">{{$krit->kode}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        <?php $rangking = []; ?>
                        @foreach($alternatif as $data)
                            <tr>
                                <td>{{$data->kode_alternatif}}</td>
                                <?php $total = 0;?>
                                @foreach($data->crip as $crip)
                                    @if($crip->kriteria->atribut == 'cost')
                                        <?php $normalisasi = ($kode_krit[$crip->kriteria->id]/$crip->nilai_crip); ?>
                                    @elseif($crip->kriteria->atribut == 'benefit')
                                        <?php $normalisasi = ($crip->nilai_crip/$kode_krit[$crip->kriteria->id]); ?>
                                    @endif
                                    <?php $total = $total+($bobot[$crip->kriteria->id]*$normalisasi);?>
                                    <td>{{$normalisasi}}</td>
                                @endforeach
                                <?php $rangking[] = [
                                    'kode'  => $data->kode_alternatif,
                                    'nama'  => $data->nama_alternatif,
                                    'total' => $total
                                ]; ?>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Perangkingan</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Total</th>
                            <th>Peringkat / Rangking</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        usort($rangking, function($a, $b)
                        {
                            return $b['total'] <=> $a['total'];
                        });

                        $a = 1;
                        ?>
                        @foreach($rangking as $t)
                            <tr>
                                <td>{{$t['kode']}}</td>
                                <td>{{$t['nama']}}</td>
                                <td>{{$t['total']}}</td>
                                <td>{{$a++}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
