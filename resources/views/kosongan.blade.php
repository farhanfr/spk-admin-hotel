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
                        @php $rangking = []; @endphp
                        @foreach($alternatif as $data)
                            <tr>
                                <td>{{$data->kode_alternatif}}</td>
                                @php $total = 0;@endphp
                                @foreach($data->crip as $crip)
                                    @if($crip->kriteria->atribut == 'cost')
                                        <?php $normalisasi = ($kode_krit[$crip->kriteria->id]/$crip->nilai_crip); ?>
                                    @elseif($crip->kriteria->atribut == 'benefit')
                                        <?php $normalisasi = ($crip->nilai_crip/$kode_krit[$crip->kriteria->id]); ?>
                                    @endif
                                    @php $total = $total+($bobot[$crip->kriteria->id]*$normalisasi);@endphp
                                    <td>{{$normalisasi}}</td>
                                @endforeach
                                @php $rangking[] = [
                                    'kode'  => $data->kode_alternatif,
                                    'nama'  => $data->nama_alternatif,
                                    'total' => $total
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
