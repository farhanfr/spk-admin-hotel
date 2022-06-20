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
                        @php $normalisasiBobotArray = [] @endphp
                        @foreach($alternatif as $key1 => $data)
                            <tr>
                                <td>{{$data->kode_alternatif}}</td>
                                @foreach($data->crip as $key2 => $crip)
                                    @php
                                        $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id]));
                                        $normalisasiBobot = $normalisasi * $bobot[$crip->kriteria->id];
                                        $normalisasiBobotArray[$key1][$key2] = $normalisasiBobot;

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
                        @foreach($kriterias as $key1 => $data)
                            @php $solusiIdealPositif[$key1] = [] @endphp
                            <tr>
                                <td>{{$data->kode}}</td>
                                @foreach($data->crip as $key2 => $crip)
                                    @php
                                        $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id]));
                                        $solusiIdealPositif[$key1][$key2] = $normalisasi * $bobot[$crip->kriteria->id];
                                    @endphp
                                @endforeach
                                @php
                                    if ($data->atribut == 'cost'){
                                        $solusiIdealPositif[$key1] = min($solusiIdealPositif[$key1]);
                                    }elseif ($data->atribut == 'benefit'){
                                        $solusiIdealPositif[$key1] = max($solusiIdealPositif[$key1]);
                                    }
                                    $solusiIdealPositifArray[] = $solusiIdealPositif[$key1];
                                @endphp
                                <td>{{$solusiIdealPositif[$key1] }}</td>
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
                        @php $solusiIdealNegatifArray = [] @endphp
                        @foreach($kriterias as $data)
                            @php $solusiIdealNegatif = [] @endphp
                            <tr>
                                <td>{{$data->kode}}</td>
                                @foreach($data->crip as $crip)
                                    @php
                                        $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id]));
                                        $solusiIdealNegatif[$data->id][] = $normalisasi * $bobot[$crip->kriteria->id];
                                    @endphp
                                @endforeach
                                @php
                                    if ($data->atribut == 'cost'){
                                        $solusiIdealNegatif[$data->id] = max($solusiIdealNegatif[$data->id]);
                                    }elseif ($data->atribut == 'benefit'){
                                        $solusiIdealNegatif[$data->id] = min($solusiIdealNegatif[$data->id]);
                                    }
                                    $solusiIdealNegatifArray[] = $solusiIdealNegatif[$data->id];
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

                        @php
                            echo count($solusiIdealPositifArray);
                            print_r($solusiIdealPositifArray);
                        @endphp

                        @foreach($alternatif as $key1 => $data)
                            @php $totalPositif[$key1] = 0   @endphp
                            <tr>
                                <td>D{{$data->id}}+</td>

                                @foreach($kriterias as $key2 => $data2)
                                    @php
                                        $totalPositif[$key1] += pow(($solusiIdealPositifArray[$key2] - $normalisasiBobotArray[$key1][$key2] ),2);
                                    @endphp
                                @endforeach
                                @php
                                    $totalPositif[$key1] = sqrt($totalPositif[$key1])
                                @endphp
                                <td>{{$totalPositif[$key1]}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Menghitung Jarak Alternatif dengan Solusi Ideal Negatif</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">D-</th>
                            <th class="text-center">value</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php
                            echo count($solusiIdealNegatifArray);
                            print_r($solusiIdealNegatifArray);
                        @endphp

                        @foreach($alternatif as $key1 => $data)
                            @php $totalNegatif[$key1] = 0   @endphp
                            <tr>
                                <td>D{{$data->id}}+</td>

                                @foreach($kriterias as $key2 => $data2)
                                    @php
                                        $totalNegatif[$key1] += pow(($solusiIdealNegatifArray[$key2] - $normalisasiBobotArray[$key1][$key2] ),2);
                                    @endphp
                                @endforeach
                                @php
                                    $totalNegatif[$key1] = sqrt($totalNegatif[$key1])
                                @endphp
                                <td>{{$totalNegatif[$key1]}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h4>Menghitung Skor Akhir Untuk Setiap Alternatif</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Nama Alternatif</th>
                            <th class="text-center">value</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($alternatif as $key1 => $data)
                            @php $preferensi[$key1] = 0   @endphp
                            <tr>
                                <td>{{$data->nama_alternatif}}</td>
                                @php
                                    $preferensi[$key1] = $totalNegatif[$key1] / ($totalPositif[$key1] + $totalNegatif[$key1])
                                @endphp
                                <td>{{$preferensi[$key1]}}</td>
                                @php $rangking[] = [
                                    'kode' => $data->kode_alternatif,
                                    'nama'  => $data->nama_alternatif,
                                    'total' => $preferensi[$key1]
                                ]; @endphp
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
                        @php
                            usort($rangking, function($a, $b)
                            {
                                return $b['total'] <=> $a['total'];
                            });

                            $rank = 1;
                        @endphp
                        @foreach($rangking as $t)
                            <tr>
                                <td>{{$t['kode']}}</td>
                                <td>{{$t['nama']}}</td>
                                <td>{{$t['total']}}</td>
                                <td>{{$rank++}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
@endsection
