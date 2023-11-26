<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ms-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/logo-qw-light.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cloud Hosting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Server</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Domain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Email Suite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Internet Access</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn orange-btn" href="#">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="background-black">
        <div class="container-fluid">
            <div class="row mx-5">
                <div class="col-8 d-flex align-items-center" style="margin-top: 110px">
                    <div class="hero-wrapper align-middle">
                        <h2 class="hero-h">Cloud Hosting untuk Kesuksesan <span
                                style="color: #F07900;">Websitemu!</span></h2>
                        <p class="hero-p">Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan
                            Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda.
                            Tersertifikasi ISO 27001 dengan Data Center Tier 3.</p>
                        <h2 class="hero-hashtag mt-5 mb-3">#QwordsYourSuccess</h2>
                        <a class="orange-btn-lg" href="#">Get Started</a>
                    </div>
                </div>
                <div class="col-4" style="margin-top: 100px">
                    <img src="{{ asset('assets/Cloud hosting-amico.png') }}" alt="" width="550px"
                        height="550px" style="transform: scaleX(-1)">
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-5">
            <div class="card-web d-flex">

                <div class="col ms-4">
                    <img src="{{ asset('assets/Website Creator-cuate.png') }}" alt="" width="425px"
                        height="425px">
                </div>
                <div class="col-8">
                    <h1 class="hero-h mt-5" style="color: #F07900">BUATLAH WEBSITE ANDA</h1>
                    <p class="hero-p text-black ">Pembuatan website bukan hanya tentang tampilan, melainkan pengalaman
                        pengguna yang memukau. Kami menempatkan perhatian pada setiap detail desain untuk memastikan
                        website Anda tidak hanya terlihat indah tetapi juga memberikan pengalaman yang luar biasa. Hanya
                        dengan 1 jutaan.</p>
                    <a class="orange-btn-lg" style="width: 350px; font-size: 24px; margin-top:35px"
                        href="#">Pelajari Selengkapnya</a>

                </div>
            </div>
        </div>

        <div class="row mx-5" style="margin-top: 150px">
            <div class="col">
                <h1 class="hero-h">Layanan Cloud Hosting Indonesia Terbaik</h1>
                <h1 class="hero-h" style="color: #F07900">Diskon Hingga 50%</h1>
            </div>~
        </div>

        <div class="row mx-5 mt-5">
            <div class="col-3">
                <div class="card-top d-flex flex-column align-items-center justify-content-center ms-3">
                    <p class="hero-p">Value Cloud Hosting</p>
                    <p class="hero-p"><strong>VCH1</strong></p>
                </div>
                <div class="card-main ms-3 text-center">
                    <div class="d-flex flex-col justify-content-center">
                        <sup style="margin-top:40px; font-size:16px;">Rp.</sup>
                        <h1 class="mt-4 hero-h text-black" style="font-size:60px;">14.500</h1>
                    </div>
                    <div class="feature">
                        <ul class="mt-3">
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Disk 3 GB</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Disk 3 GB</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Disk 3 GB</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-4">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Disk 3 GB</p>
                            </li>
                            <li class=" d-flex me-4 mb-3 mt-5">
                                <a class="orange-btn-lg" style="width: 264px; height:48px; font-size:22px;"
                                    href="#">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card-top d-flex flex-column align-items-center justify-content-center ms-3">
                    <p class="hero-p">Unlimited Hosting</p>
                    <p class="hero-p"><strong>Signature</strong></p>
                </div>
                <div class="card-main ms-3 text-center">
                    <div class="d-flex flex-col justify-content-center">
                        <sup style="margin-top:40px; font-size:16px;">Rp.</sup>
                        <h1 class="mt-4 hero-h text-black" style="font-size:60px;">89.900</h1>
                    </div>
                    <div class="feature">
                        <ul class="mt-3">
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Disk Unlimited</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Bandwith Unlimited</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Core CPU 1 Core</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-4">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p class="text-start">Addon / Parked Domain <br>
                                    5 /5</p>
                            </li>
                            <li class=" d-flex me-4 mb-3">
                                <a class="orange-btn-lg" style="width: 264px; height:48px; font-size:22px;"
                                    href="#">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card-top d-flex flex-column align-items-center justify-content-center ms-3">
                    <p class="hero-p">High Performance</p>
                    <p class="hero-p"><strong>HPCH Bisnis 1</strong></p>
                </div>
                <div class="card-main ms-3 text-center">
                    <div class="d-flex flex-col justify-content-center">
                        <sup style="margin-top:40px; font-size:16px;">Rp.</sup>
                        <h1 class="mt-4 hero-h text-black" style="font-size:60px;">79.000</h1>
                    </div>
                    <div class="feature">
                        <ul class="mt-3">
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Disk 3 GB</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Bandwith Unlimited</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Core CPU 1 Core</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-4">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p class="text-start">Addon / Parked Domain <br>
                                    -</p>
                            </li>
                            <li class=" d-flex me-4 mb-3">
                                <a class="orange-btn-lg" style="width: 264px; height:48px; font-size:22px;"
                                    href="#">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card-top d-flex flex-column align-items-center justify-content-center ms-3">
                    <p class="hero-p">Cloud VPS KVM SSD</p>
                    <p class="hero-p"><strong> VPS SC1</strong></p>
                </div>
                <div class="card-main ms-3 text-center">
                    <div class="d-flex flex-col justify-content-center">
                        <sup style="margin-top:40px; font-size:16px;">Rp.</sup>
                        <h1 class="mt-4 hero-h text-black" style="font-size:60px;">75.000</h1>
                    </div>
                    <div class="feature">
                        <ul class="mt-3">
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Disk 25 GB</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Bandwith Unlimited</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-3">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p>Core CPU 1 Core</p>
                            </li>
                            <li class="list-feature d-flex me-4 mb-4">
                                <img src="{{ asset('assets/circle-check-regular.svg') }}" alt=""
                                    width="23px" height="21px" class="me-4">
                                <p class="text-start">Addon / Parked Domain Unlimited</p>
                            </li>
                            <li class=" d-flex me-4 mb-3">
                                <a class="orange-btn-lg" style="width: 264px; height:48px; font-size:22px;"
                                    href="#">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

        <div class="row mx-5" style="margin-top: 100px">
            <div class="col">
                <h1 class="hero-h">Layanan Kami Yang Lainnya</h1>
            </div>
        </div>

        <div class="row mx-5 mt-5">
            <div class="col-4">
                <div class="card-top-lg d-flex flex-column align-items-center justify-content-center ms-3">
                    <p class="hero-p"><strong>Value Cloud Hosting</strong></p>
                </div>
                <div class="card-main-lg ms-3 text-center">

                    <p class="text-start hero-p text-black pt-4" style="margin-left: 35px"><strong>Mulai dari</strong>
                    </p>
                    <div class="d-flex justify-content-center pt-3">
                        <sup style=" font-size:16px;">Rp.</sup>
                        <h1 class="hero-h text-black" style="font-size:60px;">75.000</h1>
                        <p class="hero-p text-black-50" style="margin-top: 30px;">/bulan</p>
                    </div>

                    <div class="feature mx-5 text-start mt-3 d-flex flex-column align-items-center">
                        <p class="hero-p text-black" style="font-size: 22px; font-weight:400;">Jadikan Website Anda
                            lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL CERTIFIVCATE</p>
                        <a class="orange-btn-lg mt-3" style="width: 264px; height:48px; font-size:22px;"
                            href="#">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card-top-lg d-flex flex-column align-items-center justify-content-center ms-3">
                    <p class="hero-p"><strong>Dedicated Server</strong></p>
                </div>
                <div class="card-main-lg ms-3 text-center">

                    <p class="text-start hero-p text-black pt-4" style="margin-left: 35px"><strong>Mulai dari</strong>
                    </p>
                    <div class="d-flex justify-content-center pt-3">
                        <sup style=" font-size:16px;">Rp.</sup>
                        <h1 class="hero-h text-black" style="font-size:60px;">499.000</h1>
                        <p class="hero-p text-black-50" style="margin-top: 30px;">/bulan</p>
                    </div>

                    <div class="feature mx-5 text-start mt-3 d-flex flex-column align-items-center">
                        <p class="hero-p text-black" style="font-size: 22px; font-weight:400;">Nikmati kelola
                            Dedicated Server Sendriri
                            dengan akses remote dari seluruh duniaz tanpa batas</p>
                        <a class="orange-btn-lg" style="width: 264px; height:48px; font-size:22px; margin-top:40px;"
                            href="#">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card-top-lg d-flex flex-column align-items-center justify-content-center ms-3">
                    <p class="hero-p"><strong>Colocation Server</strong></p>
                </div>
                <div class="card-main-lg ms-3 text-center">

                    <p class="text-start hero-p text-black pt-4" style="margin-left: 35px"><strong>Mulai dari</strong>
                    </p>
                    <div class="d-flex justify-content-center pt-3">
                        <sup style=" font-size:16px;">Rp.</sup>
                        <h1 class="hero-h text-black" style="font-size:60px;">500.000</h1>
                        <p class="hero-p text-black-50" style="margin-top: 30px;">/bulan</p>
                    </div>

                    <div class="feature mx-5 text-start mt-3 d-flex flex-column align-items-center">
                        <p class="hero-p text-black" style="font-size: 22px; font-weight:400;">Akses cepat dari
                            seluruh dunia dengan fasilitas 24*7 full monitoring dengan coding system terbaik serta fire
                            extinguisher</p>
                        <a class="orange-btn-lg mt-3" style="width: 264px; height:48px; font-size:22px;"
                            href="#">Get Started</a>
                    </div>
                </div>
            </div>


        </div>


        <div class="card-web-lg mx-5 mt-5">
            <div class="row d-flex ">

                <div class="col-4  d-flex justify-content-center mt-5">
                    <img src="{{ asset('assets/Banknote-pana 1.png') }}" alt="" height="325px">
                </div>
                <div class="col-8">
                    <h1 class="hero-h mt-5 w-aut" style="color: #000000">Garansi 30 Hari <span
                            style="color: #F07900">Uang Kembali</span></h1>
                    <p class="hero-p text-black w-75 mt-5" style="font-weight: 400">Untuk kepuasan pelanggan kami akan
                        memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h1 class="hero-h text-black"> Paket Hosting Kami</h1>
                </div>
            </div>
            <div class="row mx-5 mt-3">
                <div class="col-6 d-flex justify-content-center">
                    <div class="box-dull d-flex align-items-center">
                        <div class="box-text px-5 mt-3">
                            <h2 class="hero-h" style="color: #F07900; font-size:38px;">Perusahaan</h2>
                            <p class="hero-p text-black" style="font-size: 20px;">Wujudkan website perusahaan profesional dan berkelas dnegan dukungan web hosting terbaik dan fitur berkelas</p>
                        </div>
                            <img class="me-5" src="{{ asset('assets/Business Plan-amico 1.png') }}" width="168px" height="157px" alt="">
            
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="box-dull d-flex align-items-center">
                        <div class="box-text px-5 mt-3">
                            <h2 class="hero-h" style="color: #F07900; font-size:38px;">UMKM Dan Toko Online</h2>
                            <p class="hero-p text-black" style="font-size: 20px;">Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa secara online</p>
                        </div>
                            <img class="me-5" src="{{ asset('assets/Online shopping-pana 1.png') }}" width="168px" height="157px" alt="">
            
                    </div>
                </div>
                <div class="col-6 d-flex mt-3 justify-content-center">
                    <div class="box-dull d-flex align-items-center">
                        <div class="box-text px-5 mt-3">
                            <h2 class="hero-h" style="color: #F07900; font-size:38px;">Organisasi dan Komunitas</h2>
                            <p class="hero-p text-black" style="font-size: 20px;">Bikin website organisasi atau komunitas anda dengan paket hosting unggulan yang ramah dikantong</p>
                        </div>
                            <img class="me-5" src="{{ asset('assets/Good team-pana 1.png') }}" width="168px" height="157px" alt="">
            
                    </div>
                </div>
                <div class="col-6 d-flex mt-3 justify-content-center">
                    <div class="box-dull d-flex align-items-center">
                        <div class="box-text px-5 mt-3">
                            <h2 class="hero-h" style="color: #F07900; font-size:38px;">Sekolah</h2>
                            <p class="hero-p text-black" style="font-size: 20px;">Infrastruktur web hosting terbaik untuk menunjang kegiatan  e-learning  dan didukung platform MOODLE khusus pembelajaran daring</p>
                        </div>
                            <img class="me-5" src="{{ asset('assets/kids wearing masks at school-bro 1.png') }}" width="168px" height="157px" alt="">
            
                    </div>
                </div>
            </div>
        </div>

        <div class="background-white">
            <div class="row d-flex justify-content-center mb-5">
                <div class="col-6 card-review p-5">
                  
                        <h2 class="hero-hashtag mt-5" style="font-size: 32px">TESTIMONIALS <<</h2>
                        <h2 class="hero-hashtag text-black mt-3" style="font-size: 54px">Apa Kata Mereka ?</h2>
                        <p class="hero-p text-black mt-4 mb-5">Apa kata mereka yang sudah menggunakan 
                            layanan web hosting indnonesia dari Qwords? 
                            Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>
                        <a href="#" class="btn-view mt-5">View All ></a>
                 
                </div>
                <div class="col-6 card-review p-5" style="background:#F07900;">
                    <img src="{{ asset('assets/stars.png') }}" alt="" class="mt-5 w-50">
                    <p class="hero-p text-white" style="margin-top: 82px; margin-bottom:52px;">Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords</p>
                    <div class="profil d-flex mt-5">
                        <img src="{{ asset('assets/budi.png') }}" alt="" style="width: 128px; height: 128px;">
                        <div class="profil-text ms-4 text-white mt-2">
                            <h2 class="hero-hashtag text-white" style="font-size: 38px;">Budi Raharjo</h2>
                            <p class="hero-p">
                                Founder ID Cert</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 card-review p-5" style="background: #353535;">
                    <img src="{{ asset('assets/stars.png') }}" alt="" class="mt-5 w-50">
                    <p class="hero-p text-white" style="margin-top: 62px; margin-bottom:22px;">Pelayanan Qword sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah</p>
                    <div class="profil d-flex mt-5">
                        <img src="{{ asset('assets/kuns.png') }}" alt="" style="width: 128px; height: 128px;">
                        <div class="profil-text ms-4 text-white">
                            <h2 class="hero-hashtag text-white" style="font-size: 38px;">Kuns Kurniawan
                                </h2>
                            <p class="hero-p">
                                PR Event Info BDG</p>
                        </div>
                    </div>
                </div>
                 <div class="col-6 card-review p-5" style="background: #F8A145;">
                    <img src="{{ asset('assets/stars-2.png') }}" alt="" class="mt-5 w-50">
                    <p class="hero-p text-black" style="margin-top: 52px; margin-bottom:22px;">Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan Customer Service syang sangat baik, membuat kami tidak ingin berpindah dari Qwords.</p>
                    <div class="profil d-flex mt-4">
                        <img src="{{ asset('assets/denden.png') }}" alt="" style="width: 128px; height: 128px;">
                        <div class="profil-text ms-4 text-white mt-2">
                            <h2 class="hero-hashtag text-black" style="font-size: 38px;">Denden Sofiudin</h2>
                            <p class="hero-p text-black">
                                Owner Rumah Kopi Temanggung</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 mt-5">
                    <h1 class="hero-h text-black text-center" style="font-size:44px;">Telah Dipercaya Oleh 45.000+ Pelanggan Aktif</h1>
                </div>
            </div>
            <div class="row px-5 mt-5">
                <div class="col-2">
                    <img src="{{ asset('assets/cimory.webp') }}" alt="">
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/MD.webp') }}" alt="">
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/Elsheskin.webp') }}" alt="">
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/Icon.webp') }}" alt="">
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/Horison.webp') }}" alt="">
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/Forisa.webp') }}" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-5">
                    <h1 class="hero-h text-black text-center" style="font-size:44px;">Partner Kami</h1>
                </div>
            </div>
            <div class="row px-5 mt-3">
                <div class="col-2">
                    <img src="{{ asset('assets/Idea.webp') }}" alt="">
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/Google.webp') }}" alt="">
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/dotid.webp') }}" alt="">
                </div>
                <div class="col-2 me-3">
                    <img src="{{ asset('assets/Cpanel.webp') }}" alt="">
                </div>
                <div class="col-2 ms-5">
                    <img src="{{ asset('assets/Archi.webp') }}" alt="">
                </div>
            </div>
        </div>
        
        <div class="background-orange">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Kontak Kami</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Kami siap membantu anda 24 Jam</h1>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="button-contact">
                        <img src="{{ asset('assets/phone-solid (1).svg') }}" alt="" width="50px">
                        <a class="text-decoration-none" href="">0804-1-808-888</a>
                    </div>
                   
                    <a href="">021 39708800</a>
                    <a href="">+6281 7437 111 ( WhatsApp Only)</a>
                    <a href="">info@qwords.com</a>
                </div>
            </div>
        </div>
        




    </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
