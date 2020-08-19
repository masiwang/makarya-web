
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
                            <div class="col-12 table-responsive">
                                <table class="table table-borderless">
                                    <thead class="border-bottom">
                                      <tr class="text-success">
                                        <th scope="col" width="5%"></th>
                                        <th scope="col">Penerima</th>
                                        <th scope="col">Alamat Pengiriman</th>
                                        <th scope="col" width="5%"></th>
                                        <th scope="col" width="5%"></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">
                                            <button class="btn btn-outline-success btn-sm w-100">
                                                Pilih
                                            </button>
                                        </th>
                                        <td>
                                            <div><b>Maulana Ichwan Anshory</b></div>
                                            <div>088233010696</div>
                                        </td>
                                        <td>
                                            <div><b>Rumah Pak Warsito</b></div>
                                            <div>Gendol, RT 26, Dukuh, Tangen, Kab. Sragen, Jawa Tengah, 57261</div>
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">
                                                Ubah
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">
                                            <button class="btn btn-success btn-sm w-100">
                                                Terpilih
                                            </button>
                                        </th>
                                        <td>
                                            <div><b>Maulana Ichwan Anshory</b></div>
                                            <div>088233010696</div>
                                        </td>
                                        <td>
                                            <div><b>Rumah Pak Warsito</b></div>
                                            <div>Gendol, RT 26, Dukuh, Tangen, Kab. Sragen, Jawa Tengah, 57261</div>
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">
                                                Ubah
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:50px"></div>
@endsection