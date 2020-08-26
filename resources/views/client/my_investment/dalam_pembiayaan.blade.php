
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
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> 
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
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
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
        <h5 class="modal-title text-success" id="staticBackdropLabel">Upload Dokumen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--isi modal-->
        <div class="row g-3">
          <label for="staticEmail" class="col-form-label">Foto KTP</label>
          <div class="form-file">
            <input type="file" class="form-file-input" id="customFile">
            <label class="form-file-label" for="customFile">
              <span class="form-file-text">Choose file...</span>
              <span class="form-file-button">Browse</span>
            </label>
          </div>
          <label for="staticEmail" class="col-form-label">Foto NPWP</label>
            <div class="form-file">
              <input type="file" class="form-file-input" id="customFile">
              <label class="form-file-label" for="customFile">
                <span class="form-file-text">Choose file...</span>
                <span class="form-file-button">Browse</span>
              </label>
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button> -->
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>
    <div style="height:50px"></div>
@endsection