@extends('app')
@section('content')
    @include('client/profile/_fab-chat')
    @include('components/_navbar')
    <div class="container shadow" style="margin-top: 7em;">
        <div class="row ma-profile-container">
            <div class="col-md-2 p-3 sidebar">
                @include('client/profile/_sidebar')
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 card-body">
                        @include('client/profile/_topbar')
                        <div class="row p-3">
                            <div class="col-md-4">
                                <div class="border p-2">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <img src="{{asset('image/default_toped-21.jpg')}}" class="w-100" alt="" srcset="">
                                        </div>
                                    </div>
                                    <form class="row" action="">
                                        <div class="col-12">
                                            <div class="form-file form-file-sm">
                                                <input type="file" class="form-file-input" id="customFileSm">
                                                <label class="form-file-label" for="customFileSm">
                                                  <span class="form-file-button w-100 text-center" style="border-radius:.25rem">Pilih foto</span>
                                                </label>
                                            </div>
                                            <button class="btn btn-success btn-sm w-100 mt-1">Simpan</button>
                                            <small class="ma-small">
                                                Besar maksimal ukuran file yang diizinkan adalah 1 Megabytes<br/>
                                                Ekstensi yang diperbolehkan adalah *.jpg, *.jpeg dan *.png.
                                            </small>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <form action="">
                                    <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addBirthday" class="col-sm-3 col-form-label">Tanggal lahir</label>
                                        <div class="col-sm-9">
                                            <p id="addBirthday" class="col-form-label">Tambah tanggal lahir</p>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addBirthday" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <p id="addBirthday" class="col-form-label">Tambah jenis kelamin</p>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="mb-3 row">
                                        <label for="addBirthday" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <p id="addBirthday" class="col-form-label">Tambah email</p>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addBirthday" class="col-sm-3 col-form-label">Nomor HP</label>
                                        <div class="col-sm-9">
                                            <p id="addBirthday" class="col-form-label">Tambah nomor HP</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop">
                                    Ubah Profile
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ubah Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--isi modal-->
        <div class="row g-3">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Nama lengkap" aria-label="Nama lengkap">
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                <option selected>Tanggal</option>
                <option value="1">1</option>
                <option value="2">2</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                <option selected>Bulan</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                <option selected>Tahun</option>
                <option value="1">1991</option>
                <option value="2">1990</option>
                </select>
            </div>
            <div class="col-md-12">
                <select class="form-select" aria-label="Default select example">
                <option selected>Jenis Kelamin</option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
                </select>
            </div>
            <div class="col-md-12">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="No handphone" aria-label="No handphone">
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