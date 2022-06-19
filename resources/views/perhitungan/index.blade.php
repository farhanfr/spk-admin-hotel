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
                    <table class="table table-bordered" width="100%" cellspacing="0">
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
                <h4>Menentukan Skor Ternormalisasi</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Kode Kriteria & Alternatif</th>
                            @php $bobot = [] @endphp
                            @foreach($kriterias as $krit)
                                <?php $bobot[$krit->id] = $krit->bobot ?>
                                <th class="text-center">{{$krit->kode}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alternatif as $data)
                            <tr>
                                <td>{{$data->kode_alternatif}}</td>
                                @php $total = 0;@endphp
                                @foreach($data->crip as $crip)
                                    <?php $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id])); ?>
                                    <td>{{$normalisasi}}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Menentukan Skor Ternormalisasi Terbobot</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Kode Kriteria & Alternatif</th>
                            @php $bobot = [] @endphp
                            @foreach($kriterias as $krit)
                                <?php $bobot[$krit->id] = $krit->bobot ?>
                                <th class="text-center">{{$krit->kode}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alternatif as $data)
                            <tr>
                                <td>{{$data->kode_alternatif}}</td>
                                @foreach($data->crip as $crip)
                                    @php
                                        $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id]));
                                        $normalisasiBobot = $normalisasi * $bobot[$crip->kriteria->id];
                                    @endphp
                                    <td>{{$normalisasiBobot}}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Menentukan Solusi Ideal Positif</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Criteria</th>
                            <th class="text-center">Value</th>

                        </tr>
                        </thead>
                        <tbody>
                        @php $solusiIdealPositifArray = [] @endphp
                        @foreach($kriterias as $data)
                            @php $solusiIdealPositif = [] @endphp
                            <tr>
                                <td>{{$data->kode}}</td>
                                @foreach($data->crip as $crip)
                                    @php
                                        $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id]));
                                        $normalisasiBobot = $normalisasi * $bobot[$crip->kriteria->id];
                                        $solusiIdealPositif[$data->id][] = $normalisasi * $bobot[$crip->kriteria->id];
                                    @endphp
                                @endforeach
                                @php
                                    if ($data->atribut == 'cost'){
                                        $solusiIdealPositif[$data->id] = min($solusiIdealPositif[$data->id]);
                                    }elseif ($data->atribut == 'benefit'){
                                        $solusiIdealPositif[$data->id] = max($solusiIdealPositif[$data->id]);
                                    }
                                    $solusiIdealPositifArray[$data->id] = [
                                        'id_solusiIdeal'=> $data->id,
                                        'solusiIdeal'=> $solusiIdealPositif[$data->id]
                                        ];
                                @endphp
                                <td>{{$solusiIdealPositif[$data->id] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Menentukan Solusi Ideal Negatif</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Criteria</th>
                            <th class="text-center">Value</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($kriterias as $data)
                            @php $solusiIdealNegatif = [] @endphp
                            <tr>
                                <td>{{$data->kode}}</td>
                                @foreach($data->crip as $crip)
                                    @php
                                        $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id]));
                                        $normalisasiBobot = $normalisasi * $bobot[$crip->kriteria->id];
                                        $solusiIdealNegatif[$data->id][] = $normalisasi * $bobot[$crip->kriteria->id];
                                    @endphp
                                @endforeach
                                @php
                                    if ($data->atribut == 'cost'){
                                        $solusiIdealNegatif[$data->id] = max($solusiIdealNegatif[$data->id]);
                                    }elseif ($data->atribut == 'benefit'){
                                        $solusiIdealNegatif[$data->id] = min($solusiIdealNegatif[$data->id]);
                                    }
                                @endphp
                                <td>{{$solusiIdealNegatif[$data->id] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Menghitung Jarak Alternatif dengan Solusi Ideal Positif</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">D+</th>
                            <th class="text-center">value</th>
                        </tr>
                        </thead>
                        <tbody>

{{--                        @php $totalPositif = array() @endphp--}}
{{--                        @foreach($alternatif as $data)--}}
{{--                            @php $totalPositif = []  @endphp--}}
{{--                            <tr>--}}
{{--                                <td>D{{$data->id}}+</td>--}}
{{--                                @foreach($data->crip as $crip)--}}
{{--                                    @php--}}
{{--                                        $totalPositif[$data->id][] += pow(($solusiIdealPositifArray[$crip->id]),2)--}}
{{--                                    @endphp--}}
{{--                                @endforeach--}}
{{--                                @php--}}
{{--                                    $hasilSolusi1[$data->id] = sqrt($totalPositif[$data->id]);--}}
{{--                                    @endphp--}}
{{--                                <td>{{$hasilSolusi1[$data->id]}}</td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
                <h4>Menghitung Jarak Alternatif dengan Solusi Ideal Negatif</h4>
                <h4>Menghitung Skor Akhir untuk Setiap Alternatif</h4>
            </div>
        </div>
    </div>
@endsection
