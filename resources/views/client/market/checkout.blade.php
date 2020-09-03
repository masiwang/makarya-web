
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
                        <div class="row">
                            <div class="col-sm-7">
                              <h6 class="text-success">Alamat Pengiriman</h6>
                              <hr style="color: green">
                              <div><b>Maulana Ichwan Anshory</b></div>
                              <div>088233010696</div>
                              <div style="color: grey">Jl. Mt. Haryono Gg. V, Kec. Lowokwaru, Kota Malang, Jawa Timur, 65144 [Makarya Note: Jalan MT Haryono Gg V no 271F]
                                Lowokwaru, Kota Malang, 65144</div>
                              <hr style="color: green">
                              <button type="button" class="btn btn-success">Ganti Alamat Lain</button>
                            </div>
                            
                            <div class="col-sm-5">
                              <div class="card">
                                <div class="card-body">
                                  <h6 class="card-title">Ringlasan Belanja</h6>
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