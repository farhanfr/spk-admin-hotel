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

    <!-- Hero section start -->
    <section class="bg-[#FFFFFF] relative before:absolute before:w-1/2 lg:before:w-[calc(50%_-_35px)] xl:before:w-[calc(50%_-_65px)] before:h-full before:top-0 before:right-0 before:content-[''] before:bg-[#ECFAF7] pt-[130px] lg:pt-[80px] xl:pt-[0px] mb-[70px] lg:mb-[0px]">
        <div class="hero-slider overflow-hidden">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- swiper-slide start -->
                    <div class="swiper-slide lg:h-[700px] xl:h-[950px] xs:h-[auto] flex flex-wrap items-center">
                        <div class="container">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-5 xl:col-span-6">
                                    <div class="slider-content max-w-[560px]">
                                        <div class="relative mb-5 sub_title">
                                            <span class="text-base text-secondary block">Pencarian kos dengan sistem pendukung keputusan</span>
                                        </div>
                                        <h1 class="font-recoleta text-primary text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title">
                                            <span>Cari kos berdasarkan bobot yang anda isi</span>
                                        </h1>

                                        <p class="text-base text-[#494949] mt-5 mb-8 text max-w-[570px]">
                                            Bobot yang anda isi menentukan hasil pencarian yang akan di hitung oleh sistem pendukung keputusan dengan menggunakan metode TOPSIS
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-7 xl:col-span-6">
                                    <div class="relative mt-10 md:mt-0 lg:absolute lg:right-0 lg:bottom-0">
                                        <img class="hero_image lg:max-w-[550px] xl:max-w-[650px] 2xl:max-w-[750px] 3xl:max-w-[866px]" src="assets/images/hero/hernan-lucio.png" width="866" height="879" alt="hero image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide end-->
                    <!-- swiper-slide start -->
                    <div class="swiper-slide lg:h-[700px] xl:h-[950px] xs:h-[auto] flex flex-wrap items-center">
                        <div class="container">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-5 xl:col-span-6">
                                    <div class="slider-content max-w-[560px]">
                                        <div class="relative mb-5 sub_title">
                                            <span class="text-base text-secondary block">A new way to find Properties</span>
                                        </div>
                                        <h1 class="font-recoleta text-primary text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title">
                                            <span>Modern, Creative & Luxury Homes</span>
                                        </h1>

                                        <p class="text-base text-[#494949] mt-5 mb-8 text">
                                            Huge number of propreties availabe here for buy, and sell, also you
                                            can find here co-living property, So you have lots of opportunity
                                        </p>
                                        <div class="inline-block mb-[60px] hero_btn">
                                            <a href="contact-us.html" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all block">Contact
                                                us</a>
                                        </div>
                                        <ul class="flex flex-wrap list-none">
                                            <li class="block">
                                                <span class="font-recoleta text-secondary text-lg"><span>20</span> <span>k+</span></span>
                                                <p>Properties</p>
                                            </li>
                                            <li class="block pl-[25px] sm:pl-[40px] md:pl-[60px]">
                                                <span class="font-recoleta text-secondary text-lg"><span>12</span> <span>k+</span></span>
                                                <p>Customers</p>
                                            </li>
                                            <li class="block pl-[25px] sm:pl-[40px] md:pl-[60px]">
                                                <span class="font-recoleta text-secondary text-lg"><span>160</span> <span>+</span></span>
                                                <p>Awards Win</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-7 xl:col-span-6">
                                    <div class="relative mt-10 md:mt-0 lg:absolute lg:right-0 lg:bottom-0">
                                        <img class="hero_image lg:max-w-[550px] xl:max-w-[650px] 2xl:max-w-[750px] 3xl:max-w-[866px]" src="assets/images/hero/home-2.png" width="906" height="950" alt="hero image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide end-->
                </div>
            </div>

        </div>

    </section>
    <!-- Hero section end -->


    <!-- Addvanced search tab start -->
    <div class="mt-[80px] lg:mt-[120px] xl:mt-[-160px] relative z-[2] pl-[40px] lg:pl-[50px] xl:pl-[0px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12 relative">
                    <ul class="tab-nav search-tab inline-flex px-[15px] sm:px-[30px] py-[22px] border-l border-t border-r border-solid border-[#016450] border-opacity-25 rounded-tl-[15px] rounded-tr-[15px] bg-white">
                        <li data-tab="buy" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1 active"><button class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">Cari Kos-kosan</button>
                        </li>
                    </ul>
                </div>
                <div class="col-span-12 selectricc-border-none">
                    <div id="buy" class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px] active">
                        <form action="{{route('user.search')}}" method="POST">
                            @csrf
                            <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">
                                @foreach($dataKriteria as $data)
                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="flex-1">

                                            <label for="{{$data->kode}}" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">{{$data->nama}}</label>
                                            <input id="{{$data->kode}}" type="number" step=".01" max="1" min="0" name="{{$data->kode}}" placeholder="{{$data->nama}}" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                        </div>
                                    </div>
                                @endforeach
                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <button class="search-properties-btn" type="submit">
                                            Cari Kos Sekarang
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Addvanced search tab end -->

@endsection
