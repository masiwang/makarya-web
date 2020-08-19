@extends('app')
@section('content')
    <div>
        <img class="landing-background" src="{{asset('image/vegetables-unsplash-wallpaper.jpg')}}"/>
    </div>
    <div>
        <div id="section-1">
            <nav class="navbar navbar-expand-lg navbar-dark ma_bg-transparent">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="{{asset('image/makarya-light-160x48.png')}}"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="mr-auto"></div>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item pl-5">
                                <a class="nav-link text-light" aria-current="page" href="#">Beranda</a>
                            </li>
                            <li class="nav-item pl-5">
                                <a class="nav-link text-light" aria-current="page" href="#">Tentang</a>
                            </li>
                            <li class="nav-item pl-5">
                                <a class="nav-link text-light" aria-current="page" href="#">Fitur</a>
                            </li>
                            <li class="nav-item pl-5">
                                <a class="nav-link text-light" aria-current="page" href="#">Cara Kerja</a>
                            </li>
                            <li class="nav-item pl-5">
                                <a class="nav-link text-light" aria-current="page" href="#">Pasar Makarya</a>
                            </li>
                            <li class="nav-item pl-5">
                                <a class="nav-link text-light" aria-current="page" href="#">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div style="height:80px"></div>
            <div class="text-center">
                <h1 class="text-light ma_big-title">Bersama Makarya</h1>
                <h2 class="text-light ma_big-subtitle">Membangun negeri mulai dari sini</h2>
                <div style="height:30px"></div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-success ma_btn-green mr-2 py-3 px-4" href="{{url('/login')}}">Yuk berinvestasi!</a>
                    <a class="btn btn-light ma_btn-white ml-2 py-3 px-4" href="{{url('/login')}}">Belanja produk mitra</a>
                </div>
                <div style="height:240px"></div>
            </div>
        </div>
        <div id="section-2">
            <div class="text-center">
                <h6 class="ma_section-subtitle">TENTANG KAMI</h6>
                <div style="height:20px"></div>
                <h1 class="ma_section-title">
                    <span class="text-dark">Apa itu </span>
                    <span class="text-success">Makarya</span>
                    <span class="text-dark">?</span>
                </h1>
                <div style="height:20px"></div>
                <div class="row">
                    <div class="col text-center mx-4">
                        <div class="d-flex justify-content-center">
                            <h1 class="my-0 mr-1 p-0 ma_marker">28</h1>
                            <div class="mt-auto text-left mb-3">
                                <h6 class="ma_market-subtitle">
                                    MITRA YANG<br/>
                                    TELAH<br/>
                                    BERGABUNG<br/>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col text-left pt-5 mx-4">
                        <p class="ma_welcome-paragraph">
                            Makarya merupakan platform digital yang bergerak untuk pendanaan dibidang Pertanian, Peternakan dan Perikanan serta Perdagangan hasil produksi di bidang tersebut.<br/>
                            Bersama Makarya, membangun peradaban dengan mendukung pertanian.
                        </p>
                        <a href="#" class="text-success text-decoration-none ma_welcome-link" >Telusuri lebih lanjut <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                          </svg></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:50px;background-color:white"></div>
        <div id="section-3">
            <div class="row">
                <div class="col-8">
                    <h1 class="ma_section-title">
                        <span class="text-dark">Kenapa </span>
                        <span class="text-success">Makarya</span>
                        <span class="text-dark">?</span>
                    </h1>
                    <div style="height:20px;background-color:white"></div>
                    <p class="ma_welcome-paragraph">
                        Dengan bergabung di <span class="text-success">Makarya</span>, Anda akan mendapatkan banyak manfaat, baik sebagai investor ataupun sebagai mitra.
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="ma_card">
                                <div class="ma_card-icon" style="color:#bbedbe">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                        <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                      </svg>
                                </div>
                                <div class="ma_card-content">
                                    <p class="ma_card-number">01</p>
                                    <h6 class="ma_card-title">Keuntungan Investor</h6>
                                    <p class="ma_card-paragraph">Sebagai Investor Anda akan mendapatkan bagi hasil dari penjualan hasil panen dari para Mitra</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ma_card">
                                <div class="ma_card-icon" style="color:#b9cefd">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-life-preserver" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                        <path d="M11.642 6.343L15 5v6l-3.358-1.343A3.99 3.99 0 0 0 12 8a3.99 3.99 0 0 0-.358-1.657zM9.657 4.358L11 1H5l1.343 3.358A3.985 3.985 0 0 1 8 4c.59 0 1.152.128 1.657.358zM4.358 6.343L1 5v6l3.358-1.343A3.985 3.985 0 0 1 4 8c0-.59.128-1.152.358-1.657zm1.985 5.299L5 15h6l-1.343-3.358A3.984 3.984 0 0 1 8 12a3.99 3.99 0 0 1-1.657-.358z"/>
                                      </svg>
                                </div>
                                <div class="ma_card-content">
                                    <p class="ma_card-number">02</p>
                                    <h6 class="ma_card-title">Fokus Pengembangan</h6>
                                    <p class="ma_card-paragraph">Fokus usaha pengembangan dan pemberdayaan bidang Pertanian, Peternakan dan Perikanan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ma_card">
                                <div class="ma_card-icon" style="color:#c7dbd7">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1.018 7.5h2.49c.037-1.07.189-2.087.437-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5zM3.05 3.049c.362.184.763.349 1.198.49.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm-.5 1.077c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.473.257 2.282.287V1.077zm0 4.014c-.91-.03-1.783-.145-2.591-.332a12.344 12.344 0 0 0-.4 2.741H7.5V5.091zm1 2.409V5.091c.91-.03 1.783-.145 2.591-.332.223.827.364 1.754.4 2.741H8.5zm-1 1H4.51c.035.987.176 1.914.399 2.741A13.596 13.596 0 0 1 7.5 10.91V8.5zm1 2.409V8.5h2.99a12.343 12.343 0 0 1-.399 2.741A13.596 13.596 0 0 0 8.5 10.91zm-1 1c-.81.03-1.577.13-2.282.287.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91zm-2.173 2.563a6.695 6.695 0 0 1-.597-.933 8.857 8.857 0 0 1-.481-1.078 8.356 8.356 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.52zM2.38 12.175c.47-.258.995-.482 1.565-.667A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.964 6.964 0 0 0 1.362 3.675zm8.293 2.297a7.01 7.01 0 0 0 2.275-1.521 8.353 8.353 0 0 0-1.197-.49 8.859 8.859 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zm.11-2.276A12.63 12.63 0 0 0 8.5 11.91v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872zm1.272-.688c.57.185 1.095.409 1.565.667A6.964 6.964 0 0 0 14.982 8.5h-2.49a13.355 13.355 0 0 1-.437 3.008zm.437-4.008h2.49a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zm-.74-3.96a8.854 8.854 0 0 0-.482-1.079 6.692 6.692 0 0 0-.597-.933c.857.355 1.63.875 2.275 1.521a8.368 8.368 0 0 1-1.197.49zm-.97.264c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z"/>
                                    </svg>
                                </div>
                                <div class="ma_card-content">
                                    <p class="ma_card-number">03</p>
                                    <h6 class="ma_card-title">Kemudahan Akses</h6>
                                    <p class="ma_card-paragraph">Memberi kemudahan Investor & kesempatan bagi pelaku usaha untuk berkembang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <img src="{{asset('image/makarya-farmer.png')}}" alt="" srcset="" style="max-height: 100%; max-width:100%">
                </div>
            </div>
        </div>
        <div style="height:50px;background-color:white"></div>
        <div id="section-4">
            <div class="row">
                <div class="col-10">
                    <h6 class="ma_section-subtitle">CARA KERJA KAMI</h6>
                    <div style="height:20px;background-color:white"></div>
                    <h1 class="ma_section-title">
                        <span class="text-dark">Bagaimana </span>
                        <span class="text-success">Makarya </span>
                        <span class="text-dark">bekerja?</span>
                    </h1>
                </div>
                <div class="col-2 ma_side-title">
                    <p class="ma_side-title-text pt-auto" style=""> LANGKAH</p>
                    <h1 class="my-0 py-0">03</h1>
                </div>
            </div>
            <div style="height:50px;background-color:white"></div>
            <div class="row">
                <div class="col-4 text-center ma_image-card">
                    <img src="{{asset('image/makarya-vector-02-480x295.png')}}" alt="" srcset="">
                    <div style="height:30px;background-color:white"></div>
                    <h4>Pilih Usaha yang Didanai</h4>
                    <div style="height:10px;background-color:white"></div>
                    <p>Pilih usaha yang diingin oleh investor untuk pengembangan usaha dan produk</p>
                </div>
                <div class="col-4 text-center ma_image-card">
                    <img src="{{asset('image/makarya-vector-03-480x295.png')}}" alt="" srcset="">
                    <div style="height:30px;background-color:white"></div>
                    <h4>Kirim Modal Usaha</h4>
                    <div style="height:10px;background-color:white"></div>
                    <p>Transfer uang yang akan diberikan pada usaha yang dipilih</p>
                </div>
                <div class="col-4 text-center ma_image-card">
                    <img src="{{asset('image/makarya-vector-04-480x295.png')}}" alt="" srcset="">
                    <div style="height:30px;background-color:white"></div>
                    <h4>Monitor Usaha</h4>
                    <div style="height:10px;background-color:white"></div>
                    <p>Pantau usaha yang anda pilih dan nikmati hasilnya</p>
                </div>
            </div>
        </div>
        <div style="height:50px;background-color:white"></div>
        <div id="section-5" style="background-color:white">
            <div class="row">
                <div class="col-sm-12">
                    <h6 class="ma_section-subtitle">MITRA USAHA KAMI</h6>
                    <div style="height:20px;background-color:white"></div>
                    <h1 class="ma_section-title">
                        <span class="text-dark">Bidang Usaha </span>
                        <span class="text-success">Mitra Makarya</span>
                    </h1>
                </div>
            </div>
            <div style="height:30px;background-color:white"></div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="ma_image-slide">
                        <img src="{{asset('image/vegetables-unsplash-wallpaper-330x330.jpg')}}" alt="Avatar" class="image">
                        <div class="overlay"></div>
                        <div class="overlay2"></div>
                        <div class="text text-center">
                            <h4>Pertanian</h4>
                            <div style="height:25px"></div>
                            <div>
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
                                </svg>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4">
                    <div class="ma_image-slide">
                        <img src="{{asset('image/makarya-sheep-330x330.jpg')}}" alt="Avatar" class="image">
                        <div class="overlay"></div>
                        <div class="overlay2"></div>
                        <div class="text text-center">
                            <h4>Peternakan</h4>
                            <div style="height:25px"></div>
                            <div>
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
                                </svg>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4">
                    <div class="ma_image-slide">
                        <img src="{{asset('image/makarya-fishery-330x330.jpg')}}" alt="Avatar" class="image">
                        <div class="overlay"></div>
                        <div class="overlay2"></div>
                        <div class="text text-center">
                            <h4>Perikanan</h4>
                            <div style="height:25px"></div>
                            <div>
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
                                </svg>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div style="height:75px;background-color:white"></div>
        <div id="section-6">
            <div class="row">
                <div class="col-sm-12">
                    <h6 class="ma_section-subtitle">HASIL USAHA MITRA</h6>
                    <div style="height:20px;background-color:white"></div>
                    <h1 class="ma_section-title">
                        <span class="text-dark">Beli Hasil Usaha </span>
                        <span class="text-success">Mitra Makarya</span>
                    </h1>
                </div>
            </div>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                <div class="col-sm-3">
                    <div class="ma-product-3">
                        <div class="ma-product-3-image">
                            <img class="ma-product-3-image-avatar" src="{{asset('image/chicken-egg-b-300x295.jpg')}}" alt="Avatar">
                            <div class="row ma-product-3-action py-3 px-3">
                                <div class="col-sm-2">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </div>
                                <div class="col-sm-10">
                                    <p>Tambah ke keranjang</p>
                                </div>
                            </div>
                        </div>
                        <div style="height: 15px"></div>
                        <div class="text-center">
                            <p class="mb-1">Telur ayam coklat</p>
                            <p class="text-primary">Rp. 15.000</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="row mt-4">
                <div class="col-sm-12 text-center">
                    <a class="btn btn-success" href="{{url('/market')}}">
                        Lihat selengkapnya
                    </a>
                </div>
            </div>
        </div>
        <div style="height:75px;background-color:white"></div>
        <div id="section-7" style="background-image:url('{{asset('image/home-appointment-contact-bg-image.png')}}')">
            <div class="row">
                <div class="col-sm-12">
                    <div style="height:20px;background-color:white"></div>
                    <h1 class="ma_section-title">
                        <span class="text-dark">Butuh Bantuan </span>
                        <span class="text-success">Makarya</span>
                        <span class="text-dark">?</span>
                    </h1>
                    <h6>Tinggalkan pesan untuk kami dan kami akan membalas pesan Anda secepatnya!</h6>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama *">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email *">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subjek">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Tinggalkan pesan Anda disini."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success">
                                Dapatkan konsultasi gratis
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h6>ATAU HUBUNGI KAMI VIA</h6>
                            <h1 class="footer-phone">(+62) 821 3000 4204</h1>
                            <p>Mulai berkonsultasi dengan kami mengenai apa yang Anda butuhkan untuk membangun pertanian Indonesia bersama kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:75px;background-color:white"></div>
        <div id="section-footer">
            <div class="row p-4">
                <div class="col-md-5 px-4">
                    <img src="{{asset('image/makarya-light-250x75.png')}}" alt="">
                    <div style="height:20px"></div>
                    <p>Jl. Shinta No. 20, Purwo Asri, RT 40B, RW 016, Kroyo, Karang Malang
                        Sragen, Indonesia</p>
                    <a href="#" class="text-decoration-none text-success">support@makarya.in</a><br/>
                    <div style="height:10px"></div>
                    <a href="#" class="text-decoration-none text-success">(+62) 821 3000 4204</a>
                </div>
                <div class="col-md-7 px-4">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="my-4">Navigasi</h4>
                            <ul>
                                <li><a href="#" class="text-decoration-none">Home</a></li>
                                <li><a href="#" class="text-decoration-none">Tentang Kami</a></li>
                                <li><a href="#" class="text-decoration-none">Fitur</a></li>
                                <li><a href="#" class="text-decoration-none">Cara Kerja</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="my-4">Link Terkait</h4>
                            <ul>
                                <li><a href="#" class="text-decoration-none">Blog</a></li>
                                <li><a href="#" class="text-decoration-none">Hubungi Kami</a></li>
                                <li><a href="#" class="text-decoration-none">Bantuan & FAQ</a></li>
                                <li><a href="#" class="text-decoration-none">Syarat & Ketentuan</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="my-4">Download App</h4>
                            <img class="mb-1" style="border-radius:.5em" src="{{asset('image/mitech-button-google-play-light.jpg')}}" alt=""/>
                            <img  style="border-radius:.5em" src="{{asset('image/mitech-button-app-store-light.jpg')}}" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height:20px"></div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between">
                    <div class="px-4"><p class="pl-2">© 2020 Makarya. All Rights Reserved</p></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
@endsection