@extends('app')
@section('content')
    @include('client/profile/_fab-chat')
    @include('client/components/_navbar')
    <div class="container shadow" style="margin-top: 7em;">
        <div class="row ma-profile-container">
            <div class="col-md-2 p-3 sidebar">
                @include('client/profile/_sidebar')
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 card-body">
                        @include('client/my_investment/_topbarinvest')
                        <div class="row p-3">
                            <h6> Status </h6>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Selamat!</strong> Akun anda telah terverifikasi.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            <div class="alert alert-warning" role="alert">
                                *Mohon unggah KTP dan NPWP anda
                            </div>
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Menunggu Verifikasi</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                <hr>
                                <div class="col-md-12"> 
                                    <form action="">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Lengkapi profilmu agar terverifikasi!</label>
                                            <div class="progress col-sm-4">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                              </div>
                                            <div class="col-md-4 text-right">
                                                <button type="button" class="btn btn-outline-success" href="{{('/profile')}}">
                                                Update Profile
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <h6> Dana Anda </h6>
                <div class="row">
                    <div class="col-sm-4">
                      <div class="card">
                        <img src="{{asset('image/dana.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                        <div class="card-body">
                          <h5 class="card-title" style="color: white">Dana yang bisa dicairkan</h5>
                          <hr class="text-light">
                            <table class="table table-primary">
                              <tbody>
                                <tr>
                                  <th scope="row" style="color: grey">Rp 0</th>
                                  <th></th>
                                  <th></th>
                                 
                                  <td><a href="#" class="btn btn-info text-white text-right">Cairkan Dana</a></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card bg-light">
                        <div class="card-body">
                          <h5 class="card-title">Total Bagi Hasil</h5>
                          <hr class="text-green">
                          <p class="card-text">Total bagi hasil anda di Makarya</p>
                          <h5 style="color: grey"> Rp 0 </h5>
                          {{-- <a href="#" class="btn btn-primary" style="text-align: right">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-light">
                          <div class="card-body">
                            <h5 class="card-title">Dalam Pendanaan</h5>
                            <hr class="text-green">
                            <p class="card-text">Dana yang menunggu untuk dikelola</p>
                            <h5 style="color: grey"> Rp 0 </h5>
                            {{-- <a href="#" class="btn btn-primary" style="text-align: right">Go somewhere</a> --}}
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div style="height:50px"></div>
@endsection