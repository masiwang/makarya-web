
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
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">Ubah Alamat</button>
                              <div style="height:20px"></div>
                              <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="{{asset('image/capcay.jpg')}}" class="img-fluid" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h6 class="card-title">SAYUR CAPCAY PAKET LENGKAP - Sayur Segar</h6>
                                      <p class="card-text" style="color: orange">Rp,10.000.</p>
                                      <p class="text-muted">3 Barang</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-sm-5">
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
          <div class="row p-4">
            {{-- <h5 class="modal-title text-success" id="staticBackdropLabel">Ubah Alamat</h5> --}}
            <button type="button" class="close btn-lg" style="text-align: right" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title text-secondary text-center" id="staticBackdropLabel">Ubah Alamat</h4>
          </div>
          <div class="modal-body">
            <!--isi modal-->
            <div class="row g-3">
                <div class="col-md-12">
                  <small class="text-muted">Label Alamat</small>
                    <input type="text" class="form-control" placeholder="Rumah" aria-label="Nama lengkap">
                    <small class="text-muted">Contoh: Alamat Rumah, Alamat Kantor, Apartemen, Dropship</small>
                  </div>
                  
                    <div class="col-md-6">
                      <small class="text-muted">Nama Penerima</small>
                      <input type="text" class="form-control" placeholder="Nama" aria-label="First name">
                    </div>
                    <div class="col-md-6">
                      <small class="text-muted">Nomor Telepon</small>
                      <input type="text" class="form-control" placeholder="" aria-label="Last name">
                    </div>
                  
                    <div class="col-md-9">
                      <small class="text-muted">Kota atau Kecamatan</small>
                      <input type="text" class="form-control" placeholder="Tulis Nama Alamat/Kota/Kecamatan tujuan" aria-label="First name">
                    </div>
                    <div class="col-md-3">
                      <small class="text-muted">Kode Pos</small>
                      <input type="text" class="form-control" placeholder="Kode Pos" aria-label="Last name">
                    </div>
                    <div class="col-md-12">
                      <small class="text-muted">Alamat</small>
                      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Isi dengan nama jalan, nomor rumah, nomor kompleks,nama gedung, lantau atau nomor unit" rows="3"></textarea>
                    </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" style="color: grey" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <div style="height:50px"></div>
@endsection