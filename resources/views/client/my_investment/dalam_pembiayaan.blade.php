
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
                        @include('client/my_investment/_topbarinvest')
                        <div class="row p-3">
                          <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{asset('image/fisheries.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-img-overlay text-right">
                                  <button type="button" class="btn btn-info text-white rounded-pill btn-sm">Menunggu Pembayaran</button>
                                </div>
                                <div class="card-body text-success">
                                  <h5 class="card-title">Budidaya Perikanan Jepara</h5>
                                  <p class="card-text">Budidaya oleh peternakan telur yang tebukktu kebersihanya</p> 
                                  <hr>
                                  <div class="row">
                                    <table class="table">
                                      <tbody>
                                        <tr class="text-success text-left">
                                          <th scope="row">Harga</th>
                                          <td>Rp,500.000</td>
                                        </tr>
                                        <tr class="text-success text-left">
                                          <th scope="row">Periode Kontrak</th>
                                          <td>1 Tahun</td>
                                        </tr>
                                        <tr class="text-success text-left">
                                          <th scope="row">Stock</th>
                                          <td>100 Unit</td>
                                        </tr>
                                        <tr class="text-success text-left">
                                          <th scope="row">Batas Waktu</th>
                                          <td>22 Oktober 2020</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="text-center">
                                  <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#staticBackdrop">Lihat detail</button>
                                  </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{asset('image/farmer.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-img-overlay text-right">
                                  <button type="button" class="btn btn-info text-white rounded-pill btn-sm">Menunggu Pembayaran</button>
                                </div>
                                <div class="card-body text-success">
                                  <h5 class="card-title">Ayam Petelur Sragen</h5>
                                  <p class="card-text">This is a longer card with supporting.</p>
                                  <hr>
                                  <div class="row">
                                    <table class="table">
                                      <tbody>
                                        <tr class="text-success text-left">
                                          <th scope="row">Harga</th>
                                          <td>Rp,500.000</td>
                                        </tr>
                                        <tr class="text-success text-left">
                                          <th scope="row">Periode Kontrak</th>
                                          <td>1 Tahun</td>
                                        </tr>
                                        <tr class="text-success text-left">
                                          <th scope="row">Stock</th>
                                          <td>100 Unit</td>
                                        </tr>
                                        <tr class="text-success text-left">
                                          <th scope="row">Batas Waktu</th>
                                          <td>22 Oktober 2020</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="text-center">
                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">Lihat detail</button>
                                  </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{asset('image/farmercow.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body text-success">
                                  <h5 class="card-title">Peternakan Sapi Gombloh</h5>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="text-center">
                                  <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop">Lihat detail</button>
                                  </div>
                              </div>
                            </div>
                          </div>
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
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="staticBackdropLabel">Metode Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--isi modal-->
        <div class="row g-3">
          <table class="table table-secondary">
            <tbody>
              <tr>
                <th >Jumlah Unit</th>
                <th>2 x harga/unit</th>
                <td scope="row">2 x Rp,100.000</td>
              </tr>
            </tbody>
            <tbody>
              <tr>
                <th></th>
                <th>Total bayar</th>
                <td scope="row">Rp,200.000</td>
              </tr>
            </tbody>
          </table>
          <div class="form-file">
            <input type="file" class="form-file-input" id="customFileLong">
            <label class="form-file-label" for="customFileLong">
              <span class="form-file-text" style="color: grey">Upload Bukti Transfer</span>
              <span class="form-file-button">Browse</span>
            </label>
          </div>
          
            <a class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Syarat dan Kondisi Pembayaran
            </a>
          
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              -Transaksi akan dibatalkan jika dalam jangka waktu 2 x 24 jam tidak terjadi pembayaran (transfer).
            </div>
          </div>
          </div>
        </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button> -->
        <button type="button" class="btn btn-warning text-white">Biayai Sekarang</button>
      </div>
    </div>
  </div>
</div>
    <div style="height:50px"></div>
@endsection