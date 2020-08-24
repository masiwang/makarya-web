
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
                        @include('client/profile/_topbar')
                        <div class="row p-3">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Upload KTP</label>
                                <div class="form-file">
                                    <input type="file" class="form-file-input" id="customFile">
                                    <label class="form-file-label" for="customFile">
                                      <span class="form-file-text">Choose file...</span>
                                      <span class="form-file-button">Browse</span>
                                    </label>
                                  </div>
                            </div>
                            <div class="mb-3 row">
                                <img src="..." class="img-thumbnail" alt="...">
                            </div>
                            {{-- <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Foto KTP</label>
                                <div class="col-sm-10">
                                    <p id="addBirthday" class="col-form-label">331419**********</p>
                                </div>
                            </div> --}}
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Upload NPWP</label>
                                <div class="form-file">
                                    <input type="file" class="form-file-input" id="customFile">
                                    <label class="form-file-label" for="customFile">
                                      <span class="form-file-text">Choose file...</span>
                                      <span class="form-file-button">Browse</span>
                                    </label>
                                  </div>
                            </div>
                            <div class="mb-3 row">
                                <img src="..." class="img-thumbnail" alt="...">
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop">
                                    ubah dokumen
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ubah Dokumen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--isi modal-->
        <div class="row g-3">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Nomor KTP" aria-label="Nomor KTP">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Nomor NPWP" aria-label="Nomor NPWP">
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