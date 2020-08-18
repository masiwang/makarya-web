@extends('client/auth/_master')
@section('content')
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="col s12 m5">
            <div class="card-panel white">
                <img src="{{asset('image/makarya-dark-160x48.png')}}" alt="" srcset="">
                <div class="row" style="width: 80vw">
                    <div class="col s7 " style="text-align: center; border-right: #666 1px solid;">
                        <img src="{{asset('image/makarya-farmer.png')}}" style="height: 70vh;" alt="" srcset="">
                    </div>
                    <div class="col s5" style="padding-left: 20px;">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col s12">
                                <h4>Selamat datang</h4>
                                <p>Untuk menggunakan layanan kami, harap autentikasi dengan email dan password Anda yang telah terdaftar.</p>
                            </div>
                        </div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row" style="margin-bottom:0">
                                    <div class="input-field col s12">
                                        <input placeholder="email@anda.com" id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="******" id="password" type="password" class="validate">
                                        <label for="password">Password</label>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="col s6">
                                        <a class="waves-effect waves-light btn green accent-4">Masuk</a>
                                    </div>
                                    <div class="col s6" style="text-align:right">
                                        <a href="">Lupa password?</a>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:0">
                                    <div class="col s12">
                                        <div class="col s12">
                                            <p style="margin-bottom:0">Belum punya akun? <a href="/signup">Registrasi</a></p>
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
@endsection