@extends('app')
@section('content')
<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="container shadow" style="margin-top: 7em;">
        <div class="row ma-profile-container">
            <div class="col-md-2 p-3 sidebar"></div>
    <div class="col s12 m5">
        <div class="card-panel white">
            <img src="{{asset('image/makarya-dark-160x48.png')}}" alt="" srcset="">
            <div class="row" style="width: 80vw">
                <div class="col s7" style="text-align: center; border-right: #666 1px solid;">
                    <img src="{{asset('image/makarya-farmer.png')}}" style="height: 70vh;" alt="" srcset="">
                </div>
                <div class="col s5" style="padding-left: 20px;">
                    <div class="row" style="margin-bottom: 20px">
                        <div class="col s12">
                            <h4>Selamat datang</h4>
                            <p>Silahkan isi identitas diri anda dan klik daftar sekarang untuk melakukan investasi.</p>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col s12">
                            <div class="row" style="margin-bottom:0">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nama lengkap" aria-label="Nama lengkap">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="No Telepon" aria-label="No Telepon">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Password" aria-label="Password">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Konfirmasi Password" aria-label="Konfirmasi Password">
                                </div>
                            </div>
                            <div class="row" >
                                <div class="mb-3 text-center" >
                                    <button type="button" class="btn btn-success">Daftar Sekarang</button>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="mb-3 text-center">
                                    <button type="button" class="btn btn-primary col-md-5">Facebook</button>
                                    <button type="button" class="btn btn-danger col-md-5" >Gmail</button>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0">
                                <div class="col s12">
                                    <div class="col s12">
                                        <p style="margin-bottom:0">Sudah punya akun? <a href="/auth">Login sekarang</a></p>
                                    </div>
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