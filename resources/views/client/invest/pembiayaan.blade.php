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
                                                <button type="button" class="btn btn-success">Lihat selengkapnya</button>
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
                                                <button type="button" class="btn btn-success">Lihat selengkapnya</button>
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
                                                <button type="button" class="btn btn-success">Lihat selengkapnya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
        <div style="height: 50px"></div>
@endsection