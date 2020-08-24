@extends('app')
@section('content')
    @include('client/components/_navbar')
    <div class="container">
        <div class="row" style="margin-top:7rem">
            <div class="col-sm-12">
                <div class="section category">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-group list-group-horizontal list-group-menu">
                                <li class="list-group-item ma-menu ma-daging" style="border-radius: 1rem;background-image:url({{asset('image/menu3.png')}}); background-size:cover; background-repeat:none;background-position:center">
                                    <a href="">
                                        <div class="ma-menu-title" style="position: absolute; left: 0; bottom: 20%; right: 0; display: flex; justify-content: center; color: white; z-index: 99;transform:translate(0, 50%)">
                                            <h4>Peternakan</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item ma-menu ma-sayur" style="border-radius: 1rem;background-image:url({{asset('image/menu1.png')}}); background-size:cover; background-repeat:none;background-position:center">
                                    <a href="">
                                        <div class="ma-menu-title" style="position: absolute; left: 0; bottom: 20%; right: 0; display: flex; justify-content: center; color: white; z-index: 99;transform:translate(0, 50%)">
                                            <h4>Pertanian</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item ma-menu ma-ikan" style="border-radius: 1rem;background-image:url({{asset('image/menu4.png')}}); background-size:cover; background-repeat:none;background-position:center">
                                    <a href="">
                                        <div class="ma-menu-title" style="position: absolute; left: 0; bottom: 20%; right: 0; display: flex; justify-content: center; color: white; z-index: 99;transform:translate(0, 50%)">
                                            <h4>Perikanan</h4>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                </div>
                <div class="row">
                    <h3 class="mb-3" style="text-align: center">Pilih Pembiayaan</h3>
                </div>
                <div class="container">
                    <div class="row" style="margin-top:3rem">
                        <div class="col-sm-12">
                            <div class="section category">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card border border-grey" style="width: 18rem;">
                                            <img src="{{asset('image/chicken-egg-b-300x295.jpg')}}" class="card-img-top" alt="Avatar">
                                            <div class="card-body">
                                                <h5 class="card-title text-success" style="text-align: center">Ayam Petelur</h5>
                                                <div class="text-center">
                                                <button type="button" class="btn btn-warning text-white rounded-pill">Sedang Berjalan</button>
                                                </div>
                                                {{-- <p class="card-text" style="text-align: center">Lebih dari 300 ayam produktif penghasil telur kualitas terbaik .</p> --}}
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item text-black-50" style="text-align: center">Harga 
                                                    <p class="text-success">Rp. 2.500.000</p>
                                                </li>
                                                <li class="list-group-item text-black-50" style="text-align: center">Periode Kontrak
                                                    <p class="text-success">2 tahun</p>
                                                </li>
                                                <li class="list-group-item text-black-50" style="text-align: center">Stok
                                                    <p class="text-success">200</p>
                                                    <button type="button" class="btn btn-outline-success text-center" data-toggle="modal" data-target="#staticBackdrop">Lihat selengkapnya</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card border border-grey" style="width: 18rem;">
                                            <img src="{{asset('image/jamur-merang-300x300.jpg')}}" class="card-img-top" alt="Avatar">
                                            <div class="card-body">
                                                <h5 class="card-title text-success" style="text-align: center">Jamur Merang</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success text-white rounded-pill">Pendanaan Selesai</button>
                                                </div>
                                                {{-- <p class="card-text" style="text-align: center">Lebih dari 300 ayam produktif penghasil telur kualitas terbaik .</p> --}}
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item text-black-50" style="text-align: center">Harga 
                                                    <p class="text-success">Rp. 2.500.000</p>
                                                </li>
                                                <li class="list-group-item text-black-50" style="text-align: center">Periode Kontrak
                                                    <p class="text-success">2 tahun</p>
                                                </li>
                                                <li class="list-group-item text-black-50" style="text-align: center">Stok
                                                    <p class="text-success">200</p>
                                                    <button type="button" class="btn btn-outline-success text-center" data-toggle="modal" data-target="#staticBackdrop">Lihat selengkapnya</button>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card border border-grey" style="width: 18rem;">
                                            <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" class="card-img-top" alt="Avatar">
                                            <div class="card-body">
                                                <h5 class="card-title text-success" style="text-align: center">Kacang Panjang</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success text-white rounded-pill">Pendanaan Selesai</button>
                                                </div>
                                                {{-- <p class="card-text" style="text-align: center">Lebih dari 300 ayam produktif penghasil telur kualitas terbaik .</p> --}}
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item text-black-50" style="text-align: center">Harga 
                                                    <p class="text-success">Rp. 2.500.000</p>
                                                </li>
                                                <li class="list-group-item text-black-50" style="text-align: center">Periode Kontrak
                                                    <p class="text-success">2 tahun</p>
                                                </li>
                                                <li class="list-group-item text-black-50" style="text-align: center">Stok
                                                    <p class="text-success">200</p>
                                                    <button type="button" class="btn btn-outline-success text-center" data-toggle="modal" data-target="#staticBackdrop">Lihat selengkapnya</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
        <div style="height: 30px"></div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <button class="btn btn-success">
                    Lihat Semua Pendanaan
                </button>
            </div>
        </div>
         <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
        {{-- <img src="{{asset('image/chicken-egg-b-300x295.jpg')}}" class="img-fluid" alt="Avatar"> --}}
        {{-- <span class="badge bg-warning text-white">Sedang Berjalan</span> --}}
          <h5 class="modal-title" id="staticBackdropLabel">Ayam Petelur</h5>    
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="text-center">
            <img src="{{asset('image/chicken-egg-b-300x295.jpg')}}" class="rounded" alt="...">
        </div>
        <div class="modal-body">
            <nav>
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                  <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deskripsi</a>
                  <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Simulasi Hasil</a>
                </div>
              </nav>
              <div class="tab-content justify-content-center" id="nav-tabContent">
                <div style="height:30px"></div>  
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    Jagung merupakan komoditas pangan strategis bagi masyarakat Indonesia, selain banyak digunakan sebagai bahan baku lanjutan juga banyak dimanfaatkan untuk bahan baku pakan ternak. Hingga saat ini pemerintah melalui Kementerian Pertanian dan Peternakan terus mendorong agar produksi jagung di tanah air mengalami kenaikan sehingga bisa memenuhi kebutuhan dalam negeri sekaligus melakukan ekspor. Bahkan Presiden Joko Widodo telah mengintruksikan kepada BULOG untuk menyerap seluruh hasil panen dari petani dengan harga minimal Rp. 3.150 per kg. (liputan6.com).
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div style="height:20px"></div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Bulan ke</th>
                            <th scope="col">Bagi Hasil Bersih</th>
                            <th scope="col">Bagi Hasil (%)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">6</th>
                            <td>Rp. 200.000</td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <th scope="row">12</th>
                            <td>Rp. 200.000</td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <th scope="row">Pengembalian Modal</th>
                            <td colspan="1">Rp. 2.500.000</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Total</th>
                            <td colspan="1">Rp. 3.250.000</td>
                            <td>-</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
        
        <div class="modal-footer">
            <div class="row mb-6 text-center">
                <div class="col-6">
                    <div class="input-group">
                        {{-- <span class="input-group-text" id="basic-addon1">Qty</span> --}}
                        <input type="number" class="form-control" placeholder="Jumlah Unit" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>                  
                        <button type="button" class="btn btn-success col-6">Biayai Sekarang</button>            
            </div>
        </div>    
      </div>
    </div>
  </div>

  <div style="height: 30px"></div>
                <hr/>
                <div style="height:20px"></div>
                <div id="section-footer bg-light">
                    <div class="row p-4">
                        <div class="col-md-5 px-4">
                            <img src="{{asset('image/makarya-dark-160x48.png')}}" height="50px" alt="">
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
                                    <ul class="ma-footer-link">
                                        <li><a href="#" class="text-decoration-none">Home</a></li>
                                        <li><a href="#" class="text-decoration-none">Tentang Kami</a></li>
                                        <li><a href="#" class="text-decoration-none">Fitur</a></li>
                                        <li><a href="#" class="text-decoration-none">Cara Kerja</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="my-4">Link Terkait</h4>
                                    <ul class="ma-footer-link">
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
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="">
                                <div class="row m-3">
                                    <div class="col-sm-6 text-center">
                                        <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <h4 class="col-12">Kacang Panjang</h4>
                                            <small class="col-12 text-info">PT. Majukarya Sentosa Gemilang Abadi</small>
                                            <div style="height: 20px;"></div>
                                            <div class="col-12">
                                                <h4 class="text-success">Rp. 12.000,-/kg</h4>
                                            </div>
                                            <div style="height: 20px;"></div>
                                            <div class="col-12">
                                                <p>Produk dari PT. Majukarya Sentosa Gemilang Abadi ini ditanam dengan metode hidroponik di atas gunung yang tinggi.</p>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Qty</span>
                                                        <input type="number" class="form-control" placeholder="0" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-success"><span class="text-dark">Estimasi harga: </span>Rp. 12.000.000</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-success">Tambahkan</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
@endsection