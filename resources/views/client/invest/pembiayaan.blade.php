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
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{asset('image/chicken-egg-b-300x295.jpg')}}" class="card-img-top" alt="Avatar">
                                            <div class="card-body">
                                                <h5 class="card-title" style="text-align: center">Ayam Petelur</h5>
                                                {{-- <p class="card-text" style="text-align: center">Lebih dari 300 ayam produktif penghasil telur kualitas terbaik .</p> --}}
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item" style="text-align: center">Harga 
                                                    <p class="text-success">Rp. 2.500.000</p>
                                                </li>
                                                <li class="list-group-item" style="text-align: center">Periode Kontrak
                                                    <p class="text-success">2 tahun</p>
                                                </li>
                                                <li class="list-group-item" style="text-align: center">Stok
                                                    <p class="text-success">200</p>
                                                </li>
                                            </ul>
                                            <div class="card-body text-center">
                                                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop">Lihat selengkapnya</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{asset('image/jamur-merang-300x300.jpg')}}" class="card-img-top" alt="Avatar">
                                            <div class="card-body">
                                                <h5 class="card-title" style="text-align: center">Jamur Merang</h5>
                                                {{-- <p class="card-text" style="text-align: center">Lebih dari 300 ayam produktif penghasil telur kualitas terbaik .</p> --}}
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item" style="text-align: center">Harga 
                                                    <p class="text-success">Rp. 2.500.000</p>
                                                </li>
                                                <li class="list-group-item" style="text-align: center">Periode Kontrak
                                                    <p class="text-success">2 tahun</p>
                                                </li>
                                                <li class="list-group-item" style="text-align: center">Stok
                                                    <p class="text-success">200</p>
                                                </li>
                                            </ul>
                                            <div class="card-body text-center">
                                                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop">Lihat selengkapnya</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{asset('image/kacang-panjang-300x300.jpg')}}" class="card-img-top" alt="Avatar">
                                            <div class="card-body">
                                                <h5 class="card-title" style="text-align: center">kacang Panjang</h5>
                                                {{-- <p class="card-text" style="text-align: center">Lebih dari 300 ayam produktif penghasil telur kualitas terbaik .</p> --}}
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item" style="text-align: center">Harga 
                                                    <p class="text-success">Rp. 2.500.000</p>
                                                </li>
                                                <li class="list-group-item" style="text-align: center">Periode Kontrak
                                                    <p class="text-success">2 tahun</p>
                                                </li>
                                                <li class="list-group-item" style="text-align: center">Stok
                                                    <p class="text-success">200</p>
                                                </li>
                                            </ul>
                                            <div class="card-body text-center">
                                                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop">Lihat selengkapnya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
        <div style="height: 50px"></div>
         <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Budidaya Ayam Petelur</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <nav>
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                  <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deskripsi</a>
                  <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Simulasi Hasil</a>
                </div>
              </nav>
              <div class="tab-content justify-content-center" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    Jagung merupakan komoditas pangan strategis bagi masyarakat Indonesia, selain banyak digunakan sebagai bahan baku lanjutan juga banyak dimanfaatkan untuk bahan baku pakan ternak. Hingga saat ini pemerintah melalui Kementerian Pertanian dan Peternakan terus mendorong agar produksi jagung di tanah air mengalami kenaikan sehingga bisa memenuhi kebutuhan dalam negeri sekaligus melakukan ekspor. Bahkan Presiden Joko Widodo telah mengintruksikan kepada BULOG untuk menyerap seluruh hasil panen dari petani dengan harga minimal Rp. 3.150 per kg. (liputan6.com).
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div style="height:30px"></div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Biayai Sekarang</button>
        </div>
      </div>
    </div>
  </div>
@endsection