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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:50px"></div>
@endsection