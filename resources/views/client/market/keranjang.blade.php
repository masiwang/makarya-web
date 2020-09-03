
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
                                    <div class="row mb-3">
                                        <div class="col-5">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">Qty</span>
                                                <input type="number" class="form-control" placeholder="3" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="text-primary">Total Harga</h6> 
                                            <h6 class="text-success"><span class="text-dark">Estimasi harga: </span>Rp. 12.000</h6>
                                            <button type="button" class="btn btn-success btn-lg btn-block text-white"><span class="text-white">Beli</span>(3)</button>
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