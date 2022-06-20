@extends('templates.user')

@section('content')
    <!-- offcanvas-overlay start -->
    <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
    <!-- offcanvas-overlay end -->
    <!-- offcanvas-mobile-menu start -->
    <div id="offcanvas-mobile-menu" class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

        <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
            <!-- close button start -->
            <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0" aria-label="offcanvas">x</button>
            <!-- close button end -->

            <!-- offcanvas-menu start -->

            <nav class="offcanvas-menu">
                <ul>
                    <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                        <a href="#" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>
                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index.html">home 01</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-2.html">home 02</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-3.html">home 03</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-4.html">home 04</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-5.html">home 05</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-6.html">home 06</a></li>
                        </ul>
                    </li>
                    <li class="relative block border-b-primary border-b">
                        <a href="about.html" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">About</a>
                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="about.html">About</a></li>

                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="about-v2.html">About v2</a></li>
                        </ul>

                    </li>
                    <li class="relative block border-b-primary border-b">
                        <a href="#" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Properties</a>
                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li>
                                <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">Properties</a>
                                <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">



                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="properties-v1.html"> properties v1</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="properties-v2.html"> properties v2</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="add-properties.html">add properties </a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">Properties with sidebar</a>
                                <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">

                                    <li>
                                        <a href="properties-left-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                            left side bar</a>
                                    </li>
                                    <li>
                                        <a href="properties-right-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                            right side bar</a>
                                    </li>

                                    <li>
                                        <a href="properties-list-left-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                            list left side bar</a>
                                    </li>

                                    <li>
                                        <a href="properties-list-right-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                            list
                                            right side bar</a>
                                    </li>
                                </ul>


                            </li>
                            <li>
                                <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">Property Details</a>

                                <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">

                                    <li>
                                        <a href="add-properties.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">add
                                            properties</a>
                                    </li>

                                    <li>
                                        <a href="properties-details.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                            details</a>
                                    </li>

                                </ul>

                            </li>

                        </ul>
                    </li>
                    <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Pages</a>

                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li>
                                <a href="service.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">Service</a>
                            </li>
                            <li>
                                <a href="single-service.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">single service</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">contact
                                    us</a>
                            </li>
                            <li>
                                <a href="create-agency.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">create
                                    agency</a>
                            </li>
                            <li>
                                <a href="login.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">login</a>
                            </li>
                            <li>
                                <a href="register.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">register</a>
                            </li>
                        </ul>
                    </li>

                    <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">agency</a>

                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li>
                                <a href="agency.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agency</a>
                            </li>
                            <li>
                                <a href="create-agency.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">create
                                    agency</a>
                            </li>

                            <li>
                                <a href="agent.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agent</a>
                            </li>

                            <li>
                                <a href="agency-details.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agency
                                    details</a>
                            </li>

                            <li>
                                <a href="agent-details.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agent
                                    details</a>
                            </li>

                        </ul>

                    </li>

                    <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Blog</a>




                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li>
                                <a href="blog-grid.html" class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                    grid</a>
                            </li>
                            <li>
                                <a href="blog-grid-left-side-bar.html" class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                    grid left side bar</a>
                            </li>
                            <li>
                                <a href="blog-grid-right-side-bar.html" class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                    grid right side bar</a>
                            </li>
                            <li>
                                <a href="blog-details.html" class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                    details</a>
                            </li>

                        </ul>
                    </li>
                    <li class="relative block border-b-primary border-b"><a href="contact.html" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Contact</a></li>
                </ul>
            </nav>
            <!-- offcanvas-menu end -->

            <div class="px-5 flex flex-wrap mt-3 sm:hidden">
                <a href="#" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add
                    Property</a>
            </div>



        </div>
    </div>
    <!-- offcanvas-mobile-menu end -->
    <!-- Header end -->

    <!-- Featured Properties Start -->
    <section class="featured-properties py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="card-body">
                            @php $bobot = [] @endphp
                            @foreach($kriterias as $key1 => $krit)
                                <?php $bobot[$key1] = $krit->bobot ?>
                            @endforeach
                        @php $normalisasiArray=[[]] @endphp
                        @foreach($alternatif as $key1 => $data)
                                @foreach($data->crip as $key2 => $crip)
                                    <?php
                                    $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id]));
                                    $normalisasiArray[$key2][$key1] = $normalisasi;
                                    ?>
                                @endforeach
                        @endforeach
                        @php
                            $normalisasiBobotArray =[[]]
                        @endphp
                        @foreach($alternatif as $key1 => $data)
                                @foreach($data->crip as $key2 => $crip)
                                    @php
                                        $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id]));
                                        $normalisasiBobotArray[$key2][$key1] = $normalisasiArray[$key2][$key1] * $bobot[$key2];
                                    @endphp
                                @endforeach
                        @endforeach
                        @foreach($kriterias as $key1 => $data)
                                @foreach($alternatif as $key2 => $alternatifs)
                                    {{--                                    $normalisasi = ($crip->nilai_crip / sqrt($kode_krit[$crip->kriteria->id]));--}}
                                    @php
                                        $solusiIdealPositif[$key1][$key2] = $normalisasiBobotArray[$key1][$key2]
                                    @endphp
                                @endforeach
                                @php
                                    if ($data->atribut == 'cost'){
                                        $solusiIdealPositif[$key1] = min($solusiIdealPositif[$key1]);
                                    }elseif ($data->atribut == 'benefit'){
                                        $solusiIdealPositif[$key1] = max($solusiIdealPositif[$key1]);
                                    }
                                    $solusiIdealPositifArray[$key1] = $solusiIdealPositif[$key1];
                                @endphp
                        @endforeach
                        @php
                            $solusiIdealNegatifArray = [] @endphp
                        @foreach($kriterias as $key1 => $data)
                                @foreach($alternatif as $key2 => $alternatifs)
                                    @php
                                        $solusiIdealNegatif[$key1][$key2] = $normalisasiBobotArray[$key1][$key2]
                                    @endphp
                                @endforeach
                                @php
                                    if ($data->atribut == 'cost'){
                                        $solusiIdealNegatif[$key1] = max($solusiIdealNegatif[$key1]);
                                    }elseif ($data->atribut == 'benefit'){
                                        $solusiIdealNegatif[$key1] = min($solusiIdealNegatif[$key1]);
                                    }
                                    $solusiIdealNegatifArray[$key1] = $solusiIdealNegatif[$key1];
                                @endphp
                        @endforeach
                        @php
                            $totalPositif = [];
                        @endphp

                        @foreach($alternatif as $key1 => $data)
                            @php $totalPositif[$key1] = 0   @endphp
                                @foreach($kriterias as $key2 => $data2)
                                    @php
                                        $totalPositif[$key1] += pow(($solusiIdealPositifArray[$key2] - $normalisasiBobotArray[$key2][$key1] ),2);
                                    @endphp
                                @endforeach
                                @php
                                    $totalPositif[$key1] = sqrt($totalPositif[$key1])
                                @endphp
                        @endforeach
                        @foreach($alternatif as $key1 => $data)
                            @php $totalNegatif[$key1] = 0   @endphp
                                @foreach($kriterias as $key2 => $data2)
                                    @php
                                        $totalNegatif[$key1] += pow(($solusiIdealNegatifArray[$key2] - $normalisasiBobotArray[$key2][$key1] ),2)
                                    @endphp
                                @endforeach
                                @php
                                    $totalNegatif[$key1] = sqrt($totalNegatif[$key1])
                                @endphp
                        @endforeach
                        @foreach($alternatif as $key1 => $data)
                            @php $preferensi[$key1] = 0   @endphp
                                @php
                                    $preferensi[$key1] = $totalNegatif[$key1] / ($totalPositif[$key1] + $totalNegatif[$key1])
                                @endphp
                                @php $rangking[] = [
                                    'kode' => $data->kode_alternatif,
                                    'nama'  => $data->nama_alternatif,
                                    'keterangan' => $data->keterangan,
                                    'total' => $preferensi[$key1]
                                ]; @endphp
                        @endforeach
            </div>
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <span class="text-secondary text-tiny inline-block mb-2">Berdasarkan perhitungan dari Sistem Pendukung Keputusan dengan metode TOPSIS</span>
                </div>
                <div class="col-span-12 flex flex-wrap flex-col md:flex-row items-start justify-between mb-[50px]">
                    <div class="mb-5 lg:mb-0">

                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                            Hasil Rekomendasi Kos<span class="text-secondary">.</span></h2>
                    </div>
                </div>
                @php
                    usort($rangking, function($a, $b)
                    {
                        return $b['total'] <=> $a['total'];
                    });

                    $rank = 1;
                @endphp
                <div class="col-span-12">
                    <div id="all-properties" class="properties-tab-content active">
                        <div class="">
                            <h4>Kesimpulan</h4>
                            <p>Berdasarkan pencarian yang anda lakukan dengan mengisi bobot pada halaman sebelumnya dapat disimpulkan bahwa
                                <b>{{$rangking[0]['nama']}}</b> dengan kode alternatif <b>{{$rangking[0]['kode']}}</b>
                                merupakan rekomendasi terbaik untuk anda
                            </p>
                            <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                <div class="relative">
                                    <a href="properties-details.html" class="block">
                                        <img src="assets/images/properties/properties4.jpg" class="w-full h-full" loading="lazy" width="370" height="266" alt="Elite Garden Resedence.">
                                    </a>
                                </div>

                                <div class="py-[20px] px-[20px]">
                                    <h3><a href="properties-details.html" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary">{{$rangking[0]['nama']}}</a></h3>
                                    <h4><a href="properties-details.html" class="font-light text-tiny text-secondary underline">{{$rangking[0]['keterangan']}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-wrap flex-col md:flex-row items-start justify-between mb-[50px]">
                    <div class="mb-5 lg:mb-0">
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                            List Urutan Kos Rekomendasi<span class="text-secondary">.</span></h2>
                    </div>
                </div>
                <div class="col-span-12">
                    <div id="all-properties" class="properties-tab-content active">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
                            @foreach($rangking as $t)
                                <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                    <div class="relative">
                                        <a href="properties-details.html" class="block">
                                            <img src="assets/images/properties/properties4.jpg" class="w-full h-full" loading="lazy" width="370" height="266" alt="Elite Garden Resedence.">
                                        </a>
                                        <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">{{$rank++}}</span>
                                    </div>

                                    <div class="py-[20px] px-[20px]">
                                        <h3><a href="properties-details.html" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary">{{$t['nama']}}</a></h3>
                                        <h4><a href="properties-details.html" class="font-light text-tiny text-secondary underline">{{$t['keterangan']}}</a></h4>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Featured Properties End -->

@endsection
