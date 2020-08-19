
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
                        <form class="row p-3">
                            <div class="mb-3 row">
                                <label for="oldPassword" class="col-sm-3 col-form-label">Password Lama</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="oldPassword" value="">
                                </div>
                            </div>
                            <div class="mb-5 row">
                                <label for="newPassword" class="col-sm-3 col-form-label">Password Baru</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="newPassword" value="">
                                </div>
                            </div>
                            <div class="mb-5 row">
                                <label for="newPassword2" class="col-sm-3 col-form-label">Password Baru (ulangi)</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="newPassword2" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-12 text-right">
                                    <button class="btn btn-success btn-sm" style="width: 5rem">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:50px"></div>
@endsection