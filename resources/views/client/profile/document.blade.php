
@extends('app')
@section('content')
    @include('components/_navbar')
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
                                    <button class="btn btn-success btn-sm" style="width: 5rem">Ubah</button>
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