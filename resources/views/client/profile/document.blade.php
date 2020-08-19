
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
                                <label for="staticEmail" class="col-sm-2 col-form-label">Foto KTP</label>
                                <div class="col-sm-10">
                                    <p id="addBirthday" class="col-form-label">331419**********</p>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor KTP</label>
                                <div class="col-sm-10">
                                    <p id="addBirthday" class="col-form-label">331419**********</p>
                                </div>
                            </div>
                            <div class="mb-5 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor NPWP</label>
                                <div class="col-sm-10">
                                    <p id="addBirthday" class="col-form-label">99.999.999.x-xxx.xxx</p>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-12 text-left">
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