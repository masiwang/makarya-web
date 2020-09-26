
@extends('app')
@section('content')
    @include('client/components/_navbar')
    <div class="container shadow" style="margin-top: 7em">
        <div class="row ma-profile-container">  
            <div class="col-md-2 p-3 sidebar">
                @include('client/profile/_sidebar')
            </div>
            <div class="col-md-10"> 
                <div class="row">
                    <div class="col-md-12 card-body">
                        @include('client/market/_topbarmarket')
                        <div class="row m-3">
                            <div class="col-sm-3">
                              <div class="card mb-3 text-white" style="max-width: 540px;">  
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="{{asset('image/fisheries.jpg')}}" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('image/farmer.jpg')}}" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('image/farmercow.jpg')}}" class="d-block w-100" alt="...">
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                              </div>  
                            </div>
                            <div class="col-sm-5">
                                <div class="row">
                                    <h4 class="col-12">SAYUR CAPCAY PAKET LENGKAP - Sayur Segar</h4>
                                    <small class="col-12 text-info">PT. Majukarya Sentosa Gemilang Abadi</small>
                                    <div style="height: 10px;"></div>
                                    <div class="col-12">
                                        <h4 class="" style="color: orange">Rp. 12.000,-/kg</h4>
                                    </div>
                                    <div style="height: 5px;"></div>
                                    <div class="row mb-3">
                                        <div class="col-5">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">Qty</span>
                                                <input type="number" class="form-control" placeholder="3" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>    
                                        </div>
                                        <div class="col-5">
                                            <button type="button" class="btn btn-secondary btn-block text-white"><span class="text-white" href="{{url('/checkout')}}">Hapus</span></button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                    <h6 class="card-title">Ringlasan Belanja</h6>
                                    <hr style="color: green">
                                    <table class="table">
                                      <tbody>
                                        <tr>
                                          <th >Total Harga<span>(3)</span></th>
                                          <th></th>
                                          <td class="text-right">Rp,100.000</td>
                                        </tr>
                                        <tr>
                                          <th>Total Ongkos Kirim</th>
                                          <th></th>
                                          <td class="text-right">Rp,6.000</td>
                                        </tr>
                                      </tbody>
                                      <tbody>
                                          <th><h5>Total Tagihan</h5></th>
                                          <th></th>
                                          <td scope="row" class="text-right" style="color: orange"><h5>Rp,106.000</h5></td>
                                      </tbody>
                                    </table>
                                    <a href="#" class="btn btn-warning btn-block text-white" style="color: orange">Pembayaran</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                              <a class="navbar-brand" href="#">Navbar</a>
                              <ul class="nav nav-pills">
                                <li class="nav-item">
                                  <a class="nav-link" href="#fat">@fat</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#mdo">@mdo</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#one">one</a></li>
                                    <li><a class="dropdown-item" href="#two">two</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#three">three</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </nav>
                            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                              <h4 id="fat">@fat</h4>
                              <p>...</p>
                              <h4 id="mdo">@mdo</h4>
                              <p>...</p>
                              <h4 id="one">one</h4>
                              <p>...</p>
                              <h4 id="two">two</h4>
                              <p>...</p>
                              <h4 id="three">three</h4>
                              <p>...</p>
                            </div>
                    </div>
                    <div style="height:50px"></div>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div style="height:50px"></div>
    
@endsection